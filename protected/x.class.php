<?php
ini_set("display_errors",1);
class Account{
    public $acount_id;
    public $id;
    public $status;
    public $class;
    public $name;
    public $name_plain;
    public $city;
    public $state;
    public $created;
    public $expires;
    public $locations;
    public $address;
    public $zip;
    public $billing_address;
    public $billing_state;
    public $billing_city;
    public $billing_zip;
    public $billing_email;
    public $new_bos;
    public $area_code;
    public $phone;
    public $contact_name;
    public $contact_title;
    public $email_address;
    public $division;
    public $original_sales;
    public $re_assigned;
    public $account_rep;
    public $state_date;
    public $previous_provider;     
    public $friendly;
    public $pickup_provider;
    public $pick_up_time;
    public $pick_up_freq;
    public $starting_oil_bakery;
    public $first_removal;
    public $second_removal;
    public $good_cleaning_practice_poster;
    public $account_fact_sheet;
    public $legal_docs;
    public $ach;
    public $payment_method;
    public $yards_to_lbs;
    public $lattitude;
    public $longittude;
    public $contract;
    public $guest_host;
    public $customer_id;
    public $url;
    public $full_address;
    public $notes;
    public $payee_name;
    public $ppg_jacobsen_percentage;
    public $index_percentage;
    public $miu;
    public $account_cap;
    public $siren;
    public $total_barrel_capacity;
    public $number_of_barrels;
    public $total_gallons;
    public $number_of_pickups;
    public $avg_gallon;
    public $estimated_monthly;
    public $percent_full;
    public $barrel_info;
    public $ticks_per_day;
    public $expected_gallons;
    public $schedule;
    public $price_per_gallon;
    public $is_oil;
    public $is_trap;
    public $trap_active;
    public $service_type;
    public $grease_label;
    public $grease_freq;
    public $grease_volume;
    public $grease_rate;
    public $grease_ppg;
    public $running_note;
    public $country;
    public $first_pickup;
    public $last_pickup;
    public $competitor_onsite;
    public $competitor_name;
    public $competitor_name_id;
    public $container_list;
    public $original_contract_start_date;
    public $resigned_contract_start_date;
    public $origin;
	public $contract_group;
	public $reciept_email;
    function __construct($id = NULL){
        global $dbprefix;
        $db = new Database();
        if($id == NULL){            
            
        }
        else if($id != NULL){ 
            $retrive = $db->where("account_ID",$id)->get("iwp_accounts");
            if($retrive >0){
                $this->reciept_email = $retrive[0]['reciept_email'];
                /*
                
				$this->contract_group = $retrive[0]['contract_group_id'];
                $this->origin = $retrive[0]['origination']; 
                $this->original_contract_start_date = $retrive[0]['Original_Contract_Start_Date'];
                $this->resigned_contract_start_date = $retrive[0]['Resigned_Contract_Start_Date'];
                $this->competitor_name = $retrive[0]['comp_name'];
                $this->competitor_name_id = $retrive[0]['comp_name_id'];
                $this->competitor_onsite = $retrive[0]['onsite_comp'];
                */
                $this->acount_id = $retrive[0]['account_ID'];
                $this->id = $retrive[0]['id'];
                $this->status = $retrive[0]['status'];
                $this->class  = $retrive[0]['class'];
                $this->name  = account_NumtoName($retrive[0]['account_ID']);
                $this->name_plain = $retrive[0]['name'];
                $this->address  = $retrive[0]['address'];
                $this->full_address = $retrive[0]['full_address'];
                $this->city = $retrive[0]['city'];
                $this->state = $retrive[0]['state'];
                $this->zip  = $retrive[0]['zip'];
                $this->created  = $retrive[0]['created'];
                $this->expires  = $retrive[0]['expires'];
                $this->locations  = $retrive[0]['locations'];            
                $this->billing_address  = $retrive[0]['billing_address'];            
                $this->billing_city  = $retrive[0]['billing_city'];
                $this->billing_state = $retrive[0]['billing_state'];            
                $this->billing_zip  = $retrive[0]['billing_zip']; 
                $this->billing_email = $retrive[0]['billing_email'];           
                $this->new_bos  = $retrive[0]['new_bos'];
                $this->area_code  = $retrive[0]['area_code'];            
                $this->phone = $retrive[0]['phone'];
                $this->contact_name = $retrive[0]['contact_name'];
                $this->email_address = $retrive[0]['email_address'];
                $this->division  = $retrive[0]['division'];
                $this->original_sales =  $retrive[0]['original_sales_person'];
                $this->re_assigned  = $retrive[0]['re_assigned_sales_person'];
                $this->account_rep = $retrive[0]['account_rep'];
                $this->state_date = $retrive[0]['state_date'];
                $this->previous_provider  = $retrive[0]['previous_provider'];
                $this->pick_up_freq  = $retrive[0]['pickup_frequency'];
                $this->starting_oil_bakery =  $retrive[0]['starting_oil_bakery'];
                $this->first_removal = $retrive[0]['first_removal'];
                $this->second_removal = $retrive[0] ['second_removal'];
                $this->good_cleaning_practice_poster  = $retrive[0]['good_cleaning_practice_poster'];
                $this->account_fact_sheet  = $retrive[0]['account_fact_sheet'];
                $this->legal_docs  = $retrive[0]['legal_docs'];
                $this->ach  = $retrive[0]['ach'];
                $this->payment_method  = $retrive[0]['payment_method'];
                $this->yards_to_lbs  = $retrive[0]['yards_to_lbs'];
                $this->lattitude  = $retrive[0]['latitude'];
                $this->longittude  = $retrive[0]['longitude'];
                $this->contract  = $retrive[0]['contract'];
                $this->guest_host  = $retrive[0]['guest_host'];
                $this->customer_id  = $retrive[0]['customer_id'];
                $this->url = $retrive[0]['url'];
                $this->notes = $retrive[0]['notes'];
                //$this->full_address = $this->city." ,".$this->state." ".$this->zip;
                $this->payee_name = $retrive[0]['payee_name'];
                $this->previous_provider = $retrive[0]['previous_provider'];
                $this->ppg_jacobsen_percentage = $retrive[0]['ppg_jacobsen_percentage'];
                
                if($retrive[0]['miu']>1){
                    $this->miu = $retrive[0]['miu']/100;
                }else{
                    $this->miu = $retrive[0]['miu'];
                }
                
                $this->total_barrel_capacity = 0;            
                $data_table = $dbprefix."_data_table";            
                $nop = $db->where("account_no",$this->acount_id)->get($data_table);            
                $this->number_of_pickups = count($nop); 
                $this->avg_gallon =$retrive[0]['avg_gallons_per_Month'];//oil onsite
                $this->estimated_monthly = round($retrive[0]['estimated_volume'],2);
                $this->ticks_per_day = $retrive[0]['ticks_per_day'];
                $this->index_percentage = $retrive[0]['index_percentage'];
                $this->price_per_gallon = $retrive[0]['price_per_gallon'];
                $this->friendly = $retrive[0]['friendly'];
                $this->expected_gallons = $retrive[0]['estimated_volume'];
                $this->is_oil = $retrive[0]['is_oil'];
                $this->is_trap =$retrive[0]['is_trap'];
                $this->country = $retrive[0]['country'];
                //**************** STATIC GREASE INFO FOR ACCOUNT **********************//
                $this->trap_active = $retrive[0]['trap_active'];
                $this->service_type = $retrive[0]['service_type'];
                $this->grease_label = $retrive[0]['label'];
                $this->grease_freq = $retrive[0]['grease_freq'];
                $this->grease_volume = $retrive[0]['grease_volume'];
                $this->grease_rate = $retrive[0]['grease_rate'];
                $this->grease_ppg = $retrive[0]['grease_ppg'];
                $this->running_note = $retrive[0]['notes'];
                $jh = $db->where("account_no",$this->acount_id)->orderby("date_of_pickup","DESC")->get($dbprefix."_data_table","date_of_pickup");
                if(count($jh)>0){
                    $this->last_pickup = $jh[0]['date_of_pickup'];
                } else {
                    $this->last_pickup = "";
                }
                
                $jhi = $db->where("account_no",$id)->orderby("date_of_pickup","ASC")->get($dbprefix."_data_table","date_of_pickup");
                if(count($jh)>0){
                    $this->first_pickup = $jhi[0]['date_of_pickup'];
                } else {
                    $this->first_pickup = "";
                }
                //********************************************************************//
                
                
                $containers = $db->query("SELECT COUNT( container_no ) AS bar_num, container_no FROM iwp_containers WHERE account_no =$this->acount_id AND deleted =0 GROUP BY container_no");
                if(count($containers)>0){
                    foreach($containers as $conts){
                        $this->container_list[]= " $conts[bar_num] ) ".containerNumToName($conts['container_no'])."<br/>";
                    }
                }
                
                
                //*********************  SCHEDULE FOR ACCOUNT scheduled or completed *****************************//
                $x = $db->query("SELECT * FROM iwp_scheduled_routes WHERE account_no = $this->acount_id AND deleted =0 ORDER BY scheduled_start_date DESC LIMIT 0,1");
                $instr = "";
                $note = "";
                if(count($x)>0){
                    $instr_note = $db->query("SELECT * FROM iwp_notes WHERE account_no = $this->acount_id AND schedule_id = ".$x[0]['schedule_id']);
                    
                    if(count($instr_note)>0){
                        $buffer = explode("|",$instr_note[0]['notes']);
                        if(count($buffer)>0){
                            if(strlen($buffer[0])>0){
                                $instr = $buffer[0];
                            }
                            
                            if(strlen($buffer[1])>0){
                                $note = $buffer[1];
                            }
                        }
                    }
                    $this->schedule = array(
                        "schedule_id"=>$x[0]['schedule_id'],
                        "route_id"=>$x[0]['route_id'],
                        "scheduled_start_date"=>$x[0]['scheduled_start_date'],
                        "date_created"=>$x[0]['date_created'],
                        "account_no"=>$x[0]['account_no'],
                        "route_status"=>$x[0]['route_status'],
                        "facility_origin"=>$x[0]['facility_origin'],
                        "driver"=>$x[0]['driver'],
                        "code_red"=>$x[0]['code_red'],
                        "created_by"=>$x[0]['created_by'],
                        "driver_instructions"=>$instr,
                        "notes"=>$note
                    );
                }
                //*********************  SCHEDULE FOR ACCOUNT *****************************//
                
                
                //********************** CONTAINER INFO ***********************************//
                
                $jh = $db->query("SELECT * FROM iwp_containers WHERE account_no=$this->acount_id AND deleted = 0");
                $this->number_of_barrels = count($jh);                        
                
                if(count($jh)>0){                
                    foreach($jh as $calue ){
                        $tq = $db->where("container_id",$calue['container_no'])->get($dbprefix."_list_of_containers","*");
                        $this->barrel_info[] = array(
                            "entry"=>$calue['entry'],
                            "container_id"=>$calue['container_no'],
                            "container_label"=>$tq[0]['container_label'],
                            "amount_holds"=>$tq[0]['amount_holds'],
                            "gpi"=>$tq[0]['gpi'],
                            "request_date"=>$calue['request_date'],
                            "delivery_date"=>$calue['delivery_date'],
                            "removal_date"=>$calue['removal_date'],
                            "assigned_by"=>$calue['assigned_by'],
                            "account_no"=>$this->acount_id
                        );
                        $this->total_barrel_capacity = $tq[0]['amount_holds']+$this->total_barrel_capacity; 
                    }
                }
                
                
                $y = $db->query("SELECT SUM(inches_to_gallons) as tot_gal FROM iwp_data_table WHERE account_no = $this->acount_id");
                $this->total_gallons = round($y[0]['tot_gal'],2);
                
                
                if($this->avg_gallon >0 && ($this->total_barrel_capacity>0)){
                    $this->percent_full =  round($this->avg_gallon/$this->total_barrel_capacity,2);
                }   
                else {
                    $this->percent_full = 0;
                }                        
                //*************************************************************************//
                
              
                //********************** OIL ONSITE % ***********************************//
                if(  $this->percent_full  >=.75  ){
                    $this->siren= '<img src="img/graphics-flashing-light-245546.gif"  />';
                }
                else {
                    $this->siren ='<img src="img/redlight.jpg" />';
                }
                //**********************************************************************//
                
                
                    
            }
            
        }
        
        
        
    }
    
    
   function onsite($id){
        global $dbprefix;
        global $db;
        $jh = $db->query("SELECT avg_gallons_per_Month FROM iwp_accounts WHERE account_ID=$id");
        return $jh[0]['avg_gallons_per_Month'];
   }    
   
