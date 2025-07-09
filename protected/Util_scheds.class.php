<?php

class Util_Stop { 
    public $schedule_id;
    public $route_id;
    public $scheduled_start_date;
    public $facility_number;
    public $facility_origin;
    public $route_status;
    public $created_by;
    public $account_name;
    public $account_number;
    public $code_red;
    public $date_created;
    public $notes;
    public $special_instructions;
    public $note_author;
    public $note_created_date;
    public $service_type;
    public $container_type;
    public $container_label;
    public $container_being_swapped_size;
    public $container_being_swapped_label;
    public $quantity;
    public $entry_for_deletion;
    public $deleted;
    public $issue_associated;
    public $purp_siren;
    public function __construct($schedule_id = NULL) {
        
        if(is_numeric($schedule_id)){
            $db = new Database();
            global $dbprefix;
            $select = $db->query("SELECT * FROM iwp_utility WHERE utility_sched_id = $schedule_id");
            
            if(count($select) >0){
                foreach($select as $value){
                    $this->schedule_id =    $value['utility_sched_id'];
                    $this->route_id = $value['rout_no'];
                    $this->code_red =               $value['code_red'];
                    $this->scheduled_start_date =   $value['date_of_service'];
                    $this->route_status =           $value['route_status'];
                    $this->account_name =           account_NumtoName($value['account_no']);
                    $this->account_number =         $value['account_no'];
                    $this->service_type =           $value['type_of_service'];
                    $this->container_type =         $value['container_size'];
                    $this->container_label =        $value['container_label'];
                    $this->notes          =         $value['dispatcher_note'];
                    $this->special_instructions =   $value['driver_note'];
                    $this->quantity =               $value['quantity'];
                    $this->container_being_swapped_label = $value['container_being_swapped_label']; 
                    $this->container_being_swapped_size = $value['container_being_swapped_size'];
                    $this->entry_for_deletion           = $value['entry_for_deletion'];
                    $this->deleted=                 $value['deleted'];
                    $this->issue_associated =       $value['issue_associated'];
                    
                    if(strlen(trim($this->issue_associated))>0){
                       $this->purp_siren = "<img src='img/purp.png' style='width:25px;height:25px;'/>"; 
                    }
                    
                    //$this->created_date =           $value['date_created'];
                    //$this->facility_origin =        numberToFacility($value['facility_origin']);
                    //$this->created_by =             uNumToName($value['created_by']);
                    //$this->facility_number =        $value['facility_origin'];
                }
               
            }
            
            $kl = $db->where("schedule_id",$this->schedule_id)->get($dbprefix."_data_table","*");
            if(count($kl)>0){
                $this->gals = $kl[0]['inches_to_gallons'];
            } else {
                $this->gals = 0;
            }
        }
        else {
            
        }
    }
    
    
    
    function check_issue(){
        global $db;
        if( strlen(trim($this->issue_associated)) >0){
            $pack = array(
                "completed_date"=>date("Y-m-d"),
                "issue_status"=>"closed",
                "completed_explaination"=>"Utility issue performed.  Route :$this->route_id Schedule: $this->schedule_id Account: $this->account_number \r\n https://inet.iwpusa.com/enterUtilComplete.php?route_id=$this->route_id",
                "completed_by"=>account_NumToName($this->driver)
                
            );
            $db->where("issue_no",$this->issue_associated)->update("iwp_issues",$pack);
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