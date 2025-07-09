<?php
ini_set("display_errors",1);
class Organics_Route {
    public $ikg_manifest_route_number;
    public $scheduled_date;
    public $completed_date;
    public $pick_upID;
    public $route_id;
    public $account_numbers = Array();
    public $acount_numbers_full_string;
    public $inventory_code;
    public $lot_no;
    public $recieving_facility;
    public $recieving_facility_no;
    public $facility_address;
    public $facility_rep;
    public $driver;
    public $driver_no;
    public $ikg_transporter;
    public $number_days_route;
    public $tank1;
    public $tank2;
    public $truck;
    public $license_plate;
    public $ikg_decal;
    public $ikg_collected;
    public $location;
    public $ikg_gross_weight;
    public $tare_weight;
    public $net_weight;
    public $time_start;
    public $start_mileage;
    public $first_stop;
    public $first_stop_mileage;
    public $last_stop;
    public $last_stop_mileage;
    public $end_time;
    public $end_mileage;
    public $fuel;
    public $vehicle;
    //***** FROM LIST OF ROUTES DB ******//
    public $list_of_routes_id;
    public $route_status;
    public $created_date;
    public $created_by;
    public $stops;
    public $expected;
    public $collected;
    public $difference_weight;
    public $collected_Weight;
    //************* SCHEDULED ROUTES ASSOCIATED WITH THIS ROUTE **///
    public $scheduled_routes = array();
    public $scheduled_route_notes;
    public $can_close;
    public $address;
    
    
    public $r_total_lb_per_mile;
    public $lb_per_mile;
    public $total_mileage;
    public $total_net;
    public $time_elapsed;
    public $net_route_miles;
    public $route_elapsed;
    public $unique_friendly = array();
    public $recur;
    public $recur_days;
    public $deleted;
    public $completed_stops;
    public $enroute_stops;
    function __construct($route_id = NULL){
            global $dbprefix;
            $data_table = "organics.organics_data_table";
            $db = new Database();
            $buff = array();
            if (is_numeric($route_id)){
             
             $ikg_table = "organics.organics_ikg_manifest_info";
             $from_oilrouted = $db->query("SELECT * FROM $ikg_table WHERE  route_id=$route_id");
             
             
              
              
              
              //UPDATE FIRST STOP/ MILEAGE INFO 
              
             if(count($from_oilrouted) >0){
               if(strlen(trim($from_oilrouted[0]['account_numbers']))==0){
                  $db->query("UPDATE $ikg_table SET account_numbers = NULL WHERE route_id =$route_id");
               }else{
                    //$this->pick_upID = $value['entry_number'];
                   $this->acount_numbers_full_string = $from_oilrouted[0]['account_numbers'];
                   //********* SPLITS account numbers into member array
                   $this->account_numbers =  explode("|",$from_oilrouted[0]['account_numbers']);
                   array_pop($this->account_numbers);
                   //*********                         ***********//
               }
               
              
               
               
               foreach($from_oilrouted as $value){
                   $this->scheduled_date = $value['scheduled_date'];
                   $this->ikg_manifest_route_number = $value['ikg_manifest_route_number'];
                   $this->completed_date = $value['completed_date'];
                   $this->route_id = $value['route_id'];
                   $this->inventory_code = $value['inventory_code'];
                   $this->lot_no = $value['lot_no'];
                   $this->recieving_facility = numberToFacility($value['recieving_facility']);
                   $this->recieving_facility_no = $value['recieving_facility'];
                   $this->facility_address = $value['facility_address'];
                   $this->facility_rep = $value['facility_rep'];
                   $this->driver = $value['driver'];
                   $this->ikg_transporter = $value['ikg_transporter'];
                   $this->number_days_route = $value['number_days_route'];
                   $this->tank1 = $value['tank1'];
                   $this->tank2 = $value['tank2'];
                   $this->truck = $value['truck'];
                   $this->license_plate = $value['license_plate'];
                   $this->ikg_decal = $value['ikg_decal'];
                   $this->location = $value['location'];                   
                   $this->ikg_gross_weight = $value['gross_weight'];
                   $this->tare_weight = $value['tare_weight'];
                   $this->net_weight = $value['gross_weight'] - $value['tare_weight'];
                   $this->time_start = $value['time_start'];
                   $this->start_mileage = $value['start_mileage'];
                   $this->first_stop = $value['first_stop'];
                   $this->first_stop_mileage = $value['first_stop_mileage'];
                   $this->last_stop = $value['last_stop'];
                   $this->last_stop_mileage = $value['last_top_mileage'];
                   $this->end_time = $value['end_time'];
                   $this->end_mileage = $value['end_mileage'];
                   $this->fuel = $value['fuel'];     
                   $this->driver_no = $value['driver'];     
                   $this->can_close = $value['can_close'];
                   $this->collected_Weight = $value['collected'];
                   $this->recur = $value['recurring'];
                   $this->recur_days = $value['recur_days'];
               }
                //********************collected gallons for this  route ******///
             }
        }
        else { 
             $from_oilrouted = $db->query("SELECT * FROM organics.organics_ikg_manifest_info WHERE organics.organics_ikg_manifest_route_number ='$route_id'");
        }
        
        
        if(strlen(trim($this->acount_numbers_full_string)) >0  && $this->acount_numbers_full_string !="|"  ){
            foreach($this->account_numbers as $act){
                $ik = $db->where('route_id',$this->route_id)->where('account_no',$act)->get("organics.organics_scheduled_routes","organics_scheduled_routes.schedule_id");
                $this->scheduled_routes[] = $ik[0]['schedule_id']; 
            }
            $this->unique_friendly = array_unique($buff);
        }
    }
    
    
    
    
}



?>
