<?php
class Account_organics{
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
    function __construct($id = NULL){
        global $dbprefix;
        $db = new Database();
        if($id == NULL){            
            
        }
        else if($id != NULL){ 
            $retrive = $db->where("account_ID",$id)->get("organics.organics_accounts");
            if($retrive >0){
                $this->acount_id = $retrive[0]['account_ID'];
                $this->id = $retrive[0]['id'];
                $this->status = $retrive[0]['status'];
                $this->class  = $retrive[0]['class'];
                $this->name  = account_NumtoName($retrive[0]['account_ID']);
                $this->name_plain = $retrive[0]['name'];
                $this->address  = $retrive[0]['address'];
               
                $this->city = $retrive[0]['city'];
                $this->state = $retrive[0]['state'];
                $this->zip  = $retrive[0]['zip'];
                $this->created  = $retrive[0]['created'];
                $this->expires  = $retrive[0]['expires'];
                $this->locations  = $retrive[0]['locations'];            
                $this->billing_address  = $retrive[0]['billing_address'];            
                $this->billing_city  = $retrive[0]['city'];            
                $this->billing_state = $retrive[0]['billing_state'];            
                $this->billing_zip  = $retrive[0]['billing_zip'];            
                $this->new_bos  = $retrive[0]['new_bos'];
                $this->area_code  = $retrive[0]['area_code'];            
                $this->phone = $retrive[0]['phone'];
                $this->contact_name = $retrive[0]['contact_name'];
                $this->email_address = $retrive[0]['email_address'];
                $this->division  = $retrive[0]['division'];
                $this->original_sales =  $retrive[0]['original_sales_person'];
                $this->re_assigned  = $retrive[0]['re_assigned_sales_person'];
                $this->account_rep = $retrive[0]['account_rep'];
                $this->lattitude  = $retrive[0]['latitude'];
                $this->longittude  = $retrive[0]['longitude'];
                $this->full_address = $this->address.", ".$this->city.", ".$this->state." ".$this->zip;
               
            }
            
        }
    }
}


?>