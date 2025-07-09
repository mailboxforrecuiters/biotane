<?php
/********************************************************************************
 MachForm
  
 Copyright 2007-2016 Appnitro Software. This code cannot be redistributed without
 permission from http://www.appnitro.com/
 
 More info at: http://www.appnitro.com/
 ********************************************************************************/

	require('includes/init.php');
	
	require('config.php');
	require('includes/db-core.php');
	require('includes/helper-functions.php');
	require('includes/check-session.php');

	require('includes/filter-functions.php');
	require('includes/entry-functions.php');
	require('includes/users-functions.php');
	
	$form_id 		   	= (int) trim($_POST['form_id']);
	
	if(empty($form_id)){
		die("This file can't be opened directly.");
	}

	$dbh = mf_connect_db();
	$mf_settings = mf_get_settings($dbh);

	//check permission, is the user allowed to access this page?
	if(empty($_SESSION['mf_user_privileges']['priv_administer'])){
		$user_perms = mf_get_user_permissions($dbh,$form_id,$_SESSION['mf_user_id']);

		//this page need edit_entries permission
		if(empty($user_perms['edit_entries'])){
			die("Access Denied. You don't have permission to edit this entry.");
		}
	}

	//truncate main table
	$query = "TRUNCATE `".MF_TABLE_PREFIX."form_{$form_id}`";
	$params = array();
	mf_do_query($query,$params,$dbh);

	//reset auto increment to 1
	$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_{$form_id}` AUTO_INCREMENT = 1";
	$params = array();
	mf_do_query($query,$params,$dbh);

	$form_properties = mf_get_form_properties($dbh,$form_id,array('form_review','form_page_total'));

	//check for review table
	if(!empty($form_properties['form_review']) || $form_properties['form_page_total'] > 1){
		//truncate review table
		$query = "TRUNCATE `".MF_TABLE_PREFIX."form_{$form_id}_review`";
		$params = array();
		mf_do_query($query,$params,$dbh);

		//reset auto increment to 1
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_{$form_id}_review` AUTO_INCREMENT = 1";
		$params = array();
		mf_do_query($query,$params,$dbh);
	}
	
	//redirect to manage_users page and display success message
	$_SESSION['MF_SUCCESS'] = 'Entry Number has been reset.';
	
	$response_data = new stdClass();
	$response_data->status    	= "ok";
	$response_data->form_id 	= $form_id;

	$response_json = json_encode($response_data);
		
	echo $response_json;
?>