<?php

class Organic_stop { 
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
    public function __construct($schedule_id) {
        
        if($schedule_id != NULL){
            $db = new Database();
            global $dbprefix;
            $select = $db->where("schedule_id",$schedule_id)->get("organics.organics_scheduled_routes");
            if(count($select) >0){
                foreach($select as $value){
                    $this->schedule_id = $value['schedule_id'];
                    $this->route_id = $value['route_id'];
                    $this->scheduled_start_date =   $value['scheduled_start_date'];
                    $this->facility_origin =        numberToFacility($value['facility_origin']);
                    $this->route_status =           $value['route_status'];
                    $this->created_by =             uNumToName($value['created_by']);
                    $this->facility_number =        $value['facility_origin'];
                    if(  isset($value['driver'] ) ){
                        $this->driver =             uNumToName($value['driver']);    
                    } else { 
                        $this->driver = "";
                    }
                    $this->account_name =             account_NumtoName($value['account_no']);
                    $this->account_number =         $value['account_no'];
                    $this->code_red =               $value['code_red'];
                    $this->en_route_id =            $value['en_route_id'];
                    $this->date_created =           $value['date_created'];
                    $this->created_date =           $value['date_created'];
                }
            }
            
            
        }else {
            
        }
    }
    
   
    
}

?>