   function num_of_barrel($id){
    global $dbprefix;
    global $db;
    $jh = $db->query("SELECT account_no FROM iwp_containers WHERE account_no=$id");
    return count($jh);
  } 
  
  function barrel_cap($id){
   global $dbprefix;
   global $db;
   $account_container = $dbprefix."_containers";
   $list_of_containers = $dbprefix."_list_of_containers";   
   $ask = $db->query("SELECT $account_container.*,$list_of_containers.* FROM  $list_of_containers INNER JOIN $account_container ON $list_of_containers.container_id = $account_container.container_no WHERE $account_container.account_no = $id AND $account_container.deleted = 0");
   $total = 0;
   if(count($ask)>0){
       
        foreach($ask as $barrel_hold){
            $total = $total + $barrel_hold['amount_holds'];
        }
   }   
   return $total;
  }  
    
  function singleField($id,$field){
    global $dbprefix;
    global $db;
    $ytru = $db->where("account_ID",$id)->get($dbprefix."_accounts","$field");
    if(count($ytru)>0){
        return $ytru[0][$field];
    }  else {
        return 0;
    }
  }  
  
  function formatted_Name($id){      
    return  account_NumtoName($id);
  }
  
  function facility_name($id){
    global $dbprefix;
    global $db;   
    $ytru = $db->where("account_ID",$id)->get($dbprefix."_accounts","division");
    return numberToFacility($ytru[0]['division']);  
  }
    
