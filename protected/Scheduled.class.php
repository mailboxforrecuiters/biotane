<?php
ini_set("display_errors",1);
class Scheduled_Routes { 
    public $schedule_id;
    public $route_id;
    public $scheduled_start_date;
    public $facility_number;
    public $facility_origin;
    public $route_status;
    public $created_by;
    public $driver;
    public $account_name;
    public $account_number;
    public $code_red;
    public $date_created;
    public $notes;
    public $special_instructions;
    public $note_author;
    public $note_created_date;
    public $gals;
    public $created_date;
    public $onsite;
    public $account_friendly;
    public $zero_gallon_reason;
    public $deleted;
    public $issue_code;
    public $issue_associated;
    public $purp_siren;
    public $account_city;
    public $account_address;
    public $account_notes;
    public $ticks_per_day;
    public $account_last_pickup;
    public $container_list;
    public $account_zip;
    public $tote_exists;
    public $barrel;
    public function __construct($schedule_id) {
        if($schedule_id != NULL){
            $db = new Database();
            global $dbprefix;
            $acnt = new Account();
            $select = $db->where("schedule_id",$schedule_id)->get("iwp_scheduled_routes");
            if(count($select) >0){
                foreach($select as $value){
                    $this->schedule_id = $value['schedule_id'];
                    $this->route_id = $value['route_id'];
                    $this->scheduled_start_date =   $value['scheduled_start_date'];
                    $this->facility_origin =        numberToFacility($value['facility_origin']);
                    $this->route_status =           $value['route_status'];
                    $this->created_by =             uNumToName($value['created_by']);
                    $this->facility_number =        $value['facility_origin'];
                    if( strlen(trim($value['driver'])) >0 ){
                        $this->driver =             uNumToName($value['driver']);    
                    } else { 
                        $this->driver = "";
                    }
                    $this->account_name =           account_NumtoName($value['account_no']);
                    $this->account_number =         $value['account_no'];
                    $this->code_red =               $value['code_red'];
                    $this->en_route_id =            $value['en_route_id'];
                    $this->date_created =           $value['date_created'];
                    $this->created_date =           $value['date_created'];
                    $this->onsite =                 round($value['oil_onsite'],2);
                    $this->deleted=                 $value['deleted'];
                    $this->issue_associated =       $value['issue_associated'];
                    $this->account_address =        $acnt->singleField($value['account_no'],"address");
                    $this->account_city =           $acnt->singleField($value['account_no'],"city");
                    $this->account_notes=           $acnt->singleField($value['account_no'],"notes");
                    $this->ticks_per_day =          $acnt->singleField($value['account_no'],"ticks_per_day");
                    $this->account_zip  =           $acnt->singleField($value['account_no'],"zip");
                }
                
                $jh = $db->query("SELECT date_of_pickup FROM iwp_data_table WHERE account_no = $this->account_number ORDER BY date_of_pickup DESC LIMIT 0,1");
                $this->account_last_pickup =   $jh[0]['date_of_pickup'];
                $containers = $db->query("SELECT COUNT( container_no ) AS bar_num, container_no FROM iwp_containers WHERE account_no =$this->account_number AND iwp_containers.deleted =0 GROUP BY iwp_containers.container_no");
                if(count($containers)>0){
                    foreach($containers as $conts){
                        $this->container_list .= " $conts[bar_num] ) ".containerNumToName($conts['container_no'])."<br/>";
                    }
                }
                if(strlen(trim($this->issue_associated))>0){
                    $i = $db->query("SELECT iwp_driver_report.code FROM iwp_issues LEFT JOIN iwp_driver_report ON iwp_issues.issue = iwp_driver_report.value  WHERE issue_no = $this->issue_associated");
                    $this->issue_code = $i[0]['code'];
                    $this->purp_siren = "<img src='img/purp.png' style='width:25px;height:25px;'/>";
                }else{
                    $this->issue_code= "";
                    $this->purp_siren= "";
                }
                    
                $account_info = $db->query("SELECT friendly FROM iwp_accounts WHERE account_ID = $this->account_number AND (iwp_accounts.friendly IS NOT NULL AND iwp_accounts.friendly != 'null' AND iwp_accounts.friendly !=' ')");
                if(count($account_info)>0){
                    $this->account_friendly = $account_info[0]['friendly'];
                } else {
                    $this->account_friendly = "No";
                }
                    
                $note_spec = $db->query("SELECT * FROM iwp_notes WHERE schedule_id = $this->schedule_id");
                if(count($note_spec)>0){
                    $buffer = explode("|",$note_spec[0]['notes']);
                    
                    if(count($buffer)>0){
                        if(strlen($buffer[0])>0){
                            $this->notes = $buffer[0];
                        }
                        
                        if(strlen($buffer[1]) ){
                            $this->special_instructions = $buffer[1];
                        }
                        
                    }
                    
                }
                
                $hu = $db->query("SELECT IFNULL(zero_gallon_reason,'') as zero_gallon_reason,inches_to_gallons FROM iwp_data_table WHERE schedule_id=$this->schedule_id ORDER BY date_of_pickup DESC LIMIT 0,1");
                if(count($hu)>0){
                    $this->zero_gallon_reason = $hu[0]['zero_gallon_reason'];
                    $this->gals = $hu[0]['inches_to_gallons'];
                }
                
                $tote = $db->query("SELECT account_no FROM iwp_containers WHERE account_no = $this->account_number");
                if(count($tote)>0){
                    $this->tote_exists = 1;
                    $this->barrel = "<img src='img/oil_barrel_small_green.png'/>";
                }else{
                    $this->tote_exists = 0;
                    $this->barrel = "<img src='img/oil_barrel_small_red.png'/>";
                }
            }
        }
        else {
            
        }
    }
    
    
    function issue_complete(){
        global $db;
        if(strlen(trim($this->issue_associated))>0){
            $lk = array(
                "completed_date"=>date("Y-m-d"),
                "completed_by"=>$this->driver,
                "schedule_id"=>$this->schedule_id,
                "route_id"=>$this->route_id,
                "account_no"=>$this->account_number,
                "issue_status"=>"completed",
                "completed_explaination"=>"Route Completed  Route id: $this->route_id, Schedule id : $this->schedule_id, Account Number : $this->account_number"
                
            );   
            $db->where("issue_no",$this->issue_associated)->update("iwp_issues",$lk);
        }
    }
    
    function checkPickupCompleted($route_id){
        global $dbprefix;
        global $db;
        
        $jhg = $db->where("route_id",$route_id)->where("completed",1)->get($dbprefix."_data_table","date_of_pickup");
        
        if(count($jhg)>0){
            return $jhg[0]['date_of_pickup'];
        }
        return 0;
    }

    function getGallonsForPickup($route_id){
        global $dbprefix;
        global $db;
        $total_gallons = 0;
        $jhg = $db->where("route_id",$route_id)->where("completed",1)->get($dbprefix."_data_table","inches_to_gallons");
        
        if(count($jhg)>0){
            foreach($jhg as $pickups){
                $total_gallons = $total_gallons + $pickups['inches_to_gallons'];
            }
        }
        return $total_gallons;
    }
    
}

?>