  function get_pickups($id){
    global $dbprefix,$db;    
    $pickups = $db->where("account_no",$id)->get($dbprefix."_data_table","account_no");
    return count($pickups);
  } 
  
  function total_gallons($id){
    global $dbprefix,$db;  
    $total = 0; 
    $pickups = $db->query("SELECT SUM(inches_to_gallons) as allx FROM iwp_data_table WHERE account_no = $id");
    
    return $pickups[0]['all']; 
  }
  
  
  function expected_gallons($id){
    global $dbprefix,$db;
    $expected =0;
    $ask = $db->query("SELECT estimated_volume FROM iwp_accounts WHERE account_ID =$id");
    
    return $ask[0]['estimated_volume'];      
  }
  
  
  function gpp($id){
    global $dbprefix,$db;
    $total = 0; 
    $gpp = 0;
    $ask = $db->query("SELECT DISTINCT (date_of_pickup), count( date_of_pickup ) AS num, SUM( inches_to_gallons ) AS tot_for_pickup, account_no, inches_to_gallons FROM iwp_data_table WHERE account_no =$id GROUP BY date_of_pickup
ORDER BY date_of_pickup DESC");
    foreach($ask as $individ){
        $for_this = $for_this + $individ['tot_for_pickup'];
    }
    return round($for_this / count($ask),2);      
  }
  
  
  function date_of_last_pickup($id){
    global $dbprefix;
    global $db;
    $jh = $db->where("account_no",$id)->orderby("date_of_pickup","DESC")->get($dbprefix."_data_table","date_of_pickup");
    if(count($jh)>0){
        return $jh[0]['date_of_pickup'];
    } else {
        return 0;
    }
  } 
  
  function date_of_first_pickup($id){
    global $dbprefix;
    global $db;
    $jh = $db->where("account_no",$id)->orderby("date_of_pickup","ASC")->get($dbprefix."_data_table","date_of_pickup");
    if(count($jh)>0){
        return $jh[0]['date_of_pickup'];
    } else {
        return 0;
    }
  } 
  function amount_of_last_pickup($id){
    global $dbprefix;
    global $db;
    $jh = $db->where("account_no",$id)->orderby("date_of_pickup","DESC")->get($dbprefix."_data_table","inches_to_gallons");
    if(count($jh)>0){
        return $jh[0]['inches_to_gallons'];
    } else {
        return 0;
    }
  }
  
  
  
  
  function countZeroPickups($id){
    global $dbprefix;
    global $db;
    $jh = $db->query("SELECT account_no FROM ".$dbprefix."_data_table WHERE inches_to_gallons = 0 && account_no=$id");
    
    return count($jh);
  }
  
}


?>