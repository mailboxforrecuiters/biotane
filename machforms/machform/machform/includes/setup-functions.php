<?php
/********************************************************************************
 MachForm
  
 Copyright 2007-2016 Appnitro Software. This code cannot be redistributed without
 permission from http://www.appnitro.com/
 
 More info at: http://www.appnitro.com/
 ********************************************************************************/
	
	function create_ap_forms_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."forms` (
										  `form_id` int(11) NOT NULL AUTO_INCREMENT,
										  `form_name` text,
										  `form_description` text,
										  `form_name_hide` tinyint(1) NOT NULL DEFAULT '0',
										  `form_tags` varchar(255) DEFAULT NULL,
										  `form_email` text,
										  `form_redirect` text,
										  `form_redirect_enable` int(1) NOT NULL DEFAULT '0',
										  `form_success_message` text,
										  `form_disabled_message` text,
										  `form_password` varchar(100) DEFAULT NULL,
										  `form_unique_ip` int(1) NOT NULL DEFAULT '0',
										  `form_unique_ip_maxcount` int(11) NOT NULL DEFAULT '5',
										  `form_unique_ip_period` char(1) NOT NULL DEFAULT 'd' COMMENT 'h,d,w,m,y,l (hour/day/week/month/year/lifetime)',
										  `form_frame_height` int(11) DEFAULT NULL,
										  `form_has_css` int(11) NOT NULL DEFAULT '0',
										  `form_captcha` int(11) NOT NULL DEFAULT '0',
										  `form_captcha_type` char(1) NOT NULL DEFAULT 'r',
										  `form_active` int(11) NOT NULL DEFAULT '1',
										  `form_theme_id` int(11) NOT NULL DEFAULT '0',
										  `form_review` int(11) NOT NULL DEFAULT '0',
										  `form_resume_enable` int(1) NOT NULL DEFAULT '0',
										  `form_resume_subject` text,
										  `form_resume_content` mediumtext,
										  `form_resume_from_name` text,
										  `form_resume_from_email_address` varchar(255) DEFAULT '',
										  `form_custom_script_enable` int(1) NOT NULL DEFAULT '0',
										  `form_custom_script_url` text,
										  `form_limit_enable` int(1) NOT NULL DEFAULT '0',
										  `form_limit` int(11) NOT NULL DEFAULT '0',
										  `form_label_alignment` varchar(11) NOT NULL DEFAULT 'top_label',
										  `form_language` varchar(50) DEFAULT NULL,
										  `form_page_total` int(11) NOT NULL DEFAULT '1',
										  `form_lastpage_title` varchar(255) DEFAULT NULL,
										  `form_submit_primary_text` varchar(255) NOT NULL DEFAULT 'Submit',
										  `form_submit_secondary_text` varchar(255) NOT NULL DEFAULT 'Previous',
										  `form_submit_primary_img` varchar(255) DEFAULT NULL,
										  `form_submit_secondary_img` varchar(255) DEFAULT NULL,
										  `form_submit_use_image` int(1) NOT NULL DEFAULT '0',
										  `form_review_primary_text` varchar(255) NOT NULL DEFAULT 'Submit',
										  `form_review_secondary_text` varchar(255) NOT NULL DEFAULT 'Previous',
										  `form_review_primary_img` varchar(255) DEFAULT NULL,
										  `form_review_secondary_img` varchar(255) DEFAULT NULL,
										  `form_review_use_image` int(11) NOT NULL DEFAULT '0',
										  `form_review_title` text,
										  `form_review_description` text,
										  `form_pagination_type` varchar(11) NOT NULL DEFAULT 'steps',
										  `form_schedule_enable` int(1) NOT NULL DEFAULT '0',
										  `form_schedule_start_date` date DEFAULT NULL,
										  `form_schedule_end_date` date DEFAULT NULL,
										  `form_schedule_start_hour` time DEFAULT NULL,
										  `form_schedule_end_hour` time DEFAULT NULL,
										  `esl_enable` tinyint(1) NOT NULL DEFAULT '0',
										  `esl_from_name` text,
										  `esl_from_email_address` varchar(255) DEFAULT NULL,
										  `esl_bcc_email_address` text,
										  `esl_replyto_email_address` varchar(255) DEFAULT NULL,
										  `esl_subject` text,
										  `esl_content` mediumtext,
										  `esl_plain_text` int(11) NOT NULL DEFAULT '0',
										  `esl_pdf_enable` tinyint(1) NOT NULL DEFAULT '0',
										  `esl_pdf_content` mediumtext,
										  `esr_enable` tinyint(1) NOT NULL DEFAULT '0',
										  `esr_email_address` text,
										  `esr_from_name` text,
										  `esr_from_email_address` varchar(255) DEFAULT NULL,
										  `esr_bcc_email_address` text,
										  `esr_replyto_email_address` varchar(255) DEFAULT NULL,
										  `esr_subject` text,
										  `esr_content` mediumtext,
										  `esr_plain_text` int(11) NOT NULL DEFAULT '0',
										  `esr_pdf_enable` int(1) NOT NULL DEFAULT '0',
										  `esr_pdf_content` mediumtext,
										  `payment_enable_merchant` int(1) NOT NULL DEFAULT '0',
										  `payment_merchant_type` varchar(25) NOT NULL DEFAULT 'paypal_standard',
										  `payment_paypal_email` varchar(255) DEFAULT NULL,
										  `payment_paypal_language` varchar(5) NOT NULL DEFAULT 'US',
										  `payment_currency` varchar(5) NOT NULL DEFAULT 'USD',
										  `payment_show_total` int(1) NOT NULL DEFAULT '0',
										  `payment_total_location` varchar(11) NOT NULL DEFAULT 'top',
										  `payment_enable_recurring` int(1) NOT NULL DEFAULT '0',
										  `payment_recurring_cycle` int(11) NOT NULL DEFAULT '1',
										  `payment_recurring_unit` varchar(5) NOT NULL DEFAULT 'month',
										  `payment_enable_trial` int(1) NOT NULL DEFAULT '0',
										  `payment_trial_period` int(11) NOT NULL DEFAULT '1',
										  `payment_trial_unit` varchar(5) NOT NULL DEFAULT 'month',
										  `payment_trial_amount` decimal(62,2) NOT NULL DEFAULT '0.00',
										  `payment_enable_setupfee` int(1) NOT NULL DEFAULT '0',
										  `payment_setupfee_amount` decimal(62,2) NOT NULL DEFAULT '0.00',
										  `payment_price_type` varchar(11) NOT NULL DEFAULT 'fixed',
										  `payment_price_amount` decimal(62,2) NOT NULL DEFAULT '0.00',
										  `payment_price_name` varchar(255) DEFAULT NULL,
										  `payment_stripe_live_secret_key` varchar(50) DEFAULT NULL,
										  `payment_stripe_live_public_key` varchar(50) DEFAULT NULL,
										  `payment_stripe_test_secret_key` varchar(50) DEFAULT NULL,
										  `payment_stripe_test_public_key` varchar(50) DEFAULT NULL,
										  `payment_stripe_enable_test_mode` int(1) NOT NULL DEFAULT '0',
										  `payment_stripe_enable_receipt` int(1) NOT NULL DEFAULT '0',
										  `payment_stripe_receipt_element_id` int(11) DEFAULT NULL,
										  `payment_paypal_rest_live_clientid` varchar(100) DEFAULT NULL,
										  `payment_paypal_rest_live_secret_key` varchar(100) DEFAULT NULL,
										  `payment_paypal_rest_test_clientid` varchar(100) DEFAULT NULL,
										  `payment_paypal_rest_test_secret_key` varchar(100) DEFAULT NULL,
										  `payment_paypal_rest_enable_test_mode` int(1) NOT NULL DEFAULT '0',
										  `payment_authorizenet_live_apiloginid` varchar(50) DEFAULT NULL,
										  `payment_authorizenet_live_transkey` varchar(50) DEFAULT NULL,
										  `payment_authorizenet_test_apiloginid` varchar(50) DEFAULT NULL,
										  `payment_authorizenet_test_transkey` varchar(50) DEFAULT NULL,
										  `payment_authorizenet_enable_test_mode` int(1) NOT NULL DEFAULT '0',
										  `payment_authorizenet_save_cc_data` int(1) NOT NULL DEFAULT '0',
										  `payment_braintree_live_merchant_id` varchar(50) DEFAULT NULL,
										  `payment_braintree_live_public_key` varchar(50) DEFAULT NULL,
										  `payment_braintree_live_private_key` varchar(50) DEFAULT NULL,
										  `payment_braintree_live_encryption_key` text,
										  `payment_braintree_test_merchant_id` varchar(50) DEFAULT NULL,
										  `payment_braintree_test_public_key` varchar(50) DEFAULT NULL,
										  `payment_braintree_test_private_key` varchar(50) DEFAULT NULL,
										  `payment_braintree_test_encryption_key` text,
										  `payment_braintree_enable_test_mode` int(1) NOT NULL DEFAULT '0',
										  `payment_paypal_enable_test_mode` int(1) NOT NULL DEFAULT '0',
										  `payment_enable_invoice` int(1) NOT NULL DEFAULT '0',
										  `payment_invoice_email` varchar(255) DEFAULT NULL,
										  `payment_delay_notifications` int(1) NOT NULL DEFAULT '1',
										  `payment_ask_billing` int(1) NOT NULL DEFAULT '0',
										  `payment_ask_shipping` int(1) NOT NULL DEFAULT '0',
										  `payment_enable_tax` int(1) NOT NULL DEFAULT '0',
										  `payment_tax_rate` decimal(62,2) NOT NULL DEFAULT '0.00',
										  `payment_enable_discount` int(1) NOT NULL DEFAULT '0',
										  `payment_discount_type` varchar(12) NOT NULL DEFAULT 'percent_off',
										  `payment_discount_amount` decimal(62,2) NOT NULL DEFAULT '0.00',
										  `payment_discount_code` text,
										  `payment_discount_element_id` int(11) DEFAULT NULL,
										  `payment_discount_max_usage` int(11) NOT NULL DEFAULT '0',
										  `payment_discount_expiry_date` date DEFAULT NULL,
										  `logic_field_enable` tinyint(1) NOT NULL DEFAULT '0',
										  `logic_page_enable` tinyint(1) NOT NULL DEFAULT '0',
										  `logic_email_enable` tinyint(1) NOT NULL DEFAULT '0',
										  `logic_webhook_enable` int(1) NOT NULL DEFAULT '0',
										  `logic_success_enable` int(1) NOT NULL DEFAULT '0',
										  `webhook_enable` tinyint(1) NOT NULL DEFAULT '0',
										  `webhook_url` text,
										  `webhook_method` varchar(4) NOT NULL DEFAULT 'post',
										  PRIMARY KEY (`form_id`),
										  KEY `form_tags` (`form_tags`)
										) DEFAULT CHARSET=utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}
	
	function create_ap_column_preferences_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."column_preferences` (
																		  `acp_id` int(11) NOT NULL AUTO_INCREMENT,
																		  `form_id` int(11) DEFAULT NULL,
																		  `user_id` int(11) NOT NULL DEFAULT '1',
																		  `incomplete_entries` int(1) NOT NULL DEFAULT '0',
																		  `element_name` varchar(255) NOT NULL DEFAULT '',
																		  `position` int(11) NOT NULL DEFAULT '0',
																		  PRIMARY KEY (`acp_id`),
																		  KEY `acp_position` (`form_id`,`position`)
																		) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_element_options_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."element_options` (
														  `aeo_id` int(11) NOT NULL AUTO_INCREMENT,
														  `form_id` int(11) NOT NULL DEFAULT '0',
														  `element_id` int(11) NOT NULL DEFAULT '0',
														  `option_id` int(11) NOT NULL DEFAULT '0',
														  `position` int(11) NOT NULL DEFAULT '0',
														  `option` text,
														  `option_is_default` int(11) NOT NULL DEFAULT '0',
														  `live` int(11) NOT NULL DEFAULT '1',
														  PRIMARY KEY (`aeo_id`),
														  KEY `form_id` (`form_id`),
														  KEY `element_id` (`element_id`)
														) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_element_prices_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."element_prices` (
														  `aep_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
														  `form_id` int(11) NOT NULL,
														  `element_id` int(11) NOT NULL,
														  `option_id` int(11) NOT NULL DEFAULT '0',
														  `price` decimal(62,2) NOT NULL DEFAULT '0.00',
														  PRIMARY KEY (`aep_id`),
														  KEY `form_id` (`form_id`),
														  KEY `element_id` (`element_id`)
														) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_form_elements_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_elements` (
													  `form_id` int(11) NOT NULL DEFAULT '0',
													  `element_id` int(11) NOT NULL DEFAULT '0',
													  `element_title` text,
													  `element_guidelines` text,
													  `element_size` varchar(6) NOT NULL DEFAULT 'medium',
													  `element_is_required` int(1) NOT NULL DEFAULT '0',
													  `element_is_unique` int(1) NOT NULL DEFAULT '0',
													  `element_is_readonly` int(1) NOT NULL DEFAULT '0',
													  `element_is_private` int(1) NOT NULL DEFAULT '0' COMMENT '0=public,1=admin-only,2=hidden',
													  `element_type` varchar(50) DEFAULT NULL,
													  `element_position` int(11) NOT NULL DEFAULT '0',
													  `element_default_value` text,
													  `element_enable_placeholder` int(1) NOT NULL DEFAULT '0',
													  `element_constraint` varchar(255) DEFAULT NULL,
													  `element_total_child` int(11) NOT NULL DEFAULT '0',
													  `element_css_class` varchar(255) NOT NULL DEFAULT '',
													  `element_range_min` bigint(11) unsigned NOT NULL DEFAULT '0',
													  `element_range_max` bigint(11) unsigned NOT NULL DEFAULT '0',
													  `element_range_limit_by` char(1) NOT NULL,
													  `element_status` int(1) NOT NULL DEFAULT '2',
													  `element_choice_columns` int(1) NOT NULL DEFAULT '1',
													  `element_choice_has_other` int(1) NOT NULL DEFAULT '0',
													  `element_choice_other_label` text,
													  `element_choice_limit_rule` varchar(12) NOT NULL DEFAULT 'atleast',
													  `element_choice_limit_qty` int(11) NOT NULL DEFAULT '1',
													  `element_choice_limit_range_min` int(11) NOT NULL DEFAULT '1',
													  `element_choice_limit_range_max` int(11) NOT NULL DEFAULT '1',
													  `element_choice_max_entry` int(11) NOT NULL DEFAULT '0',
													  `element_time_showsecond` int(11) NOT NULL DEFAULT '0',
													  `element_time_24hour` int(11) NOT NULL DEFAULT '0',
													  `element_address_hideline2` int(11) NOT NULL DEFAULT '0',
													  `element_address_us_only` int(11) NOT NULL DEFAULT '0',
													  `element_date_enable_range` int(1) NOT NULL DEFAULT '0',
													  `element_date_range_min` date DEFAULT NULL,
													  `element_date_range_max` date DEFAULT NULL,
													  `element_date_enable_selection_limit` int(1) NOT NULL DEFAULT '0',
													  `element_date_selection_max` int(11) NOT NULL DEFAULT '1',
													  `element_date_past_future` char(1) NOT NULL DEFAULT 'p',
													  `element_date_disable_past_future` int(1) NOT NULL DEFAULT '0',
													  `element_date_disable_weekend` int(1) NOT NULL DEFAULT '0',
													  `element_date_disable_specific` int(1) NOT NULL DEFAULT '0',
													  `element_date_disabled_list` text CHARACTER SET utf8 COLLATE utf8_bin,
													  `element_file_enable_type_limit` int(1) NOT NULL DEFAULT '1',
													  `element_file_block_or_allow` char(1) NOT NULL DEFAULT 'b',
													  `element_file_type_list` varchar(255) DEFAULT NULL,
													  `element_file_as_attachment` int(1) NOT NULL DEFAULT '0',
													  `element_file_enable_advance` int(1) NOT NULL DEFAULT '0',
													  `element_file_auto_upload` int(1) NOT NULL DEFAULT '0',
													  `element_file_enable_multi_upload` int(1) NOT NULL DEFAULT '0',
													  `element_file_max_selection` int(11) NOT NULL DEFAULT '5',
													  `element_file_enable_size_limit` int(1) NOT NULL DEFAULT '0',
													  `element_file_size_max` int(11) DEFAULT NULL,
													  `element_matrix_allow_multiselect` int(1) NOT NULL DEFAULT '0',
													  `element_matrix_parent_id` int(11) NOT NULL DEFAULT '0',
													  `element_number_enable_quantity` int(1) NOT NULL DEFAULT '0',
													  `element_number_quantity_link` varchar(15) DEFAULT NULL,
													  `element_section_display_in_email` int(1) NOT NULL DEFAULT '1',
													  `element_section_enable_scroll` int(1) NOT NULL DEFAULT '0',
													  `element_submit_use_image` int(1) NOT NULL DEFAULT '0',
													  `element_submit_primary_text` varchar(255) NOT NULL DEFAULT 'Continue',
													  `element_submit_secondary_text` varchar(255) NOT NULL DEFAULT 'Previous',
													  `element_submit_primary_img` varchar(255) DEFAULT NULL,
													  `element_submit_secondary_img` varchar(255) DEFAULT NULL,
													  `element_page_title` varchar(255) DEFAULT NULL,
													  `element_page_number` int(11) NOT NULL DEFAULT '1',
													  `element_text_default_type` varchar(6) NOT NULL DEFAULT 'static',
													  `element_text_default_length` int(11) NOT NULL DEFAULT '10',
													  `element_text_default_random_type` varchar(8) NOT NULL DEFAULT 'letter',
													  `element_text_default_prefix` varchar(50) DEFAULT NULL,
													  `element_text_default_case` char(1) NOT NULL DEFAULT 'u',
													  PRIMARY KEY (`form_id`,`element_id`)
													) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_form_filters_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_filters` (
													  `aff_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
													  `form_id` int(11) NOT NULL,
													  `user_id` int(11) NOT NULL DEFAULT '1',
													  `incomplete_entries` int(1) NOT NULL DEFAULT '0',
													  `element_name` varchar(50) NOT NULL DEFAULT '',
													  `filter_condition` varchar(15) NOT NULL DEFAULT 'is',
													  `filter_keyword` varchar(255) NOT NULL DEFAULT '',
													  PRIMARY KEY (`aff_id`),
													  KEY `form_id` (`form_id`)
													) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_form_themes_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_themes` (
												  `theme_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
												  `user_id` int(11) NOT NULL DEFAULT '1',
												  `status` int(1) DEFAULT '1',
												  `theme_has_css` int(1) NOT NULL DEFAULT '0',
												  `theme_name` varchar(255) DEFAULT '',
												  `theme_built_in` int(1) NOT NULL DEFAULT '0',
												  `theme_is_private` int(11) NOT NULL DEFAULT '1',
												  `logo_type` varchar(11) NOT NULL DEFAULT 'default' COMMENT 'default,custom,disabled',
												  `logo_custom_image` text,
												  `logo_custom_height` int(11) NOT NULL DEFAULT '40',
												  `logo_default_image` varchar(50) DEFAULT '',
												  `logo_default_repeat` int(1) NOT NULL DEFAULT '0',
												  `wallpaper_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
												  `wallpaper_bg_color` varchar(11) DEFAULT '',
												  `wallpaper_bg_pattern` varchar(50) DEFAULT '',
												  `wallpaper_bg_custom` text,
												  `header_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
												  `header_bg_color` varchar(11) DEFAULT '',
												  `header_bg_pattern` varchar(50) DEFAULT '',
												  `header_bg_custom` text,
												  `form_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
												  `form_bg_color` varchar(11) DEFAULT '',
												  `form_bg_pattern` varchar(50) DEFAULT '',
												  `form_bg_custom` text,
												  `highlight_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
												  `highlight_bg_color` varchar(11) DEFAULT '',
												  `highlight_bg_pattern` varchar(50) DEFAULT '',
												  `highlight_bg_custom` text,
												  `guidelines_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
												  `guidelines_bg_color` varchar(11) DEFAULT '',
												  `guidelines_bg_pattern` varchar(50) DEFAULT '',
												  `guidelines_bg_custom` text,
												  `field_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
												  `field_bg_color` varchar(11) DEFAULT '',
												  `field_bg_pattern` varchar(50) DEFAULT '',
												  `field_bg_custom` text,
												  `form_title_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
												  `form_title_font_weight` int(11) NOT NULL DEFAULT '400',
												  `form_title_font_style` varchar(25) NOT NULL DEFAULT 'normal',
												  `form_title_font_size` varchar(11) DEFAULT '',
												  `form_title_font_color` varchar(11) DEFAULT '',
												  `form_desc_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
												  `form_desc_font_weight` int(11) NOT NULL DEFAULT '400',
												  `form_desc_font_style` varchar(25) NOT NULL DEFAULT 'normal',
												  `form_desc_font_size` varchar(11) DEFAULT '',
												  `form_desc_font_color` varchar(11) DEFAULT '',
												  `field_title_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
												  `field_title_font_weight` int(11) NOT NULL DEFAULT '400',
												  `field_title_font_style` varchar(25) NOT NULL DEFAULT 'normal',
												  `field_title_font_size` varchar(11) DEFAULT '',
												  `field_title_font_color` varchar(11) DEFAULT '',
												  `guidelines_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
												  `guidelines_font_weight` int(11) NOT NULL DEFAULT '400',
												  `guidelines_font_style` varchar(25) NOT NULL DEFAULT 'normal',
												  `guidelines_font_size` varchar(11) DEFAULT '',
												  `guidelines_font_color` varchar(11) DEFAULT '',
												  `section_title_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
												  `section_title_font_weight` int(11) NOT NULL DEFAULT '400',
												  `section_title_font_style` varchar(25) NOT NULL DEFAULT 'normal',
												  `section_title_font_size` varchar(11) DEFAULT '',
												  `section_title_font_color` varchar(11) DEFAULT '',
												  `section_desc_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
												  `section_desc_font_weight` int(11) NOT NULL DEFAULT '400',
												  `section_desc_font_style` varchar(25) NOT NULL DEFAULT 'normal',
												  `section_desc_font_size` varchar(11) DEFAULT '',
												  `section_desc_font_color` varchar(11) DEFAULT '',
												  `field_text_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
												  `field_text_font_weight` int(11) NOT NULL DEFAULT '400',
												  `field_text_font_style` varchar(25) NOT NULL DEFAULT 'normal',
												  `field_text_font_size` varchar(11) DEFAULT '',
												  `field_text_font_color` varchar(11) DEFAULT '',
												  `border_form_width` int(11) NOT NULL DEFAULT '1',
												  `border_form_style` varchar(11) NOT NULL DEFAULT 'solid',
												  `border_form_color` varchar(11) DEFAULT '',
												  `border_guidelines_width` int(11) NOT NULL DEFAULT '1',
												  `border_guidelines_style` varchar(11) NOT NULL DEFAULT 'solid',
												  `border_guidelines_color` varchar(11) DEFAULT '',
												  `border_section_width` int(11) NOT NULL DEFAULT '1',
												  `border_section_style` varchar(11) NOT NULL DEFAULT 'solid',
												  `border_section_color` varchar(11) DEFAULT '',
												  `form_shadow_style` varchar(25) NOT NULL DEFAULT 'WarpShadow',
												  `form_shadow_size` varchar(11) NOT NULL DEFAULT 'large',
												  `form_shadow_brightness` varchar(11) NOT NULL DEFAULT 'normal',
												  `form_button_type` varchar(11) NOT NULL DEFAULT 'text',
												  `form_button_text` varchar(100) NOT NULL DEFAULT 'Submit',
												  `form_button_image` text,
												  `advanced_css` text,
												  PRIMARY KEY (`theme_id`),
												  KEY `theme_name` (`theme_name`)
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function populate_ap_form_themes_table($dbh){
		
		$query = "INSERT INTO `".MF_TABLE_PREFIX."form_themes` (`theme_id`, `user_id`, `status`, `theme_has_css`, `theme_name`, `theme_built_in`, `theme_is_private`, `logo_type`, `logo_custom_image`, `logo_custom_height`, `logo_default_image`, `logo_default_repeat`, `wallpaper_bg_type`, `wallpaper_bg_color`, `wallpaper_bg_pattern`, `wallpaper_bg_custom`, `header_bg_type`, `header_bg_color`, `header_bg_pattern`, `header_bg_custom`, `form_bg_type`, `form_bg_color`, `form_bg_pattern`, `form_bg_custom`, `highlight_bg_type`, `highlight_bg_color`, `highlight_bg_pattern`, `highlight_bg_custom`, `guidelines_bg_type`, `guidelines_bg_color`, `guidelines_bg_pattern`, `guidelines_bg_custom`, `field_bg_type`, `field_bg_color`, `field_bg_pattern`, `field_bg_custom`, `form_title_font_type`, `form_title_font_weight`, `form_title_font_style`, `form_title_font_size`, `form_title_font_color`, `form_desc_font_type`, `form_desc_font_weight`, `form_desc_font_style`, `form_desc_font_size`, `form_desc_font_color`, `field_title_font_type`, `field_title_font_weight`, `field_title_font_style`, `field_title_font_size`, `field_title_font_color`, `guidelines_font_type`, `guidelines_font_weight`, `guidelines_font_style`, `guidelines_font_size`, `guidelines_font_color`, `section_title_font_type`, `section_title_font_weight`, `section_title_font_style`, `section_title_font_size`, `section_title_font_color`, `section_desc_font_type`, `section_desc_font_weight`, `section_desc_font_style`, `section_desc_font_size`, `section_desc_font_color`, `field_text_font_type`, `field_text_font_weight`, `field_text_font_style`, `field_text_font_size`, `field_text_font_color`, `border_form_width`, `border_form_style`, `border_form_color`, `border_guidelines_width`, `border_guidelines_style`, `border_guidelines_color`, `border_section_width`, `border_section_style`, `border_section_color`, `form_shadow_style`, `form_shadow_size`, `form_shadow_brightness`, `form_button_type`, `form_button_text`, `form_button_image`, `advanced_css`)
VALUES
	(1,1,1,0,'Green Senegal',1,1,'default','http://',40,'machform.png',0,'color','#cfdfc5','','','color','#bad4a9','','','color','#ffffff','','','color','#ecf1ea','','','color','#ecf1ea','','','color','#cfdfc5','','','Philosopher',700,'normal','','#80af1b','Philosopher',400,'normal','100%','#80af1b','Philosopher',700,'normal','110%','#80af1b','Ubuntu',400,'normal','','#666666','Philosopher',700,'normal','110%','#80af1b','Philosopher',400,'normal','95%','#80af1b','Ubuntu',400,'normal','','#666666',0,'solid','#bad4a9',1,'dashed','#bad4a9',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(2,1,1,0,'Blue Bigbird',1,1,'default','http://',40,'machform.png',0,'color','#336699','','','color','#6699cc','','','color','#ffffff','','','color','#ccdced','','','color','#6699cc','','','color','#FBFBFB','','','Open Sans',600,'normal','','','Open Sans',400,'normal','','','Open Sans',700,'normal','100%','','Ubuntu',400,'normal','80%','#ffffff','Open Sans',600,'normal','','','Open Sans',400,'normal','95%','','Open Sans',400,'normal','','',0,'solid','#336699',1,'dotted','#6699cc',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(3,1,1,0,'Blue Pionus',1,1,'default','http://',40,'machform.png',0,'color','#556270','','','color','#6b7b8c','','','color','#ffffff','','','color','#99aec4','','','color','#6b7b8c','','','color','#FBFBFB','','','Istok Web',400,'normal','170%','','Maven Pro',400,'normal','100%','','Istok Web',700,'normal','100%','','Maven Pro',400,'normal','95%','#ffffff','Istok Web',400,'normal','110%','','Maven Pro',400,'normal','95%','','Maven Pro',400,'normal','','',0,'solid','#556270',1,'solid','#6b7b8c',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(4,1,1,0,'Brown Conure',1,1,'default','http://',40,'machform.png',0,'pattern','#948c75','pattern_036.gif','','color','#b3a783','','','color','#ffffff','','','color','#e0d0a2','','','color','#948c75','','','color','#f0f0d8','pattern_036.gif','','Molengo',400,'normal','170%','','Molengo',400,'normal','110%','','Molengo',400,'normal','110%','','Nobile',400,'normal','','#ececec','Molengo',400,'normal','130%','','Molengo',400,'normal','100%','','Molengo',400,'normal','110%','',0,'solid','#948c75',1,'solid','#948c75',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(5,1,1,0,'Yellow Lovebird',1,1,'default','http://',40,'machform.png',0,'color','#f0d878','','','color','#edb817','','','color','#ffffff','','','color','#f5d678','','','color','#f7c52e','','','color','#FBFBFB','','','Amaranth',700,'normal','170%','','Amaranth',400,'normal','100%','','Amaranth',700,'normal','100%','','Amaranth',400,'normal','','#444444','Amaranth',400,'normal','110%','','Amaranth',400,'normal','95%','','Amaranth',400,'normal','100%','',0,'solid','#f0d878',1,'solid','#f7c52e',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(6,1,1,0,'Pink Starling',1,1,'default','http://',40,'machform.png',0,'color','#ff6699','','','color','#d93280','','','color','#ffffff','','','color','#ffd0d4','','','color','#f9fad2','','','color','#FBFBFB','','','Josefin Sans',600,'normal','160%','','Josefin Sans',400,'normal','110%','','Josefin Sans',700,'normal','110%','','Josefin Sans',600,'normal','100%','','Josefin Sans',700,'normal','','','Josefin Sans',400,'normal','110%','','Josefin Sans',400,'normal','130%','',0,'solid','#ff6699',1,'dashed','#f56990',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(8,1,1,0,'Red Rabbit',1,1,'default','http://',40,'machform.png',0,'color','#a40802','','','color','#800e0e','','','color','#ffffff','','','color','#ffa4a0','','','color','#800e0e','','','color','#FBFBFB','','','Lobster',400,'normal','','#000000','Ubuntu',400,'normal','100%','#000000','Lobster',400,'normal','110%','#222222','Ubuntu',400,'normal','85%','#ffffff','Lobster',400,'normal','130%','#000000','Ubuntu',400,'normal','95%','#000000','Ubuntu',400,'normal','','#333333',0,'solid','#a40702',1,'solid','#800e0e',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(9,1,1,0,'Orange Robin',1,1,'default','http://',40,'machform.png',0,'color','#f38430','','','color','#fa6800','','','color','#ffffff','','','color','#a7dbd8','','','color','#e0e4cc','','','color','#FBFBFB','','','Lucida Grande',400,'normal','','#000000','Nobile',400,'normal','','#000000','Nobile',700,'normal','','#000000','Lucida Grande',400,'normal','','#444444','Nobile',700,'normal','100%','#000000','Nobile',400,'normal','','#000000','Nobile',400,'normal','95%','#333333',0,'solid','#f38430',1,'solid','#e0e4cc',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(10,1,1,0,'Orange Sunbird',1,1,'default','http://',40,'machform.png',0,'color','#d95c43','','','color','#c02942','','','color','#ffffff','','','color','#d95c43','','','color','#53777a','','','color','#FBFBFB','','','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#000000','Lucida Grande',700,'normal','','#222222','Lucida Grande',400,'normal','','#ffffff','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#333333',0,'solid','#d95c43',1,'solid','#53777a',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(11,1,1,0,'Green Ringneck',1,1,'default','http://',40,'machform.png',0,'color','#0b486b','','','color','#3b8686','','','color','#ffffff','','','color','#cff09e','','','color','#79bd9a','','','color','#a8dba8','','','Delius Swash Caps',400,'normal','','#000000','Delius Swash Caps',400,'normal','100%','#000000','Delius Swash Caps',400,'normal','100%','#222222','Delius',400,'normal','85%','#ffffff','Delius Swash Caps',400,'normal','','#000000','Delius Swash Caps',400,'normal','95%','#000000','Delius',400,'normal','','#515151',0,'solid','#0b486b',1,'solid','#79bd9a',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(12,1,1,0,'Brown Finch',1,1,'default','http://',40,'machform.png',0,'color','#774f38','','','color','#e08e79','','','color','#ffffff','','','color','#ece5ce','','','color','#c5e0dc','','','color','#f9fad2','','','Arvo',700,'normal','','#000000','Arvo',400,'normal','','#000000','Arvo',700,'normal','','#222222','Arvo',400,'normal','','#444444','Arvo',400,'normal','','#000000','Arvo',400,'normal','85%','#000000','Arvo',400,'normal','','#333333',0,'solid','#774f38',1,'dashed','#e08e79',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(14,1,1,0,'Brown Macaw',1,1,'default','http://',40,'machform.png',0,'color','#413e4a','','','color','#73626e','','','pattern','#ffffff','pattern_022.gif','','color','#f0b49e','','','color','#b38184','','','color','#FBFBFB','','','Cabin',500,'normal','160%','#000000','Cabin',400,'normal','100%','#000000','Cabin',700,'normal','110%','#222222','Lucida Grande',400,'normal','','#ececec','Cabin',600,'normal','','#000000','Cabin',600,'normal','95%','#000000','Cabin',400,'normal','110%','#333333',0,'solid','#413e4a',1,'dotted','#ff9900',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(15,1,1,0,'Pink Thrush',1,1,'default','http://',40,'machform.png',0,'color','#ff9f9d','','','color','#ff3d7e','','','color','#ffffff','','','color','#7fc7af','','','color','#3fb8b0','','','color','#FBFBFB','','','Crafty Girls',400,'normal','','#000000','Crafty Girls',400,'normal','100%','#000000','Crafty Girls',400,'normal','100%','#222222','Nobile',400,'normal','80%','#ffffff','Crafty Girls',400,'normal','','#000000','Crafty Girls',400,'normal','95%','#000000','Molengo',400,'normal','110%','#333333',0,'solid','#ff9f9d',1,'solid','#3fb8b0',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(16,1,1,0,'Yellow Bulbul',1,1,'default','http://',40,'machform.png',0,'color','#f8f4d7','','','color','#f4b26c','','','color','#f4dec2','','','color','#f2b4a7','','','color','#e98976','','','color','#FBFBFB','','','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','95%','#222222','Cousine',400,'normal','80%','#ececec','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','','#000000','Cousine',400,'normal','','#333333',0,'solid','#f8f4d7',1,'solid','#f4b26c',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(17,1,1,0,'Blue Canary',1,1,'default','http://',40,'machform.png',0,'color','#81a8b8','','','color','#a4bcc2','','','color','#ffffff','','','color','#e8f3f8','','','color','#dbe6ec','','','color','#FBFBFB','','','PT Sans',400,'normal','','#000000','PT Sans',400,'normal','100%','#000000','PT Sans',700,'normal','100%','#222222','PT Sans',400,'normal','','#666666','PT Sans',700,'normal','','#000000','PT Sans',400,'normal','100%','#000000','PT Sans',400,'normal','110%','#333333',0,'solid','#81a8b8',1,'dashed','#a4bcc2',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(18,1,1,0,'Red Mockingbird',1,1,'default','http://',40,'machform.png',0,'color','#6b0103','','','color','#a30005','','','color','#c21b01','','','color','#f03d02','','','color','#1c0113','','','color','#FBFBFB','','','Oswald',400,'normal','','#ffffff','Open Sans',400,'normal','','#ffffff','Oswald',400,'normal','95%','#ffffff','Open Sans',400,'normal','','#ececec','Oswald',400,'normal','','#ececec','Lucida Grande',400,'normal','','#ffffff','Open Sans',400,'normal','','#333333',0,'solid','#6b0103',1,'solid','#1c0113',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(13,1,1,0,'Green Sparrow',1,1,'default','http://',40,'machform.png',0,'color','#d1f2a5','','','color','#f56990','','','color','#ffffff','','','color','#ffc48c','','','color','#ffa080','','','color','#FBFBFB','','','Open Sans',400,'normal','','#000000','Open Sans',400,'normal','','#000000','Open Sans',700,'normal','','#222222','Ubuntu',400,'normal','85%','#f4fce8','Open Sans',600,'normal','','#000000','Open Sans',400,'normal','95%','#000000','Open Sans',400,'normal','','#333333',10,'solid','#f0fab4',1,'solid','#ffa080',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(21,1,1,0,'Purple Vanga',1,1,'default','http://',40,'machform.png',0,'color','#7b85e2','','','color','#7aa6d6','','','color','#d1e7f9','','','color','#7aa6d6','','','color','#fbfcd0','','','color','#FBFBFB','','','Droid Sans',400,'normal','160%','#444444','Droid Sans',400,'normal','95%','#444444','Open Sans',700,'normal','95%','#444444','Droid Sans',400,'normal','85%','#444444','Droid Sans',400,'normal','110%','#444444','Droid Sans',400,'normal','95%','#000000','Droid Sans',400,'normal','100%','#333333',0,'solid','#CCCCCC',1,'solid','#fbfcd0',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(22,1,1,0,'Purple Dove',1,1,'default','http://',40,'machform.png',0,'color','#c0addb','','','color','#a662de','','','pattern','#ffffff','pattern_044.gif','','color','#a662de','','','color','#a662de','','','color','#c0addb','','','Pacifico',400,'normal','180%','#000000','Open Sans',400,'normal','95%','#000000','Pacifico',400,'normal','95%','#222222','Open Sans',400,'normal','80%','#ececec','Pacifico',400,'normal','110%','#000000','Open Sans',400,'normal','95%','#000000','Open Sans',400,'normal','100%','#333333',0,'solid','#a662de',1,'dashed','#CCCCCC',1,'dashed','#a662de','StandShadow','large','dark','text','Submit','http://',''),
	(20,1,1,0,'Pink Flamingo',1,1,'default','http://',40,'machform.png',0,'color','#f87d7b','','','color','#5ea0a3','','','color','#ffffff','','','color','#fab97f','','','color','#dcd1b4','','','color','#FBFBFB','','','Lucida Grande',400,'normal','160%','#b05573','Lucida Grande',400,'normal','95%','#b05573','Lucida Grande',700,'normal','95%','#b05573','Lucida Grande',400,'normal','80%','#444444','Lucida Grande',400,'normal','110%','#b05573','Lucida Grande',400,'normal','85%','#b05573','Lucida Grande',400,'normal','100%','#333333',0,'solid','#f87d7b',1,'dotted','#fab97f',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
	(19,1,1,0,'Yellow Kiwi',1,1,'default','http://',40,'machform.png',0,'color','#ffe281','','','color','#ffbb7f','','','color','#eee9e5','','','color','#fad4b2','','','color','#ff9c97','','','color','#FBFBFB','','','Lucida Grande',400,'normal','160%','#000000','Lucida Grande',400,'normal','95%','#000000','Lucida Grande',700,'normal','95%','#222222','Lucida Grande',400,'normal','80%','#ffffff','Lucida Grande',400,'normal','110%','#000000','Lucida Grande',400,'normal','85%','#000000','Lucida Grande',400,'normal','100%','#333333',0,'solid','#ffe281',1,'solid','#CCCCCC',1,'dotted','#cdcdcd','WarpShadow','large','normal','text','Submit','http://','');";
			
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_fonts_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."fonts` (
											  `font_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
											  `font_origin` varchar(11) NOT NULL DEFAULT 'google',
											  `font_family` varchar(100) DEFAULT NULL,
											  `font_variants` text,
											  `font_variants_numeric` text,
											  PRIMARY KEY (`font_id`),
											  KEY `font_family` (`font_family`)
											) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function populate_ap_fonts_table($dbh){

		//truncate ap_fonts table
		$query = "TRUNCATE ".MF_TABLE_PREFIX."fonts";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		$query = "INSERT INTO `".MF_TABLE_PREFIX."fonts` (`font_id`, `font_origin`, `font_family`, `font_variants`, `font_variants_numeric`)
VALUES
	(1,'google','Open Sans','300,300italic,regular,italic,600,600italic,700,700italic,800,800italic','300,300-italic,400,400-italic,600,600-italic,700,700-italic,800,800-italic'),
	(2,'google','Roboto','100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic','100,100-italic,300,300-italic,400,400-italic,500,500-italic,700,700-italic,900,900italic'),
	(3,'google','Lato','100,100italic,300,300italic,regular,italic,700,700italic,900,900italic','100,100-italic,300,300-italic,400,400-italic,700,700-italic,900,900italic'),
	(4,'google','Slabo 27px','regular','400'),
	(5,'google','Oswald','300,regular,700','300,400,700'),
	(6,'google','Roboto Condensed','300,300italic,regular,italic,700,700italic','300,300-italic,400,400-italic,700,700-italic'),
	(7,'google','Montserrat','regular,700','400,700'),
	(8,'google','Source Sans Pro','200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic','200,200-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic,900,900italic'),
	(9,'google','Raleway','100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic','100,100-italic,200,200-italic,300,300-italic,400,400-italic,500,500-italic,600,600-italic,700,700-italic,800,800-italic,900,900italic'),
	(10,'google','PT Sans','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(11,'google','Lora','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(12,'google','Open Sans Condensed','300,300italic,700','300,300-italic,700'),
	(13,'google','Ubuntu','300,300italic,regular,italic,500,500italic,700,700italic','300,300-italic,400,400-italic,500,500-italic,700,700-italic'),
	(14,'google','Droid Sans','regular,700','400,700'),
	(15,'google','Roboto Slab','100,300,regular,700','100,300,400,700'),
	(16,'google','Droid Serif','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(17,'google','Arimo','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(18,'google','Merriweather','300,300italic,regular,italic,700,700italic,900,900italic','300,300-italic,400,400-italic,700,700-italic,900,900italic'),
	(19,'google','PT Sans Narrow','regular,700','400,700'),
	(20,'google','Fjalla One','regular','400'),
	(21,'google','Noto Sans','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(22,'google','PT Serif','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(23,'google','Titillium Web','200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900','200,200-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic,900'),
	(24,'google','Indie Flower','regular','400'),
	(25,'google','Playfair Display','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),
	(26,'google','Bitter','regular,italic,700','400,400-italic,700'),
	(27,'google','Alegreya Sans','100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,800,800italic,900,900italic','100,100-italic,300,300-italic,400,400-italic,500,500-italic,700,700-italic,800,800-italic,900,900italic'),
	(28,'google','Yanone Kaffeesatz','200,300,regular,700','200,300,400,700'),
	(29,'google','Dosis','200,300,regular,500,600,700,800','200,300,400,500,600,700,800'),
	(30,'google','Cabin','regular,italic,500,500italic,600,600italic,700,700italic','400,400-italic,500,500-italic,600,600-italic,700,700-italic'),
	(31,'google','Passion One','regular,700,900','400,700,900'),
	(32,'google','Poiret One','regular','400'),
	(33,'google','Oxygen','300,regular,700','300,400,700'),
	(34,'google','Candal','regular','400'),
	(35,'google','Lobster','regular','400'),
	(36,'google','Anton','regular','400'),
	(37,'google','Arvo','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(38,'google','Inconsolata','regular,700','400,700'),
	(39,'google','Noto Serif','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(40,'google','Hind','300,regular,500,600,700','300,400,500,600,700'),
	(41,'google','Nunito','300,regular,700','300,400,700'),
	(42,'google','Bree Serif','regular','400'),
	(43,'google','Muli','300,300italic,regular,italic','300,300-italic,400,400-italic'),
	(44,'google','Ubuntu Condensed','regular','400'),
	(45,'google','Abel','regular','400'),
	(46,'google','Josefin Sans','100,100italic,300,300italic,regular,italic,600,600italic,700,700italic','100,100-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic'),
	(47,'google','Play','regular,700','400,700'),
	(48,'google','Libre Baskerville','regular,italic,700','400,400-italic,700'),
	(49,'google','Crimson Text','regular,italic,600,600italic,700,700italic','400,400-italic,600,600-italic,700,700-italic'),
	(50,'google','Archivo Narrow','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(51,'google','Exo 2','100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic','100,100-italic,200,200-italic,300,300-italic,400,400-italic,500,500-italic,600,600-italic,700,700-italic,800,800-italic,900,900italic'),
	(52,'google','Pacifico','regular','400'),
	(53,'google','Signika','300,regular,600,700','300,400,600,700'),
	(54,'google','Shadows Into Light','regular','400'),
	(55,'google','Alegreya','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),
	(56,'google','Asap','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(57,'google','Amatic SC','regular,700','400,700'),
	(58,'google','Cuprum','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(59,'google','Varela Round','regular','400'),
	(60,'google','Vollkorn','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(61,'google','Francois One','regular','400'),
	(62,'google','Fira Sans','300,300italic,regular,italic,500,500italic,700,700italic','300,300-italic,400,400-italic,500,500-italic,700,700-italic'),
	(63,'google','Merriweather Sans','300,300italic,regular,italic,700,700italic,800,800italic','300,300-italic,400,400-italic,700,700-italic,800,800-italic'),
	(64,'google','Maven Pro','regular,500,700,900','400,500,700,900'),
	(65,'google','Quicksand','300,regular,700','300,400,700'),
	(66,'google','Dancing Script','regular,700','400,700'),
	(67,'google','Karla','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(68,'google','Rokkitt','regular,700','400,700'),
	(69,'google','Architects Daughter','regular','400'),
	(70,'google','Righteous','regular','400'),
	(71,'google','Orbitron','regular,500,700,900','400,500,700,900'),
	(72,'google','Questrial','regular','400'),
	(73,'google','PT Sans Caption','regular,700','400,700'),
	(74,'google','Exo','100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic','100,100-italic,200,200-italic,300,300-italic,400,400-italic,500,500-italic,600,600-italic,700,700-italic,800,800-italic,900,900italic'),
	(75,'google','Patua One','regular','400'),
	(76,'google','Abril Fatface','regular','400'),
	(77,'google','Pathway Gothic One','regular','400'),
	(78,'google','Sigmar One','regular','400'),
	(79,'google','Josefin Slab','100,100italic,300,300italic,regular,italic,600,600italic,700,700italic','100,100-italic,300,300-italic,400,400-italic,600,600-italic,700,700-italic'),
	(80,'google','Monda','regular,700','400,700'),
	(81,'google','Source Code Pro','200,300,regular,500,600,700,900','200,300,400,500,600,700,900'),
	(82,'google','Chewy','regular','400'),
	(83,'google','Bangers','regular','400'),
	(84,'google','Crete Round','regular,italic','400,400-italic'),
	(85,'google','EB Garamond','regular','400'),
	(86,'google','Quattrocento Sans','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(87,'google','Istok Web','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(88,'google','Gloria Hallelujah','regular','400'),
	(89,'google','Noticia Text','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(90,'google','Comfortaa','300,regular,700','300,400,700'),
	(91,'google','Cantarell','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(92,'google','News Cycle','regular,700','400,700'),
	(93,'google','Pontano Sans','regular','400'),
	(94,'google','Ropa Sans','regular,italic','400,400-italic'),
	(95,'google','Kaushan Script','regular','400'),
	(96,'google','BenchNine','300,regular,700','300,400,700'),
	(97,'google','Fredoka One','regular','400'),
	(98,'google','Lobster Two','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(99,'google','Russo One','regular','400'),
	(100,'google','Gudea','regular,italic,700','400,400-italic,700'),
	(101,'google','Coming Soon','regular','400'),
	(102,'google','Domine','regular,700','400,700'),
	(103,'google','Philosopher','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(104,'google','Old Standard TT','regular,italic,700','400,400-italic,700'),
	(105,'google','ABeeZee','regular,italic','400,400-italic'),
	(106,'google','Tinos','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(107,'google','Satisfy','regular','400'),
	(108,'google','Economica','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(109,'google','Cinzel','regular,700,900','400,700,900'),
	(110,'google','Courgette','regular','400'),
	(111,'google','Armata','regular','400'),
	(112,'google','Hammersmith One','regular','400'),
	(113,'google','Covered By Your Grace','regular','400'),
	(114,'google','Black Ops One','regular','400'),
	(115,'google','Archivo Black','regular','400'),
	(116,'google','Sanchez','regular,italic','400,400-italic'),
	(117,'google','Roboto Mono','100,100italic,300,300italic,regular,italic,500,500italic,700,700italic','100,100-italic,300,300-italic,400,400-italic,500,500-italic,700,700-italic'),
	(118,'google','Cabin Condensed','regular,500,600,700','400,500,600,700'),
	(119,'google','Rubik','300,300italic,regular,italic,500,500italic,700,700italic,900,900italic','300,300-italic,400,400-italic,500,500-italic,700,700-italic,900,900italic'),
	(120,'google','Permanent Marker','regular','400'),
	(121,'google','Quattrocento','regular,700','400,700'),
	(122,'google','Alfa Slab One','regular','400'),
	(123,'google','Handlee','regular','400'),
	(124,'google','Kreon','300,regular,700','300,400,700'),
	(125,'google','Ruda','regular,700,900','400,700,900'),
	(126,'google','Rambla','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(127,'google','Actor','regular','400'),
	(128,'google','Cardo','regular,italic,700','400,400-italic,700'),
	(129,'google','Cookie','regular','400'),
	(130,'google','Amaranth','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(131,'google','Didact Gothic','regular','400'),
	(132,'google','Denk One','regular','400'),
	(133,'google','Rock Salt','regular','400'),
	(134,'google','Bevan','regular','400'),
	(135,'google','Varela','regular','400'),
	(136,'google','Nobile','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(137,'google','Pinyon Script','regular','400'),
	(138,'google','Changa One','regular,italic','400,400-italic'),
	(139,'google','Shadows Into Light Two','regular','400'),
	(140,'google','Vidaloka','regular','400'),
	(141,'google','Luckiest Guy','regular','400'),
	(142,'google','Tangerine','regular,700','400,700'),
	(143,'google','Special Elite','regular','400'),
	(144,'google','Antic Slab','regular','400'),
	(145,'google','Great Vibes','regular','400'),
	(146,'google','Gentium Book Basic','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(147,'google','Playball','regular','400'),
	(148,'google','Arapey','regular,italic','400,400-italic'),
	(149,'google','Droid Sans Mono','regular','400'),
	(150,'google','Enriqueta','regular,700','400,700'),
	(151,'google','Jura','300,regular,500,600','300,400,500,600'),
	(152,'google','Bad Script','regular','400'),
	(153,'google','Marck Script','regular','400'),
	(154,'google','Squada One','regular','400'),
	(155,'google','Poppins','300,regular,500,600,700','300,400,500,600,700'),
	(156,'google','Basic','regular','400'),
	(157,'google','Work Sans','100,200,300,regular,500,600,700,800,900','100,200,300,400,500,600,700,800,900'),
	(158,'google','Sintony','regular,700','400,700'),
	(159,'google','Source Serif Pro','regular,600,700','400,600,700'),
	(160,'google','Oleo Script','regular,700','400,700'),
	(161,'google','Sorts Mill Goudy','regular,italic','400,400-italic'),
	(162,'google','Paytone One','regular','400'),
	(163,'google','Glegoo','regular,700','400,700'),
	(164,'google','Fauna One','regular','400'),
	(165,'google','Audiowide','regular','400'),
	(166,'google','Niconne','regular','400'),
	(167,'google','Molengo','regular','400'),
	(168,'google','Volkhov','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(169,'google','Damion','regular','400'),
	(170,'google','Acme','regular','400'),
	(171,'google','Doppio One','regular','400'),
	(172,'google','Calligraffitti','regular','400'),
	(173,'google','Fugaz One','regular','400'),
	(174,'google','Scada','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(175,'google','Amiri','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(176,'google','Just Another Hand','regular','400'),
	(177,'google','Carme','regular','400'),
	(178,'google','Playfair Display SC','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),
	(179,'google','Marmelad','regular','400'),
	(180,'google','Chivo','regular,italic,900,900italic','400,400-italic,900,900italic'),
	(181,'google','Homemade Apple','regular','400'),
	(182,'google','Gochi Hand','regular','400'),
	(183,'google','Nothing You Could Do','regular','400'),
	(184,'google','Signika Negative','300,regular,600,700','300,400,600,700'),
	(185,'google','Patrick Hand','regular','400'),
	(186,'google','Copse','regular','400'),
	(187,'google','Viga','regular','400'),
	(188,'google','Alex Brush','regular','400'),
	(189,'google','Kalam','300,regular,700','300,400,700'),
	(190,'google','Overlock','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),
	(191,'google','Antic','regular','400'),
	(192,'google','Homenaje','regular','400'),
	(193,'google','Limelight','regular','400'),
	(194,'google','Neuton','200,300,regular,italic,700,800','200,300,400,400-italic,700,800'),
	(195,'google','Waiting for the Sunrise','regular','400'),
	(196,'google','Crafty Girls','regular','400'),
	(197,'google','Coda','regular,800','400,800'),
	(198,'google','Coustard','regular,900','400,900'),
	(199,'google','Aldrich','regular','400'),
	(200,'google','Cherry Cream Soda','regular','400'),
	(201,'google','Khula','300,regular,600,700,800','300,400,600,700,800'),
	(202,'google','Spinnaker','regular','400'),
	(203,'google','Alice','regular','400'),
	(204,'google','Share','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(205,'google','Alegreya Sans SC','100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,800,800italic,900,900italic','100,100-italic,300,300-italic,400,400-italic,500,500-italic,700,700-italic,800,800-italic,900,900italic'),
	(206,'google','Days One','regular','400'),
	(207,'google','Cantata One','regular','400'),
	(208,'google','Boogaloo','regular','400'),
	(209,'google','Sacramento','regular','400'),
	(210,'google','Allerta','regular','400'),
	(211,'google','Jockey One','regular','400'),
	(212,'google','Marcellus','regular','400'),
	(213,'google','Lusitana','regular,700','400,700'),
	(214,'google','Reenie Beanie','regular','400'),
	(215,'google','Gentium Basic','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(216,'google','Marvel','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(217,'google','Ultra','regular','400'),
	(218,'google','Rajdhani','300,regular,500,600,700','300,400,500,600,700'),
	(219,'google','Electrolize','regular','400'),
	(220,'google','Michroma','regular','400'),
	(221,'google','Average','regular','400'),
	(222,'google','Allerta Stencil','regular','400'),
	(223,'google','Nixie One','regular','400'),
	(224,'google','VT323','regular','400'),
	(225,'google','Kameron','regular,700','400,700'),
	(226,'google','Magra','regular,700','400,700'),
	(227,'google','Walter Turncoat','regular','400'),
	(228,'google','Telex','regular','400'),
	(229,'google','Syncopate','regular,700','400,700'),
	(230,'google','Julius Sans One','regular','400'),
	(231,'google','Fredericka the Great','regular','400'),
	(232,'google','Fontdiner Swanky','regular','400'),
	(233,'google','Ubuntu Mono','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(234,'google','Convergence','regular','400'),
	(235,'google','Bubblegum Sans','regular','400'),
	(236,'google','PT Serif Caption','regular,italic','400,400-italic'),
	(237,'google','PT Mono','regular','400'),
	(238,'google','Adamina','regular','400'),
	(239,'google','Advent Pro','100,200,300,regular,500,600,700','100,200,300,400,500,600,700'),
	(240,'google','Ceviche One','regular','400'),
	(241,'google','Contrail One','regular','400'),
	(242,'google','Allura','regular','400'),
	(243,'google','Rancho','regular','400'),
	(244,'google','Freckle Face','regular','400'),
	(245,'google','Oranienbaum','regular','400'),
	(246,'google','Lekton','regular,italic,700','400,400-italic,700'),
	(247,'google','Prata','regular','400'),
	(248,'google','Voltaire','regular','400'),
	(249,'google','Kanit','100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic','100,100-italic,200,200-italic,300,300-italic,400,400-italic,500,500-italic,600,600-italic,700,700-italic,800,800-italic,900,900italic'),
	(250,'google','Quantico','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(251,'google','Neucha','regular','400'),
	(252,'google','Annie Use Your Telescope','regular','400'),
	(253,'google','Ek Mukta','200,300,regular,500,600,700,800','200,300,400,500,600,700,800'),
	(254,'google','Carrois Gothic','regular','400'),
	(255,'google','Yellowtail','regular','400'),
	(256,'google','Teko','300,regular,500,600,700','300,400,500,600,700'),
	(257,'google','Arbutus Slab','regular','400'),
	(258,'google','Khand','300,regular,500,600,700','300,400,500,600,700'),
	(259,'google','Radley','regular,italic','400,400-italic'),
	(260,'google','Rosario','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(261,'google','Unica One','regular','400'),
	(262,'google','Average Sans','regular','400'),
	(263,'google','Montserrat Alternates','regular,700','400,700'),
	(264,'google','Lustria','regular','400'),
	(265,'google','Hanuman','regular,700','400,700'),
	(266,'google','Finger Paint','regular','400'),
	(267,'google','Cabin Sketch','regular,700','400,700'),
	(268,'google','Six Caps','regular','400'),
	(269,'google','Schoolbell','regular','400'),
	(270,'google','Parisienne','regular','400'),
	(271,'google','Chelsea Market','regular','400'),
	(272,'google','Goudy Bookletter 1911','regular','400'),
	(273,'google','Marcellus SC','regular','400'),
	(274,'google','Sansita One','regular','400'),
	(275,'google','Forum','regular','400'),
	(276,'google','Cutive','regular','400'),
	(277,'google','Rochester','regular','400'),
	(278,'google','Trocchi','regular','400'),
	(279,'google','Cinzel Decorative','regular,700,900','400,700,900'),
	(280,'google','Alegreya SC','regular,italic,700,700italic,900,900italic','400,400-italic,700,700-italic,900,900italic'),
	(281,'google','Merienda','regular,700','400,700'),
	(282,'google','Aclonica','regular','400'),
	(283,'google','Puritan','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(284,'google','Corben','regular,700','400,700'),
	(285,'google','Yesteryear','regular','400'),
	(286,'google','Berkshire Swash','regular','400'),
	(287,'google','Cousine','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(288,'google','Catamaran','100,200,300,regular,500,600,700,800,900','100,200,300,400,500,600,700,800,900'),
	(289,'google','Inder','regular','400'),
	(290,'google','Port Lligat Slab','regular','400'),
	(291,'google','Grand Hotel','regular','400'),
	(292,'google','Kelly Slab','regular','400'),
	(293,'google','Merienda One','regular','400'),
	(294,'google','Slackey','regular','400'),
	(295,'google','Kadwa','regular,700','400,700'),
	(296,'google','Sue Ellen Francisco','regular','400'),
	(297,'google','Carter One','regular','400'),
	(298,'google','Andada','regular','400'),
	(299,'google','Mako','regular','400'),
	(300,'google','Monoton','regular','400'),
	(301,'google','Caudex','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(302,'google','Tenor Sans','regular','400'),
	(303,'google','Gruppo','regular','400'),
	(304,'google','Halant','300,regular,500,600,700','300,400,500,600,700'),
	(305,'google','Belleza','regular','400'),
	(306,'google','Metrophobic','regular','400'),
	(307,'google','Alef','regular,700','400,700'),
	(308,'google','Duru Sans','regular','400'),
	(309,'google','Leckerli One','regular','400'),
	(310,'google','Capriola','regular','400'),
	(311,'google','Petit Formal Script','regular','400'),
	(312,'google','Cambay','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(313,'google','Sarala','regular,700','400,700'),
	(314,'google','Press Start 2P','regular','400'),
	(315,'google','Frijole','regular','400'),
	(316,'google','Italianno','regular','400'),
	(317,'google','Short Stack','regular','400'),
	(318,'google','Anaheim','regular','400'),
	(319,'google','Gilda Display','regular','400'),
	(320,'google','Headland One','regular','400'),
	(321,'google','Englebert','regular','400'),
	(322,'google','Tauri','regular','400'),
	(323,'google','Baumans','regular','400'),
	(324,'google','Unkempt','regular,700','400,700'),
	(325,'google','Give You Glory','regular','400'),
	(326,'google','Timmana','regular','400'),
	(327,'google','Lilita One','regular','400'),
	(328,'google','Mouse Memoirs','regular','400'),
	(329,'google','Mr De Haviland','regular','400'),
	(330,'google','Racing Sans One','regular','400'),
	(331,'google','Crushed','regular','400'),
	(332,'google','Oxygen Mono','regular','400'),
	(333,'google','Allan','regular,700','400,700'),
	(334,'google','Knewave','regular','400'),
	(335,'google','Alike','regular','400'),
	(336,'google','The Girl Next Door','regular','400'),
	(337,'google','Imprima','regular','400'),
	(338,'google','Delius','regular','400'),
	(339,'google','Just Me Again Down Here','regular','400'),
	(340,'google','Lateef','regular','400'),
	(341,'google','Londrina Solid','regular','400'),
	(342,'google','Graduate','regular','400'),
	(343,'google','Pragati Narrow','regular,700','400,700'),
	(344,'google','Lemon','regular','400'),
	(345,'google','Judson','regular,italic,700','400,400-italic,700'),
	(346,'google','Henny Penny','regular','400'),
	(347,'google','Fenix','regular','400'),
	(348,'google','Ovo','regular','400'),
	(349,'google','Rufina','regular,700','400,700'),
	(350,'google','Quando','regular','400'),
	(351,'google','Creepster','regular','400'),
	(352,'google','Prosto One','regular','400'),
	(353,'google','Brawler','regular','400'),
	(354,'google','Engagement','regular','400'),
	(355,'google','Montez','regular','400'),
	(356,'google','Love Ya Like A Sister','regular','400'),
	(357,'google','Mr Dafoe','regular','400'),
	(358,'google','Andika','regular','400'),
	(359,'google','Bowlby One SC','regular','400'),
	(360,'google','Fira Mono','regular,700','400,700'),
	(361,'google','Fjord One','regular','400'),
	(362,'google','Tienne','regular,700,900','400,700,900'),
	(363,'google','Wire One','regular','400'),
	(364,'google','Seaweed Script','regular','400'),
	(365,'google','Fanwood Text','regular,italic','400,400-italic'),
	(366,'google','Gravitas One','regular','400'),
	(367,'google','Rationale','regular','400'),
	(368,'google','Anonymous Pro','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(369,'google','Belgrano','regular','400'),
	(370,'google','Yantramanav','100,300,regular,500,700,900','100,300,400,500,700,900'),
	(371,'google','Gafata','regular','400'),
	(372,'google','Caesar Dressing','regular','400'),
	(373,'google','Averia Sans Libre','300,300italic,regular,italic,700,700italic','300,300-italic,400,400-italic,700,700-italic'),
	(374,'google','Bentham','regular','400'),
	(375,'google','IM Fell DW Pica','regular,italic','400,400-italic'),
	(376,'google','Orienta','regular','400'),
	(377,'google','Biryani','200,300,regular,600,700,800,900','200,300,400,600,700,800,900'),
	(378,'google','Bowlby One','regular','400'),
	(379,'google','Arizonia','regular','400'),
	(380,'google','Kranky','regular','400'),
	(381,'google','UnifrakturMaguntia','regular','400'),
	(382,'google','Pompiere','regular','400'),
	(383,'google','Happy Monkey','regular','400'),
	(384,'google','Skranji','regular,700','400,700'),
	(385,'google','Loved by the King','regular','400'),
	(386,'google','La Belle Aurore','regular','400'),
	(387,'google','Simonetta','regular,italic,900,900italic','400,400-italic,900,900italic'),
	(388,'google','Mountains of Christmas','regular,700','400,700'),
	(389,'google','Herr Von Muellerhoff','regular','400'),
	(390,'google','Cutive Mono','regular','400'),
	(391,'google','Slabo 13px','regular','400'),
	(392,'google','Megrim','regular','400'),
	(393,'google','Hind Vadodara','300,regular,500,600,700','300,400,500,600,700'),
	(394,'google','Qwigley','regular','400'),
	(395,'google','Yeseva One','regular','400'),
	(396,'google','Balthazar','regular','400'),
	(397,'google','IM Fell English','regular,italic','400,400-italic'),
	(398,'google','Kotta One','regular','400'),
	(399,'google','Nova Square','regular','400'),
	(400,'google','Voces','regular','400'),
	(401,'google','GFS Didot','regular','400'),
	(402,'google','Shanti','regular','400'),
	(403,'google','Oregano','regular,italic','400,400-italic'),
	(404,'google','Titan One','regular','400'),
	(405,'google','Mate','regular,italic','400,400-italic'),
	(406,'google','Strait','regular','400'),
	(407,'google','Cedarville Cursive','regular','400'),
	(408,'google','Caveat Brush','regular','400'),
	(409,'google','Ledger','regular','400'),
	(410,'google','Salsa','regular','400'),
	(411,'google','Poly','regular,italic','400,400-italic'),
	(412,'google','Oleo Script Swash Caps','regular,700','400,700'),
	(413,'google','Patrick Hand SC','regular','400'),
	(414,'google','Lily Script One','regular','400'),
	(415,'google','Euphoria Script','regular','400'),
	(416,'google','Carrois Gothic SC','regular','400'),
	(417,'google','Aladin','regular','400'),
	(418,'google','Expletus Sans','regular,italic,500,500italic,600,600italic,700,700italic','400,400-italic,500,500-italic,600,600-italic,700,700-italic'),
	(419,'google','Share Tech','regular','400'),
	(420,'google','Geo','regular,italic','400,400-italic'),
	(421,'google','Khmer','regular','400'),
	(422,'google','Norican','regular','400'),
	(423,'google','Stardos Stencil','regular,700','400,700'),
	(424,'google','Italiana','regular','400'),
	(425,'google','Meddon','regular','400'),
	(426,'google','IM Fell English SC','regular','400'),
	(427,'google','Federo','regular','400'),
	(428,'google','Stalemate','regular','400'),
	(429,'google','Gabriela','regular','400'),
	(430,'google','Podkova','regular,700','400,700'),
	(431,'google','Buenard','regular,700','400,700'),
	(432,'google','Over the Rainbow','regular','400'),
	(433,'google','Shojumaru','regular','400'),
	(434,'google','Bilbo Swash Caps','regular','400'),
	(435,'google','Sniglet','regular,800','400,800'),
	(436,'google','Quintessential','regular','400'),
	(437,'google','Kurale','regular','400'),
	(438,'google','Dawning of a New Day','regular','400'),
	(439,'google','Vibur','regular','400'),
	(440,'google','Unna','regular','400'),
	(441,'google','Kite One','regular','400'),
	(442,'google','Cherry Swash','regular,700','400,700'),
	(443,'google','Delius Swash Caps','regular','400'),
	(444,'google','Nova Mono','regular','400'),
	(445,'google','Life Savers','regular,700','400,700'),
	(446,'google','Poller One','regular','400'),
	(447,'google','Mate SC','regular','400'),
	(448,'google','Kristi','regular','400'),
	(449,'google','Palanquin','100,200,300,regular,500,600,700','100,200,300,400,500,600,700'),
	(450,'google','Averia Serif Libre','300,300italic,regular,italic,700,700italic','300,300-italic,400,400-italic,700,700-italic'),
	(451,'google','Cambo','regular','400'),
	(452,'google','Rouge Script','regular','400'),
	(453,'google','Clicker Script','regular','400'),
	(454,'google','Griffy','regular','400'),
	(455,'google','Karma','300,regular,500,600,700','300,400,500,600,700'),
	(456,'google','Coda Caption','800','800'),
	(457,'google','Itim','regular','400'),
	(458,'google','Amethysta','regular','400'),
	(459,'google','Fondamento','regular,italic','400,400-italic'),
	(460,'google','Junge','regular','400'),
	(461,'google','Sail','regular','400'),
	(462,'google','Holtwood One SC','regular','400'),
	(463,'google','Codystar','300,regular','300,400'),
	(464,'google','Oldenburg','regular','400'),
	(465,'google','Concert One','regular','400'),
	(466,'google','Zeyada','regular','400'),
	(467,'google','Amarante','regular','400'),
	(468,'google','Inika','regular,700','400,700'),
	(469,'google','NTR','regular','400'),
	(470,'google','Flamenco','300,regular','300,400'),
	(471,'google','Aguafina Script','regular','400'),
	(472,'google','Sofia','regular','400'),
	(473,'google','Tulpen One','regular','400'),
	(474,'google','Maiden Orange','regular','400'),
	(475,'google','Dorsa','regular','400'),
	(476,'google','Cantora One','regular','400'),
	(477,'google','Donegal One','regular','400'),
	(478,'google','Raleway Dots','regular','400'),
	(479,'google','Nosifer','regular','400'),
	(480,'google','Chau Philomene One','regular,italic','400,400-italic'),
	(481,'google','Swanky and Moo Moo','regular','400'),
	(482,'google','Ruslan Display','regular','400'),
	(483,'google','Mallanna','regular','400'),
	(484,'google','Rammetto One','regular','400'),
	(485,'google','Condiment','regular','400'),
	(486,'google','Vast Shadow','regular','400'),
	(487,'google','Metamorphous','regular','400'),
	(488,'google','IM Fell Double Pica','regular,italic','400,400-italic'),
	(489,'google','IM Fell French Canon','regular,italic','400,400-italic'),
	(490,'google','Medula One','regular','400'),
	(491,'google','Martel','200,300,regular,600,700,800,900','200,300,400,600,700,800,900'),
	(492,'google','Stoke','300,regular','300,400'),
	(493,'google','Sarina','regular','400'),
	(494,'google','Rosarivo','regular,italic','400,400-italic'),
	(495,'google','Stint Ultra Condensed','regular','400'),
	(496,'google','IM Fell DW Pica SC','regular','400'),
	(497,'google','Kavoon','regular','400'),
	(498,'google','Iceland','regular','400'),
	(499,'google','Nokora','regular,700','400,700'),
	(500,'google','Angkor','regular','400'),
	(501,'google','Montserrat Subrayada','regular,700','400,700'),
	(502,'google','Paprika','regular','400'),
	(503,'google','Esteban','regular','400'),
	(504,'google','Rye','regular','400'),
	(505,'google','Share Tech Mono','regular','400'),
	(506,'google','Prociono','regular','400'),
	(507,'google','Monofett','regular','400'),
	(508,'google','Artifika','regular','400'),
	(509,'google','IM Fell Double Pica SC','regular','400'),
	(510,'google','Dynalight','regular','400'),
	(511,'google','Nova Round','regular','400'),
	(512,'google','Sunshiney','regular','400'),
	(513,'google','Text Me One','regular','400'),
	(514,'google','Martel Sans','200,300,regular,600,700,800,900','200,300,400,600,700,800,900'),
	(515,'google','Linden Hill','regular,italic','400,400-italic'),
	(516,'google','Butcherman','regular','400'),
	(517,'google','McLaren','regular','400'),
	(518,'google','Numans','regular','400'),
	(519,'google','Snowburst One','regular','400'),
	(520,'google','Miniver','regular','400'),
	(521,'google','Sancreek','regular','400'),
	(522,'google','Gurajada','regular','400'),
	(523,'google','Bilbo','regular','400'),
	(524,'google','Overlock SC','regular','400'),
	(525,'google','Habibi','regular','400'),
	(526,'google','Redressed','regular','400'),
	(527,'google','Delius Unicase','regular,700','400,700'),
	(528,'google','Stint Ultra Expanded','regular','400'),
	(529,'google','Averia Libre','300,300italic,regular,italic,700,700italic','300,300-italic,400,400-italic,700,700-italic'),
	(530,'google','Caveat','regular,700','400,700'),
	(531,'google','Cagliostro','regular','400'),
	(532,'google','Wallpoet','regular','400'),
	(533,'google','IM Fell Great Primer','regular,italic','400,400-italic'),
	(534,'google','Galindo','regular','400'),
	(535,'google','IM Fell French Canon SC','regular','400'),
	(536,'google','Della Respira','regular','400'),
	(537,'google','Ruthie','regular','400'),
	(538,'google','Sonsie One','regular','400'),
	(539,'google','Antic Didone','regular','400'),
	(540,'google','IM Fell Great Primer SC','regular','400'),
	(541,'google','Trade Winds','regular','400'),
	(542,'google','Krona One','regular','400'),
	(543,'google','Jolly Lodger','regular','400'),
	(544,'google','Ruluko','regular','400'),
	(545,'google','Milonga','regular','400'),
	(546,'google','Ramabhadra','regular','400'),
	(547,'google','Smythe','regular','400'),
	(548,'google','Irish Grover','regular','400'),
	(549,'google','Buda','300','300'),
	(550,'google','Battambang','regular,700','400,700'),
	(551,'google','Ribeye','regular','400'),
	(552,'google','Jacques Francois','regular','400'),
	(553,'google','Port Lligat Sans','regular','400'),
	(554,'google','Scheherazade','regular,700','400,700'),
	(555,'google','Mrs Saint Delafield','regular','400'),
	(556,'google','Asul','regular,700','400,700'),
	(557,'google','Alike Angular','regular','400'),
	(558,'google','Piedra','regular','400'),
	(559,'google','Offside','regular','400'),
	(560,'google','Wendy One','regular','400'),
	(561,'google','Germania One','regular','400'),
	(562,'google','Snippet','regular','400'),
	(563,'google','Hind Siliguri','300,regular,500,600,700','300,400,500,600,700'),
	(564,'google','Wellfleet','regular','400'),
	(565,'google','Glass Antiqua','regular','400'),
	(566,'google','League Script','regular','400'),
	(567,'google','Lovers Quarrel','regular','400'),
	(568,'google','Elsie','regular,900','400,900'),
	(569,'google','Pirata One','regular','400'),
	(570,'google','Autour One','regular','400'),
	(571,'google','Laila','300,regular,500,600,700','300,400,500,600,700'),
	(572,'google','Spirax','regular','400'),
	(573,'google','Bigshot One','regular','400'),
	(574,'google','UnifrakturCook','700','700'),
	(575,'google','Trochut','regular,italic,700','400,400-italic,700'),
	(576,'google','Suwannaphum','regular','400'),
	(577,'google','Dr Sugiyama','regular','400'),
	(578,'google','Nova Slim','regular','400'),
	(579,'google','Julee','regular','400'),
	(580,'google','Chango','regular','400'),
	(581,'google','New Rocker','regular','400'),
	(582,'google','Joti One','regular','400'),
	(583,'google','MedievalSharp','regular','400'),
	(584,'google','Mystery Quest','regular','400'),
	(585,'google','Iceberg','regular','400'),
	(586,'google','Jaldi','regular,700','400,700'),
	(587,'google','GFS Neohellenic','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(588,'google','Kenia','regular','400'),
	(589,'google','Trykker','regular','400'),
	(590,'google','Keania One','regular','400'),
	(591,'google','Mandali','regular','400'),
	(592,'google','Peralta','regular','400'),
	(593,'google','Astloch','regular,700','400,700'),
	(594,'google','Gorditas','regular,700','400,700'),
	(595,'google','Nova Flat','regular','400'),
	(596,'google','Miltonian Tattoo','regular','400'),
	(597,'google','Combo','regular','400'),
	(598,'google','Bubbler One','regular','400'),
	(599,'google','Akronim','regular','400'),
	(600,'google','Croissant One','regular','400'),
	(601,'google','Modern Antiqua','regular','400'),
	(602,'google','Almendra','regular,italic,700,700italic','400,400-italic,700,700-italic'),
	(603,'google','Galdeano','regular','400'),
	(604,'google','Palanquin Dark','regular,500,600,700','400,500,600,700'),
	(605,'google','Eagle Lake','regular','400'),
	(606,'google','Spicy Rice','regular','400'),
	(607,'google','Atomic Age','regular','400'),
	(608,'google','Fascinate Inline','regular','400'),
	(609,'google','Sumana','regular,700','400,700'),
	(610,'google','Fresca','regular','400'),
	(611,'google','Original Surfer','regular','400'),
	(612,'google','Elsie Swash Caps','regular,900','400,900'),
	(613,'google','Petrona','regular','400'),
	(614,'google','Lancelot','regular','400'),
	(615,'google','Ranchers','regular','400'),
	(616,'google','Monsieur La Doulaise','regular','400'),
	(617,'google','Fascinate','regular','400'),
	(618,'google','Faster One','regular','400'),
	(619,'google','Jacques Francois Shadow','regular','400'),
	(620,'google','Passero One','regular','400'),
	(621,'google','Montaga','regular','400'),
	(622,'google','Aubrey','regular','400'),
	(623,'google','Bokor','regular','400'),
	(624,'google','Goblin One','regular','400'),
	(625,'google','Emilys Candy','regular','400'),
	(626,'google','Revalia','regular','400'),
	(627,'google','Devonshire','regular','400'),
	(628,'google','Miltonian','regular','400'),
	(629,'google','Asset','regular','400'),
	(630,'google','Underdog','regular','400'),
	(631,'google','Eater','regular','400'),
	(632,'google','Ribeye Marrow','regular','400'),
	(633,'google','Metal Mania','regular','400'),
	(634,'google','Averia Gruesa Libre','regular','400'),
	(635,'google','Diplomata','regular','400'),
	(636,'google','Vampiro One','regular','400'),
	(637,'google','Freehand','regular','400'),
	(638,'google','Dekko','regular','400'),
	(639,'google','Sofadi One','regular','400'),
	(640,'google','Londrina Shadow','regular','400'),
	(641,'google','Geostar Fill','regular','400'),
	(642,'google','Margarine','regular','400'),
	(643,'google','Rum Raisin','regular','400'),
	(644,'google','Siemreap','regular','400'),
	(645,'google','Suranna','regular','400'),
	(646,'google','Content','regular,700','400,700'),
	(647,'google','Mrs Sheppards','regular','400'),
	(648,'google','Macondo Swash Caps','regular','400'),
	(649,'google','Sura','regular,700','400,700'),
	(650,'google','Nova Cut','regular','400'),
	(651,'google','Purple Purse','regular','400'),
	(652,'google','Warnes','regular','400'),
	(653,'google','Felipa','regular','400'),
	(654,'google','Londrina Sketch','regular','400'),
	(655,'google','Butterfly Kids','regular','400'),
	(656,'google','Smokum','regular','400'),
	(657,'google','Nova Script','regular','400'),
	(658,'google','Meie Script','regular','400'),
	(659,'google','Sarpanch','regular,500,600,700,800,900','400,500,600,700,800,900'),
	(660,'google','Rubik One','regular','400'),
	(661,'google','Rozha One','regular','400'),
	(662,'google','Ewert','regular','400'),
	(663,'google','Nova Oval','regular','400'),
	(664,'google','Moul','regular','400'),
	(665,'google','Chicle','regular','400'),
	(666,'google','Seymour One','regular','400'),
	(667,'google','Supermercado One','regular','400'),
	(668,'google','Londrina Outline','regular','400'),
	(669,'google','Geostar','regular','400'),
	(670,'google','Marko One','regular','400'),
	(671,'google','Federant','regular','400'),
	(672,'google','Romanesco','regular','400'),
	(673,'google','Princess Sofia','regular','400'),
	(674,'google','Molle','italic','400-italic'),
	(675,'google','Vesper Libre','regular,500,700,900','400,500,700,900'),
	(676,'google','Plaster','regular','400'),
	(677,'google','Metal','regular','400'),
	(678,'google','Diplomata SC','regular','400'),
	(679,'google','Macondo','regular','400'),
	(680,'google','Dangrek','regular','400'),
	(681,'google','Ranga','regular,700','400,700'),
	(682,'google','Bigelow Rules','regular','400'),
	(683,'google','Chenla','regular','400'),
	(684,'google','Sirin Stencil','regular','400'),
	(685,'google','Ramaraja','regular','400'),
	(686,'google','Miss Fajardose','regular','400'),
	(687,'google','Odor Mean Chey','regular','400'),
	(688,'google','Dhurjati','regular','400'),
	(689,'google','Amita','regular,700','400,700'),
	(690,'google','Bayon','regular','400'),
	(691,'google','Koulen','regular','400'),
	(692,'google','Sevillana','regular','400'),
	(693,'google','Arya','regular,700','400,700'),
	(694,'google','Arbutus','regular','400'),
	(695,'google','Stalinist One','regular','400'),
	(696,'google','Kdam Thmor','regular','400'),
	(697,'google','Chela One','regular','400'),
	(698,'google','Almendra Display','regular','400'),
	(699,'google','Uncial Antiqua','regular','400'),
	(700,'google','Risque','regular','400'),
	(701,'google','Mr Bedfort','regular','400'),
	(702,'google','Taprom','regular','400'),
	(703,'google','Tillana','regular,500,600,700,800','400,500,600,700,800'),
	(704,'google','Erica One','regular','400'),
	(705,'google','Gidugu','regular','400'),
	(706,'google','Ruge Boogie','regular','400'),
	(707,'google','Emblema One','regular','400'),
	(708,'google','Almendra SC','regular','400'),
	(709,'google','Preahvihear','regular','400'),
	(710,'google','Kantumruy','300,regular,700','300,400,700'),
	(711,'google','Jim Nightshade','regular','400'),
	(712,'google','Flavors','regular','400'),
	(713,'google','Rhodium Libre','regular','400'),
	(714,'google','Bonbon','regular','400'),
	(715,'google','Tenali Ramakrishna','regular','400'),
	(716,'google','Rubik Mono One','regular','400'),
	(717,'google','Chonburi','regular','400'),
	(718,'google','Lakki Reddy','regular','400'),
	(719,'google','Sahitya','regular,700','400,700'),
	(720,'google','Suravaram','regular','400'),
	(721,'google','Fasthand','regular','400'),
	(722,'google','Moulpali','regular','400'),
	(723,'google','Unlock','regular','400'),
	(724,'google','Eczar','regular,500,600,700,800','400,500,600,700,800'),
	(725,'google','Sree Krushnadevaraya','regular','400'),
	(726,'google','Hanalei Fill','regular','400'),
	(727,'google','Hanalei','regular','400'),
	(728,'google','Inknut Antiqua','300,regular,500,600,700,800,900','300,400,500,600,700,800,900'),
	(729,'google','Asar','regular','400'),
	(730,'google','Fruktur','regular','400'),
	(731,'google','Modak','regular','400'),
	(732,'google','Peddana','regular','400'),
	(733,'google','Ravi Prakash','regular','400');";
		
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_settings_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."settings` (
												  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
												  `smtp_enable` tinyint(1) NOT NULL DEFAULT '0',
												  `smtp_host` varchar(255) NOT NULL DEFAULT 'localhost',
												  `smtp_port` int(11) NOT NULL DEFAULT '25',
												  `smtp_auth` tinyint(1) NOT NULL DEFAULT '0',
												  `smtp_username` varchar(255) DEFAULT NULL,
												  `smtp_password` varchar(255) DEFAULT NULL,
												  `smtp_secure` tinyint(1) NOT NULL DEFAULT '0',
												  `upload_dir` varchar(255) NOT NULL DEFAULT './data',
												  `data_dir` varchar(255) NOT NULL DEFAULT './data',
												  `default_from_name` varchar(255) NOT NULL DEFAULT 'MachForm',
												  `default_from_email` varchar(255) DEFAULT NULL,
												  `default_form_theme_id` int(11) NOT NULL DEFAULT '0',
												  `base_url` varchar(255) DEFAULT NULL,
												  `form_manager_max_rows` int(11) DEFAULT '10',
												  `admin_image_url` varchar(255) DEFAULT NULL,
												  `disable_machform_link` int(1) DEFAULT '0',
												  `customer_id` varchar(100) DEFAULT NULL,
												  `customer_name` varchar(100) DEFAULT NULL,
												  `license_key` varchar(50) DEFAULT NULL,
												  `machform_version` varchar(10) NOT NULL DEFAULT '3.0',
												  `admin_theme` varchar(11) DEFAULT NULL,
												  `enforce_tsv` int(1) NOT NULL DEFAULT '0',
												  `enable_ip_restriction` int(1) NOT NULL DEFAULT '0',
												  `ip_whitelist` text,
												  `enable_account_locking` int(1) NOT NULL DEFAULT '0',
												  `account_lock_period` int(11) NOT NULL DEFAULT '30',
												  `account_lock_max_attempts` int(11) NOT NULL DEFAULT '6',
												  `recaptcha_site_key` varchar(255) DEFAULT NULL,
												  `recaptcha_secret_key` varchar(255) DEFAULT NULL,
												  `ldap_enable` tinyint(1) NOT NULL DEFAULT '0',
												  `ldap_type` varchar(11) NOT NULL DEFAULT 'ad' COMMENT 'ad,openldap',
												  `ldap_host` varchar(255) DEFAULT NULL,
												  `ldap_port` int(11) NOT NULL DEFAULT '389',
												  `ldap_encryption` varchar(11) NOT NULL DEFAULT 'none' COMMENT 'none,ssl,tls',
												  `ldap_basedn` varchar(255) DEFAULT NULL,
												  `ldap_account_suffix` varchar(100) DEFAULT NULL,
												  `ldap_required_group` varchar(255) DEFAULT NULL,
												  `ldap_exclusive` tinyint(1) NOT NULL DEFAULT '0',
												  `timezone` varchar(100) DEFAULT NULL,
												  PRIMARY KEY (`id`)
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function populate_ap_settings_table($dbh,$options){
		$default_from_email = $options['default_from_email'];
		$machform_base_url  = $options['machform_base_url'];
		$new_machform_version = $options['new_machform_version'];
		$license_key = $options['license_key'];

		$query = "INSERT INTO `".MF_TABLE_PREFIX."settings` (`id`, 
																`smtp_enable`, 
																`smtp_host`, 
																`smtp_port`, 
																`smtp_auth`, 
																`smtp_username`, 
																`smtp_password`, 
																`smtp_secure`, 
																`upload_dir`, 
																`data_dir`, 
																`default_from_name`, 
																`default_from_email`, 
																`base_url`, 
																`form_manager_max_rows`, 
																`admin_image_url`, 
																`disable_machform_link`,
																`license_key`,
																`machform_version`)
														VALUES
																(1,
																 0,
																'localhost',
																25,
																0,
																'',
																'',
																0,
																'./data',
																'./data',
																'MachForm',
																'{$default_from_email}',
																'{$machform_base_url}',
																10,
																'',
																0,
																'{$license_key}',
																'{$new_machform_version}');";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_users_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."users` (
												   	  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
													  `user_email` varchar(255) NOT NULL DEFAULT '',
													  `user_password` varchar(255) NOT NULL DEFAULT '',
													  `user_fullname` varchar(255) NOT NULL DEFAULT '',
													  `reset_hash` varchar(100) DEFAULT NULL,
  													  `reset_date` datetime DEFAULT NULL,
													  `priv_administer` tinyint(1) NOT NULL DEFAULT '0',
													  `priv_new_forms` tinyint(1) NOT NULL DEFAULT '0',
													  `priv_new_themes` tinyint(1) NOT NULL DEFAULT '0',
													  `last_login_date` datetime DEFAULT NULL,
													  `last_ip_address` varchar(15) DEFAULT '',
													  `login_attempt_date` datetime DEFAULT NULL,
													  `login_attempt_count` int(11) NOT NULL DEFAULT '0',
													  `cookie_hash` varchar(255) DEFAULT '',
													  `tsv_enable` int(1) NOT NULL DEFAULT '0',
													  `tsv_secret` varchar(16) DEFAULT NULL,
													  `tsv_code_log` varchar(100) DEFAULT NULL,
													  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 - deleted; 1 - active; 2 - suspended',
													  PRIMARY KEY (`user_id`)
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function populate_ap_users_table($dbh,$options){

		$admin_username 	   = $options['admin_username'];
		$default_password_hash = $options['default_password_hash'];

		$query = "INSERT INTO `".MF_TABLE_PREFIX."users` (`user_id`, 
																`user_email`, 
																`user_password`, 
																`user_fullname`, 
																`priv_administer`, 
																`priv_new_forms`, 
																`priv_new_themes`, 
																`status`)
														VALUES
																(1,
																'{$admin_username}',
																'{$default_password_hash}',
																'Administrator',
																1,
																1,
																1,
																1);";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_permissions_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."permissions` (
												  `form_id` bigint(11) unsigned NOT NULL,
												  `user_id` int(11) unsigned NOT NULL,
												  `edit_form` tinyint(1) NOT NULL DEFAULT '0',
												  `edit_report` tinyint(1) NOT NULL DEFAULT '0',
												  `edit_entries` tinyint(1) NOT NULL DEFAULT '0',
												  `view_entries` tinyint(1) NOT NULL DEFAULT '0',
												  PRIMARY KEY (`form_id`,`user_id`)
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_entries_preferences_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."entries_preferences` (
												      `form_id` int(11) NOT NULL,
													  `user_id` int(11) NOT NULL,
													  `entries_sort_by` varchar(100) NOT NULL DEFAULT 'id-desc',
													  `entries_enable_filter` int(1) NOT NULL DEFAULT '0',
													  `entries_filter_type` varchar(5) NOT NULL DEFAULT 'all' COMMENT 'all or any',
													  `entries_incomplete_sort_by` varchar(100) NOT NULL DEFAULT 'id-desc',
													  `entries_incomplete_enable_filter` int(1) NOT NULL DEFAULT '0',
													  `entries_incomplete_filter_type` varchar(5) NOT NULL DEFAULT 'all' COMMENT 'all or any'
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}
	
	function create_ap_form_locks_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_locks` (
												  `form_id` int(11) NOT NULL,
												  `user_id` int(11) NOT NULL,
												  `lock_date` datetime NOT NULL
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_field_logic_elements_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."field_logic_elements` (
																		  `form_id` int(11) NOT NULL,
																		  `element_id` int(11) NOT NULL,
																		  `rule_show_hide` varchar(4) NOT NULL DEFAULT 'show',
																		  `rule_all_any` varchar(3) NOT NULL DEFAULT 'all',
																		  PRIMARY KEY (`form_id`,`element_id`)
																		) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_field_logic_conditions_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."field_logic_conditions` (
																		  `alc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
																		  `form_id` int(11) NOT NULL,
																		  `target_element_id` int(11) NOT NULL,
																		  `element_name` varchar(50) NOT NULL DEFAULT '',
																		  `rule_condition` varchar(15) NOT NULL DEFAULT 'is',
																		  `rule_keyword` varchar(255) DEFAULT NULL,
																		  PRIMARY KEY (`alc_id`),
																		  KEY `form_id` (`form_id`,`target_element_id`)
																		) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_form_payments_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_payments` (
																  `afp_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
																  `form_id` int(11) unsigned NOT NULL,
																  `record_id` int(11) unsigned NOT NULL,
																  `payment_id` varchar(255) DEFAULT NULL,
																  `date_created` datetime DEFAULT NULL,
																  `payment_date` datetime DEFAULT NULL,
																  `payment_status` varchar(255) DEFAULT NULL,
																  `payment_fullname` varchar(255) DEFAULT NULL,
																  `payment_amount` decimal(62,2) NOT NULL DEFAULT '0.00',
																  `payment_currency` varchar(3) NOT NULL DEFAULT 'usd',
																  `payment_test_mode` int(1) NOT NULL DEFAULT '0',
																  `payment_merchant_type` varchar(25) DEFAULT NULL,
																  `status` int(1) NOT NULL DEFAULT '1',
																  `billing_street` varchar(255) DEFAULT NULL,
																  `billing_city` varchar(255) DEFAULT NULL,
																  `billing_state` varchar(255) DEFAULT NULL,
																  `billing_zipcode` varchar(255) DEFAULT NULL,
																  `billing_country` varchar(255) DEFAULT NULL,
																  `same_shipping_address` int(1) NOT NULL DEFAULT '1',
																  `shipping_street` varchar(255) DEFAULT NULL,
																  `shipping_city` varchar(255) DEFAULT NULL,
																  `shipping_state` varchar(255) DEFAULT NULL,
																  `shipping_zipcode` varchar(255) DEFAULT NULL,
																  `shipping_country` varchar(255) DEFAULT NULL,
																   PRIMARY KEY (`afp_id`),
																   KEY `form_id` (`form_id`,`record_id`)
																  ) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_page_logic_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."page_logic` (
																`form_id` int(11) NOT NULL,
															  	`page_id` varchar(15) NOT NULL DEFAULT '',
															  	`rule_all_any` varchar(3) NOT NULL DEFAULT 'all',
															  	 PRIMARY KEY (`form_id`,`page_id`)
															   ) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_page_logic_conditions_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."page_logic_conditions` (
																		   `apc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
																		   `form_id` int(11) NOT NULL,
																		   `target_page_id` varchar(15) NOT NULL DEFAULT '',
																		   `element_name` varchar(50) NOT NULL DEFAULT '',
																		   `rule_condition` varchar(15) NOT NULL DEFAULT 'is',
																		   `rule_keyword` varchar(255) DEFAULT NULL,
																		    PRIMARY KEY (`apc_id`),
																		    KEY `form_id` (`form_id`,`target_page_id`)
															   			  ) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_form_sorts_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_sorts` (
												  `user_id` int(11) NOT NULL,
												  `sort_by` varchar(25) DEFAULT '',
												  PRIMARY KEY (`user_id`)
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_email_logic_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."email_logic` (
												    		      `form_id` int(11) NOT NULL,
																  `rule_id` int(11) NOT NULL,
																  `rule_all_any` varchar(3) NOT NULL DEFAULT 'all',
																  `target_email` text NOT NULL,
																  `template_name` varchar(15) NOT NULL DEFAULT 'notification' COMMENT 'notification - confirmation - custom',
																  `custom_from_name` text,
																  `custom_from_email` varchar(255) NOT NULL DEFAULT '',
																  `custom_replyto_email` varchar(255) NOT NULL DEFAULT '',
																  `custom_subject` text,
																  `custom_bcc` text,
																  `custom_content` text,
																  `custom_plain_text` int(1) NOT NULL DEFAULT '0',
																  `custom_pdf_enable` int(1) NOT NULL DEFAULT '0',
																  `custom_pdf_content` text,
																  `delay_notification_until_paid` int(1) NOT NULL DEFAULT '0',
																  PRIMARY KEY (`form_id`,`rule_id`)
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_email_logic_conditions_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."email_logic_conditions` (
												    		  `aec_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `target_rule_id` int(11) NOT NULL,
															  `element_name` varchar(50) NOT NULL DEFAULT '',
															  `rule_condition` varchar(15) NOT NULL DEFAULT 'is',
															  `rule_keyword` varchar(255) DEFAULT NULL,
															  PRIMARY KEY (`aec_id`),
															  KEY `form_id` (`form_id`,`target_rule_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_webhook_options_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."webhook_options` (
												    		  `awo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `rule_id` int(11) NOT NULL DEFAULT '0',
															  `rule_all_any` varchar(3) NOT NULL DEFAULT 'all',
															  `webhook_url` text,
															  `webhook_method` varchar(4) NOT NULL DEFAULT 'post',
															  `webhook_format` varchar(10) NOT NULL DEFAULT 'key-value',
															  `webhook_raw_data` mediumtext,
															  `enable_http_auth` int(1) DEFAULT '0',
															  `http_username` varchar(255) DEFAULT NULL,
															  `http_password` varchar(255) DEFAULT NULL,
															  `enable_custom_http_headers` int(1) NOT NULL DEFAULT '0',
															  `custom_http_headers` text,
															  `delay_notification_until_paid` int(1) NOT NULL DEFAULT '0',
															  PRIMARY KEY (`awo_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_webhook_parameters_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."webhook_parameters` (
												    		  `awp_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `rule_id` int(11) NOT NULL DEFAULT '0',
															  `param_name` text,
															  `param_value` text,
															  PRIMARY KEY (`awp_id`),
															  KEY `form_id` (`form_id`,`rule_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_webhook_logic_conditions_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."webhook_logic_conditions` (
												    		  `wlc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `target_rule_id` int(11) NOT NULL,
															  `element_name` varchar(50) NOT NULL DEFAULT '',
															  `rule_condition` varchar(15) NOT NULL DEFAULT 'is',
															  `rule_keyword` varchar(255) DEFAULT NULL,
															  PRIMARY KEY (`wlc_id`),
															  KEY `form_id` (`form_id`,`target_rule_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_reports_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."reports` (
												    		  `form_id` int(11) NOT NULL,
															  `report_access_key` varchar(100) DEFAULT NULL,
															  PRIMARY KEY (`form_id`),
															  KEY `report_access_key` (`report_access_key`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_report_elements_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."report_elements` (
												    		  `access_key` varchar(100) DEFAULT NULL,
															  `form_id` int(11) NOT NULL,
															  `chart_id` int(11) NOT NULL,
															  `chart_position` int(11) NOT NULL DEFAULT '0',
															  `chart_status` int(1) NOT NULL DEFAULT '1',
															  `chart_datasource` varchar(25) NOT NULL DEFAULT '',
															  `chart_type` varchar(25) NOT NULL DEFAULT '',
															  `chart_enable_filter` int(1) NOT NULL DEFAULT '0',
															  `chart_filter_type` varchar(5) NOT NULL DEFAULT 'all',
															  `chart_title` text,
															  `chart_title_position` varchar(10) NOT NULL DEFAULT 'top',
															  `chart_title_align` varchar(10) NOT NULL DEFAULT 'center',
															  `chart_width` int(11) NOT NULL DEFAULT '0',
															  `chart_height` int(11) NOT NULL DEFAULT '400',
															  `chart_background` varchar(8) DEFAULT NULL,
															  `chart_theme` varchar(25) NOT NULL DEFAULT 'blueopal',
															  `chart_legend_visible` int(1) NOT NULL DEFAULT '1',
															  `chart_legend_position` varchar(10) NOT NULL DEFAULT 'right',
															  `chart_labels_visible` int(1) NOT NULL DEFAULT '1',
															  `chart_labels_position` varchar(10) NOT NULL DEFAULT 'outsideEnd',
															  `chart_labels_template` varchar(255) NOT NULL DEFAULT '#= category #',
															  `chart_labels_align` varchar(10) NOT NULL DEFAULT 'circle',
															  `chart_tooltip_visible` int(1) NOT NULL DEFAULT '1',
															  `chart_tooltip_template` varchar(255) NOT NULL DEFAULT '#= category # - #= dataItem.entry # - #= kendo.format(''{0:P}'', percentage)#',
															  `chart_gridlines_visible` int(1) NOT NULL DEFAULT '1',
															  `chart_bar_color` varchar(8) DEFAULT NULL,
															  `chart_is_stacked` int(1) NOT NULL DEFAULT '0',
															  `chart_is_vertical` int(1) NOT NULL DEFAULT '0',
															  `chart_line_style` varchar(6) NOT NULL DEFAULT 'smooth',
															  `chart_axis_is_date` int(1) NOT NULL DEFAULT '0',
															  `chart_date_range` varchar(6) NOT NULL DEFAULT 'all' COMMENT 'all,period,custom',
															  `chart_date_period_value` int(11) NOT NULL DEFAULT '1',
															  `chart_date_period_unit` varchar(5) NOT NULL DEFAULT 'day',
															  `chart_date_axis_baseunit` varchar(5) DEFAULT NULL,
															  `chart_date_range_start` date DEFAULT NULL,
															  `chart_date_range_end` date DEFAULT NULL,
															  `chart_grid_page_size` int(11) NOT NULL DEFAULT '10',
															  `chart_grid_max_length` int(11) NOT NULL DEFAULT '100',
															  `chart_grid_sort_by` varchar(100) NOT NULL DEFAULT 'id-desc',
															  PRIMARY KEY (`form_id`,`chart_id`),
															  KEY `access_key` (`access_key`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_report_filters_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."report_filters` (
												    		  `arf_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `chart_id` int(11) NOT NULL,
															  `element_name` varchar(50) NOT NULL DEFAULT '',
															  `filter_condition` varchar(15) NOT NULL DEFAULT 'is',
															  `filter_keyword` varchar(255) DEFAULT NULL,
															  PRIMARY KEY (`arf_id`),
															  KEY `form_id` (`form_id`,`chart_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_grid_columns_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."grid_columns` (
												    		  `agc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `chart_id` int(11) NOT NULL,
															  `element_name` varchar(255) NOT NULL DEFAULT '',
															  `position` int(11) NOT NULL,
															  PRIMARY KEY (`agc_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_success_logic_conditions_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."success_logic_conditions` (
												    		  `slc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `target_rule_id` int(11) NOT NULL,
															  `element_name` varchar(50) NOT NULL DEFAULT '',
															  `rule_condition` varchar(15) NOT NULL DEFAULT 'is',
															  `rule_keyword` varchar(255) DEFAULT NULL,
															  PRIMARY KEY (`slc_id`),
															  KEY `form_id` (`form_id`,`target_rule_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_success_logic_options_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."success_logic_options` (
												    		  `slo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `rule_id` int(11) NOT NULL DEFAULT '0',
															  `rule_all_any` varchar(3) NOT NULL DEFAULT 'all',
															  `success_type` varchar(11) NOT NULL DEFAULT 'message' COMMENT 'message;redirect',
															  `success_message` text,
															  `redirect_url` text,
															  PRIMARY KEY (`slo_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	function create_ap_form_themes_files_table($dbh){
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_themes_files` (
												    		  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `file_name` text NOT NULL,
															  `file_content` longblob,
															  PRIMARY KEY (`id`),
															  KEY `file_name` (`file_name`(255))
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			return $e->getMessage().'<br/><br/>';
		}

		return '';
	}

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	function do_delta_update_2_x_to_3_0($dbh,$options=array()){

		$post_install_error = '';
		$license_key 		  = $options['license_key'];
		$new_machform_version = $options['new_machform_version'];
		$admin_username		  = $options['admin_username'];
		
		//1. Backup the old database
		if(SKIP_DB_BACKUP !== true){
			$db_backup = new DBBackup(array(
						'driver' => 'mysql',
						'host' => MF_DB_HOST,
						'user' => MF_DB_USER,
						'password' => MF_DB_PASSWORD,
						'database' => MF_DB_NAME
			));

			$backup_data = $db_backup->backup();
					
			if(!$backup['error']){
				$fpc_result = file_put_contents('./data/machform2_backup.sql.php',"<?php\n".$backup_data['msg']."\n?>");
			} else {
				echo 'An error has ocurred during database backup.';
			}

			unset($db_backup);
			unset($backup_data);
		}

		//2. Alter table ap_forms
		//add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."forms`
												  ADD COLUMN `form_tags` varchar(255) DEFAULT NULL,
												  ADD COLUMN `form_redirect_enable` int(1) NOT NULL DEFAULT '0',
												  ADD COLUMN `form_captcha_type` char(1) NOT NULL DEFAULT 'r',
												  ADD COLUMN `form_theme_id` int(11) NOT NULL DEFAULT '0',
												  ADD COLUMN `form_resume_enable` int(1) NOT NULL DEFAULT '0',
												  ADD COLUMN `form_limit_enable` int(1) NOT NULL DEFAULT '0',
												  ADD COLUMN `form_limit` int(11) NOT NULL DEFAULT '0',
												  ADD COLUMN `form_label_alignment` varchar(11) NOT NULL DEFAULT 'top_label',
												  ADD COLUMN `form_language` varchar(50) DEFAULT NULL,
												  ADD COLUMN `form_page_total` int(11) NOT NULL DEFAULT '1',
												  ADD COLUMN `form_lastpage_title` varchar(255) DEFAULT NULL,
												  ADD COLUMN `form_submit_primary_text` varchar(255) NOT NULL DEFAULT 'Submit',
												  ADD COLUMN `form_submit_secondary_text` varchar(255) NOT NULL DEFAULT 'Previous',
												  ADD COLUMN `form_submit_primary_img` varchar(255) DEFAULT NULL,
												  ADD COLUMN `form_submit_secondary_img` varchar(255) DEFAULT NULL,
												  ADD COLUMN `form_submit_use_image` int(1) NOT NULL DEFAULT '0',
												  ADD COLUMN `form_review_primary_text` varchar(255) NOT NULL DEFAULT 'Submit',
												  ADD COLUMN `form_review_secondary_text` varchar(255) NOT NULL DEFAULT 'Previous',
												  ADD COLUMN `form_review_primary_img` varchar(255) DEFAULT NULL,
												  ADD COLUMN `form_review_secondary_img` varchar(255) DEFAULT NULL,
												  ADD COLUMN `form_review_use_image` int(11) NOT NULL DEFAULT '0',
												  ADD COLUMN `form_review_title` text,
												  ADD COLUMN `form_review_description` text,
												  ADD COLUMN `form_pagination_type` varchar(11) NOT NULL DEFAULT 'steps',
												  ADD COLUMN `form_schedule_enable` int(1) NOT NULL DEFAULT '0',
												  ADD COLUMN `form_schedule_start_date` date DEFAULT NULL,
												  ADD COLUMN `form_schedule_end_date` date DEFAULT NULL,
												  ADD COLUMN `form_schedule_start_hour` time DEFAULT NULL,
												  ADD COLUMN `form_schedule_end_hour` time DEFAULT NULL,
												  ADD COLUMN `esl_enable` tinyint(1) NOT NULL DEFAULT '0',
												  ADD COLUMN `esr_enable` tinyint(1) NOT NULL DEFAULT '0',
												  ADD COLUMN `payment_enable_merchant` int(1) NOT NULL DEFAULT '-1',
												  ADD COLUMN `payment_merchant_type` varchar(25) NOT NULL DEFAULT 'paypal_standard',
												  ADD COLUMN `payment_paypal_email` varchar(255) DEFAULT NULL,
												  ADD COLUMN `payment_paypal_language` varchar(5) NOT NULL DEFAULT 'US',
												  ADD COLUMN `payment_currency` varchar(5) NOT NULL DEFAULT 'USD',
												  ADD COLUMN `payment_show_total` int(1) NOT NULL DEFAULT '0',
												  ADD COLUMN `payment_total_location` varchar(11) NOT NULL DEFAULT 'top',
												  ADD COLUMN `payment_enable_recurring` int(1) NOT NULL DEFAULT '0',
												  ADD COLUMN `payment_recurring_cycle` int(11) NOT NULL DEFAULT '1',
												  ADD COLUMN `payment_recurring_unit` varchar(5) NOT NULL DEFAULT 'month',
												  ADD COLUMN `payment_price_type` varchar(11) NOT NULL DEFAULT 'fixed',
												  ADD COLUMN `payment_price_amount` decimal(62,2) NOT NULL DEFAULT '0.00',
												  ADD COLUMN `payment_price_name` varchar(255) DEFAULT NULL,
												  ADD COLUMN `entries_sort_by` varchar(100) NOT NULL DEFAULT 'id-desc',
												  ADD COLUMN `entries_enable_filter` int(1) NOT NULL DEFAULT '0',
												  ADD COLUMN `entries_filter_type` varchar(5) NOT NULL DEFAULT 'all' COMMENT 'all or any';";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//3. Alter table ap_form_elements
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_elements` 
														  ADD COLUMN `element_css_class` varchar(255) NOT NULL DEFAULT '',
														  ADD COLUMN `element_range_min` bigint(11) unsigned NOT NULL DEFAULT '0',
														  ADD COLUMN `element_range_max` bigint(11) unsigned NOT NULL DEFAULT '0',
														  ADD COLUMN `element_range_limit_by` char(1) NOT NULL,
														  ADD COLUMN `element_status` int(1) NOT NULL DEFAULT '2',
														  ADD COLUMN `element_choice_columns` int(1) NOT NULL DEFAULT '1',
														  ADD COLUMN `element_choice_has_other` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_choice_other_label` text,
														  ADD COLUMN `element_time_showsecond` int(11) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_time_24hour` int(11) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_address_hideline2` int(11) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_address_us_only` int(11) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_date_enable_range` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_date_range_min` date DEFAULT NULL,
														  ADD COLUMN `element_date_range_max` date DEFAULT NULL,
														  ADD COLUMN `element_date_enable_selection_limit` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_date_selection_max` int(11) NOT NULL DEFAULT '1',
														  ADD COLUMN `element_date_past_future` char(1) NOT NULL DEFAULT 'p',
														  ADD COLUMN `element_date_disable_past_future` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_date_disable_weekend` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_date_disable_specific` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_date_disabled_list` text CHARACTER SET utf8 COLLATE utf8_bin,
														  ADD COLUMN `element_file_enable_type_limit` int(1) NOT NULL DEFAULT '1',
														  ADD COLUMN `element_file_block_or_allow` char(1) NOT NULL DEFAULT 'b',
														  ADD COLUMN `element_file_type_list` varchar(255) DEFAULT NULL,
														  ADD COLUMN `element_file_as_attachment` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_file_enable_advance` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_file_auto_upload` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_file_enable_multi_upload` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_file_max_selection` int(11) NOT NULL DEFAULT '5',
														  ADD COLUMN `element_file_enable_size_limit` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_file_size_max` int(11) DEFAULT NULL,
														  ADD COLUMN `element_matrix_allow_multiselect` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_matrix_parent_id` int(11) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_submit_use_image` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_submit_primary_text` varchar(255) NOT NULL DEFAULT 'Continue',
														  ADD COLUMN `element_submit_secondary_text` varchar(255) NOT NULL DEFAULT 'Previous',
														  ADD COLUMN `element_submit_primary_img` varchar(255) DEFAULT NULL,
														  ADD COLUMN `element_submit_secondary_img` varchar(255) DEFAULT NULL,
														  ADD COLUMN `element_page_title` varchar(255) DEFAULT NULL,
														  ADD COLUMN `element_page_number` int(11) NOT NULL DEFAULT '1';";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//change the field size of element_constraint
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_elements` CHANGE COLUMN `element_constraint` `element_constraint` varchar(255) DEFAULT NULL;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//update the element_status value to 1
		$query = "UPDATE `".MF_TABLE_PREFIX."form_elements` SET `element_status`=1";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//4. Create table ap_element_prices
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."element_prices` (
													  `aep_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
													  `form_id` int(11) NOT NULL,
													  `element_id` int(11) NOT NULL,
													  `option_id` int(11) NOT NULL DEFAULT '0',
													  `price` decimal(62,2) NOT NULL DEFAULT '0.00',
													  PRIMARY KEY (`aep_id`),
													  KEY `form_id` (`form_id`),
													  KEY `element_id` (`element_id`)
													) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//5. Create table ap_fonts
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."fonts` (
												  `font_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
												  `font_origin` varchar(11) NOT NULL DEFAULT 'google',
												  `font_family` varchar(100) DEFAULT NULL,
												  `font_variants` text,
												  `font_variants_numeric` text,
												  PRIMARY KEY (`font_id`),
												  KEY `font_family` (`font_family`)
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		

		//6. Create table ap_form_filters
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_filters` (
														  `aff_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
														  `form_id` int(11) NOT NULL,
														  `element_name` varchar(50) NOT NULL DEFAULT '',
														  `filter_condition` varchar(15) NOT NULL DEFAULT 'is',
														  `filter_keyword` varchar(255) NOT NULL DEFAULT '',
														  PRIMARY KEY (`aff_id`),
														  KEY `form_id` (`form_id`)
														) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//7. Create table ap_form_themes
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_themes` (
													  `theme_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
													  `status` int(1) DEFAULT '1',
													  `theme_has_css` int(1) NOT NULL DEFAULT '0',
													  `theme_name` varchar(255) DEFAULT '',
													  `theme_built_in` int(1) NOT NULL DEFAULT '0',
													  `logo_type` varchar(11) NOT NULL DEFAULT 'default' COMMENT 'default,custom,disabled',
													  `logo_custom_image` text,
													  `logo_custom_height` int(11) NOT NULL DEFAULT '40',
													  `logo_default_image` varchar(50) DEFAULT '',
													  `logo_default_repeat` int(1) NOT NULL DEFAULT '0',
													  `wallpaper_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
													  `wallpaper_bg_color` varchar(11) DEFAULT '',
													  `wallpaper_bg_pattern` varchar(50) DEFAULT '',
													  `wallpaper_bg_custom` text,
													  `header_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
													  `header_bg_color` varchar(11) DEFAULT '',
													  `header_bg_pattern` varchar(50) DEFAULT '',
													  `header_bg_custom` text,
													  `form_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
													  `form_bg_color` varchar(11) DEFAULT '',
													  `form_bg_pattern` varchar(50) DEFAULT '',
													  `form_bg_custom` text,
													  `highlight_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
													  `highlight_bg_color` varchar(11) DEFAULT '',
													  `highlight_bg_pattern` varchar(50) DEFAULT '',
													  `highlight_bg_custom` text,
													  `guidelines_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
													  `guidelines_bg_color` varchar(11) DEFAULT '',
													  `guidelines_bg_pattern` varchar(50) DEFAULT '',
													  `guidelines_bg_custom` text,
													  `field_bg_type` varchar(11) NOT NULL DEFAULT 'color' COMMENT 'color,pattern,custom',
													  `field_bg_color` varchar(11) DEFAULT '',
													  `field_bg_pattern` varchar(50) DEFAULT '',
													  `field_bg_custom` text,
													  `form_title_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
													  `form_title_font_weight` int(11) NOT NULL DEFAULT '400',
													  `form_title_font_style` varchar(25) NOT NULL DEFAULT 'normal',
													  `form_title_font_size` varchar(11) DEFAULT '',
													  `form_title_font_color` varchar(11) DEFAULT '',
													  `form_desc_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
													  `form_desc_font_weight` int(11) NOT NULL DEFAULT '400',
													  `form_desc_font_style` varchar(25) NOT NULL DEFAULT 'normal',
													  `form_desc_font_size` varchar(11) DEFAULT '',
													  `form_desc_font_color` varchar(11) DEFAULT '',
													  `field_title_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
													  `field_title_font_weight` int(11) NOT NULL DEFAULT '400',
													  `field_title_font_style` varchar(25) NOT NULL DEFAULT 'normal',
													  `field_title_font_size` varchar(11) DEFAULT '',
													  `field_title_font_color` varchar(11) DEFAULT '',
													  `guidelines_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
													  `guidelines_font_weight` int(11) NOT NULL DEFAULT '400',
													  `guidelines_font_style` varchar(25) NOT NULL DEFAULT 'normal',
													  `guidelines_font_size` varchar(11) DEFAULT '',
													  `guidelines_font_color` varchar(11) DEFAULT '',
													  `section_title_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
													  `section_title_font_weight` int(11) NOT NULL DEFAULT '400',
													  `section_title_font_style` varchar(25) NOT NULL DEFAULT 'normal',
													  `section_title_font_size` varchar(11) DEFAULT '',
													  `section_title_font_color` varchar(11) DEFAULT '',
													  `section_desc_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
													  `section_desc_font_weight` int(11) NOT NULL DEFAULT '400',
													  `section_desc_font_style` varchar(25) NOT NULL DEFAULT 'normal',
													  `section_desc_font_size` varchar(11) DEFAULT '',
													  `section_desc_font_color` varchar(11) DEFAULT '',
													  `field_text_font_type` varchar(50) NOT NULL DEFAULT 'Lucida Grande',
													  `field_text_font_weight` int(11) NOT NULL DEFAULT '400',
													  `field_text_font_style` varchar(25) NOT NULL DEFAULT 'normal',
													  `field_text_font_size` varchar(11) DEFAULT '',
													  `field_text_font_color` varchar(11) DEFAULT '',
													  `border_form_width` int(11) NOT NULL DEFAULT '1',
													  `border_form_style` varchar(11) NOT NULL DEFAULT 'solid',
													  `border_form_color` varchar(11) DEFAULT '',
													  `border_guidelines_width` int(11) NOT NULL DEFAULT '1',
													  `border_guidelines_style` varchar(11) NOT NULL DEFAULT 'solid',
													  `border_guidelines_color` varchar(11) DEFAULT '',
													  `border_section_width` int(11) NOT NULL DEFAULT '1',
													  `border_section_style` varchar(11) NOT NULL DEFAULT 'solid',
													  `border_section_color` varchar(11) DEFAULT '',
													  `form_shadow_style` varchar(25) NOT NULL DEFAULT 'WarpShadow',
													  `form_shadow_size` varchar(11) NOT NULL DEFAULT 'large',
													  `form_shadow_brightness` varchar(11) NOT NULL DEFAULT 'normal',
													  `form_button_type` varchar(11) NOT NULL DEFAULT 'text',
													  `form_button_text` varchar(100) NOT NULL DEFAULT 'Submit',
													  `form_button_image` text,
													  `advanced_css` text,
													  PRIMARY KEY (`theme_id`),
													  KEY `theme_name` (`theme_name`)
													) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//insert into ap_form_themes table
		$query = "INSERT INTO `".MF_TABLE_PREFIX."form_themes` (`theme_id`, `status`, `theme_has_css`, `theme_name`, `theme_built_in`, `logo_type`, `logo_custom_image`, `logo_custom_height`, `logo_default_image`, `logo_default_repeat`, `wallpaper_bg_type`, `wallpaper_bg_color`, `wallpaper_bg_pattern`, `wallpaper_bg_custom`, `header_bg_type`, `header_bg_color`, `header_bg_pattern`, `header_bg_custom`, `form_bg_type`, `form_bg_color`, `form_bg_pattern`, `form_bg_custom`, `highlight_bg_type`, `highlight_bg_color`, `highlight_bg_pattern`, `highlight_bg_custom`, `guidelines_bg_type`, `guidelines_bg_color`, `guidelines_bg_pattern`, `guidelines_bg_custom`, `field_bg_type`, `field_bg_color`, `field_bg_pattern`, `field_bg_custom`, `form_title_font_type`, `form_title_font_weight`, `form_title_font_style`, `form_title_font_size`, `form_title_font_color`, `form_desc_font_type`, `form_desc_font_weight`, `form_desc_font_style`, `form_desc_font_size`, `form_desc_font_color`, `field_title_font_type`, `field_title_font_weight`, `field_title_font_style`, `field_title_font_size`, `field_title_font_color`, `guidelines_font_type`, `guidelines_font_weight`, `guidelines_font_style`, `guidelines_font_size`, `guidelines_font_color`, `section_title_font_type`, `section_title_font_weight`, `section_title_font_style`, `section_title_font_size`, `section_title_font_color`, `section_desc_font_type`, `section_desc_font_weight`, `section_desc_font_style`, `section_desc_font_size`, `section_desc_font_color`, `field_text_font_type`, `field_text_font_weight`, `field_text_font_style`, `field_text_font_size`, `field_text_font_color`, `border_form_width`, `border_form_style`, `border_form_color`, `border_guidelines_width`, `border_guidelines_style`, `border_guidelines_color`, `border_section_width`, `border_section_style`, `border_section_color`, `form_shadow_style`, `form_shadow_size`, `form_shadow_brightness`, `form_button_type`, `form_button_text`, `form_button_image`, `advanced_css`)
	VALUES
		(1,1,0,'Green Senegal',1,'default','http://',40,'machform.png',0,'color','#cfdfc5','','','color','#bad4a9','','','color','#ffffff','','','color','#ecf1ea','','','color','#ecf1ea','','','color','#cfdfc5','','','Philosopher',700,'normal','','#80af1b','Philosopher',400,'normal','100%','#80af1b','Philosopher',700,'normal','110%','#80af1b','Ubuntu',400,'normal','','#666666','Philosopher',700,'normal','110%','#80af1b','Philosopher',400,'normal','95%','#80af1b','Ubuntu',400,'normal','','#666666',1,'solid','#bad4a9',1,'dashed','#bad4a9',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(2,1,0,'Blue Bigbird',1,'default','http://',40,'machform.png',0,'color','#336699','','','color','#6699cc','','','color','#ffffff','','','color','#ccdced','','','color','#6699cc','','','color','#ffffff','','','Open Sans',600,'normal','','','Open Sans',400,'normal','','','Open Sans',700,'normal','100%','','Ubuntu',400,'normal','80%','#ffffff','Open Sans',600,'normal','','','Open Sans',400,'normal','95%','','Open Sans',400,'normal','','',1,'solid','#336699',1,'dotted','#6699cc',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(3,1,0,'Blue Pionus',1,'default','http://',40,'machform.png',0,'color','#556270','','','color','#6b7b8c','','','color','#ffffff','','','color','#99aec4','','','color','#6b7b8c','','','color','#ffffff','','','Istok Web',400,'normal','170%','','Maven Pro',400,'normal','100%','','Istok Web',700,'normal','100%','','Maven Pro',400,'normal','95%','#ffffff','Istok Web',400,'normal','110%','','Maven Pro',400,'normal','95%','','Maven Pro',400,'normal','','',1,'solid','#556270',1,'solid','#6b7b8c',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(4,1,0,'Brown Conure',1,'default','http://',40,'machform.png',0,'pattern','#948c75','pattern_036.gif','','color','#b3a783','','','color','#ffffff','','','color','#e0d0a2','','','color','#948c75','','','color','#f0f0d8','pattern_036.gif','','Molengo',400,'normal','170%','','Molengo',400,'normal','110%','','Molengo',400,'normal','110%','','Nobile',400,'normal','','#ececec','Molengo',400,'normal','130%','','Molengo',400,'normal','100%','','Molengo',400,'normal','110%','',1,'solid','#948c75',1,'solid','#948c75',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(5,1,0,'Yellow Lovebird',1,'default','http://',40,'machform.png',0,'color','#f0d878','','','color','#edb817','','','color','#ffffff','','','color','#f5d678','','','color','#f7c52e','','','color','#ffffff','','','Amaranth',700,'normal','170%','','Amaranth',400,'normal','100%','','Amaranth',700,'normal','100%','','Amaranth',400,'normal','','#444444','Amaranth',400,'normal','110%','','Amaranth',400,'normal','95%','','Amaranth',400,'normal','100%','',1,'solid','#f0d878',1,'solid','#f7c52e',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(6,1,0,'Pink Starling',1,'default','http://',40,'machform.png',0,'color','#ff6699','','','color','#d93280','','','color','#ffffff','','','color','#ffd0d4','','','color','#f9fad2','','','color','#ffffff','','','Josefin Sans',600,'normal','160%','','Josefin Sans',400,'normal','110%','','Josefin Sans',700,'normal','110%','','Josefin Sans',600,'normal','100%','','Josefin Sans',700,'normal','','','Josefin Sans',400,'normal','110%','','Josefin Sans',400,'normal','130%','',1,'solid','#ff6699',1,'dashed','#f56990',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(8,1,0,'Red Rabbit',1,'default','http://',40,'machform.png',0,'color','#a40802','','','color','#800e0e','','','color','#ffffff','','','color','#ffa4a0','','','color','#800e0e','','','color','#ffffff','','','Lobster',400,'normal','','#000000','Ubuntu',400,'normal','100%','#000000','Lobster',400,'normal','110%','#222222','Ubuntu',400,'normal','85%','#ffffff','Lobster',400,'normal','130%','#000000','Ubuntu',400,'normal','95%','#000000','Ubuntu',400,'normal','','#333333',1,'solid','#a40702',1,'solid','#800e0e',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(9,1,0,'Orange Robin',1,'default','http://',40,'machform.png',0,'color','#f38430','','','color','#fa6800','','','color','#ffffff','','','color','#a7dbd8','','','color','#e0e4cc','','','color','#ffffff','','','Lucida Grande',400,'normal','','#000000','Nobile',400,'normal','','#000000','Nobile',700,'normal','','#000000','Lucida Grande',400,'normal','','#444444','Nobile',700,'normal','100%','#000000','Nobile',400,'normal','','#000000','Nobile',400,'normal','95%','#333333',1,'solid','#f38430',1,'solid','#e0e4cc',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(10,1,0,'Orange Sunbird',1,'default','http://',40,'machform.png',0,'color','#d95c43','','','color','#c02942','','','color','#ffffff','','','color','#d95c43','','','color','#53777a','','','color','#ffffff','','','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#000000','Lucida Grande',700,'normal','','#222222','Lucida Grande',400,'normal','','#ffffff','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#000000','Lucida Grande',400,'normal','','#333333',1,'solid','#d95c43',1,'solid','#53777a',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(11,1,0,'Green Ringneck',1,'default','http://',40,'machform.png',0,'color','#0b486b','','','color','#3b8686','','','color','#ffffff','','','color','#cff09e','','','color','#79bd9a','','','color','#a8dba8','','','Delius Swash Caps',400,'normal','','#000000','Delius Swash Caps',400,'normal','100%','#000000','Delius Swash Caps',400,'normal','100%','#222222','Delius',400,'normal','85%','#ffffff','Delius Swash Caps',400,'normal','','#000000','Delius Swash Caps',400,'normal','95%','#000000','Delius',400,'normal','','#515151',1,'solid','#0b486b',1,'solid','#79bd9a',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(12,1,0,'Brown Finch',1,'default','http://',40,'machform.png',0,'color','#774f38','','','color','#e08e79','','','color','#ffffff','','','color','#ece5ce','','','color','#c5e0dc','','','color','#f9fad2','','','Arvo',700,'normal','','#000000','Arvo',400,'normal','','#000000','Arvo',700,'normal','','#222222','Arvo',400,'normal','','#444444','Arvo',400,'normal','','#000000','Arvo',400,'normal','85%','#000000','Arvo',400,'normal','','#333333',1,'solid','#774f38',1,'dashed','#e08e79',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(14,1,0,'Brown Macaw',1,'default','http://',40,'machform.png',0,'color','#413e4a','','','color','#73626e','','','pattern','#ffffff','pattern_022.gif','','color','#f0b49e','','','color','#b38184','','','color','#ffffff','','','Cabin',500,'normal','160%','#000000','Cabin',400,'normal','100%','#000000','Cabin',700,'normal','110%','#222222','Lucida Grande',400,'normal','','#ececec','Cabin',600,'normal','','#000000','Cabin',600,'normal','95%','#000000','Cabin',400,'normal','110%','#333333',1,'solid','#413e4a',1,'dotted','#ff9900',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(15,1,0,'Pink Thrush',1,'default','http://',40,'machform.png',0,'color','#ff9f9d','','','color','#ff3d7e','','','color','#ffffff','','','color','#7fc7af','','','color','#3fb8b0','','','color','#ffffff','','','Crafty Girls',400,'normal','','#000000','Crafty Girls',400,'normal','100%','#000000','Crafty Girls',400,'normal','100%','#222222','Nobile',400,'normal','80%','#ffffff','Crafty Girls',400,'normal','','#000000','Crafty Girls',400,'normal','95%','#000000','Molengo',400,'normal','110%','#333333',1,'solid','#ff9f9d',1,'solid','#3fb8b0',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(16,1,0,'Yellow Bulbul',1,'default','http://',40,'machform.png',0,'color','#f8f4d7','','','color','#f4b26c','','','color','#f4dec2','','','color','#f2b4a7','','','color','#e98976','','','color','#ffffff','','','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','95%','#222222','Cousine',400,'normal','80%','#ececec','Special Elite',400,'normal','','#000000','Special Elite',400,'normal','','#000000','Cousine',400,'normal','','#333333',1,'solid','#f8f4d7',1,'solid','#f4b26c',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(17,1,0,'Blue Canary',1,'default','http://',40,'machform.png',0,'color','#81a8b8','','','color','#a4bcc2','','','color','#ffffff','','','color','#e8f3f8','','','color','#dbe6ec','','','color','#ffffff','','','PT Sans',400,'normal','','#000000','PT Sans',400,'normal','100%','#000000','PT Sans',700,'normal','100%','#222222','PT Sans',400,'normal','','#666666','PT Sans',700,'normal','','#000000','PT Sans',400,'normal','100%','#000000','PT Sans',400,'normal','110%','#333333',1,'solid','#81a8b8',1,'dashed','#a4bcc2',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(18,1,0,'Red Mockingbird',1,'default','http://',40,'machform.png',0,'color','#6b0103','','','color','#a30005','','','color','#c21b01','','','color','#f03d02','','','color','#1c0113','','','color','#ffffff','','','Oswald',400,'normal','','#ffffff','Open Sans',400,'normal','','#ffffff','Oswald',400,'normal','95%','#ffffff','Open Sans',400,'normal','','#ececec','Oswald',400,'normal','','#ececec','Lucida Grande',400,'normal','','#ffffff','Open Sans',400,'normal','','#333333',1,'solid','#6b0103',1,'solid','#1c0113',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(13,1,0,'Green Sparrow',1,'default','http://',40,'machform.png',0,'color','#d1f2a5','','','color','#f56990','','','color','#ffffff','','','color','#ffc48c','','','color','#ffa080','','','color','#ffffff','','','Open Sans',400,'normal','','#000000','Open Sans',400,'normal','','#000000','Open Sans',700,'normal','','#222222','Ubuntu',400,'normal','85%','#f4fce8','Open Sans',600,'normal','','#000000','Open Sans',400,'normal','95%','#000000','Open Sans',400,'normal','','#333333',10,'solid','#f0fab4',1,'solid','#ffa080',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(21,1,0,'Purple Vanga',1,'default','http://',40,'machform.png',0,'color','#7b85e2','','','color','#7aa6d6','','','color','#d1e7f9','','','color','#7aa6d6','','','color','#fbfcd0','','','color','#ffffff','','','Droid Sans',400,'normal','160%','#444444','Droid Sans',400,'normal','95%','#444444','Open Sans',700,'normal','95%','#444444','Droid Sans',400,'normal','85%','#444444','Droid Sans',400,'normal','110%','#444444','Droid Sans',400,'normal','95%','#000000','Droid Sans',400,'normal','100%','#333333',0,'solid','#CCCCCC',1,'solid','#fbfcd0',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(22,1,0,'Purple Dove',1,'default','http://',40,'machform.png',0,'color','#c0addb','','','color','#a662de','','','pattern','#ffffff','pattern_044.gif','','color','#a662de','','','color','#a662de','','','color','#c0addb','','','Pacifico',400,'normal','180%','#000000','Open Sans',400,'normal','95%','#000000','Pacifico',400,'normal','95%','#222222','Open Sans',400,'normal','80%','#ececec','Pacifico',400,'normal','110%','#000000','Open Sans',400,'normal','95%','#000000','Open Sans',400,'normal','100%','#333333',0,'solid','#a662de',1,'dashed','#CCCCCC',1,'dashed','#a662de','StandShadow','large','dark','text','Submit','http://',''),
		(20,1,0,'Pink Flamingo',1,'default','http://',40,'machform.png',0,'color','#f87d7b','','','color','#5ea0a3','','','color','#ffffff','','','color','#fab97f','','','color','#dcd1b4','','','color','#ffffff','','','Lucida Grande',400,'normal','160%','#b05573','Lucida Grande',400,'normal','95%','#b05573','Lucida Grande',700,'normal','95%','#b05573','Lucida Grande',400,'normal','80%','#444444','Lucida Grande',400,'normal','110%','#b05573','Lucida Grande',400,'normal','85%','#b05573','Lucida Grande',400,'normal','100%','#333333',0,'solid','#f87d7b',1,'dotted','#fab97f',1,'dotted','#CCCCCC','WarpShadow','large','normal','text','Submit','http://',''),
		(19,1,0,'Yellow Kiwi',1,'default','http://',40,'machform.png',0,'color','#ffe281','','','color','#ffbb7f','','','color','#eee9e5','','','color','#fad4b2','','','color','#ff9c97','','','color','#ffffff','','','Lucida Grande',400,'normal','160%','#000000','Lucida Grande',400,'normal','95%','#000000','Lucida Grande',700,'normal','95%','#222222','Lucida Grande',400,'normal','80%','#ffffff','Lucida Grande',400,'normal','110%','#000000','Lucida Grande',400,'normal','85%','#000000','Lucida Grande',400,'normal','100%','#333333',1,'solid','#ffe281',1,'solid','#CCCCCC',1,'dotted','#cdcdcd','WarpShadow','large','normal','text','Submit','http://','');";
		
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//8. Create table ap_settings
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."settings` (
													  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
													  `smtp_enable` tinyint(1) NOT NULL DEFAULT '0',
													  `smtp_host` varchar(255) NOT NULL DEFAULT 'localhost',
													  `smtp_port` int(11) NOT NULL DEFAULT '25',
													  `smtp_auth` tinyint(1) NOT NULL DEFAULT '0',
													  `smtp_username` varchar(255) DEFAULT NULL,
													  `smtp_password` varchar(255) DEFAULT NULL,
													  `smtp_secure` tinyint(1) NOT NULL DEFAULT '0',
													  `upload_dir` varchar(255) NOT NULL DEFAULT './data',
													  `data_dir` varchar(255) NOT NULL DEFAULT './data',
													  `default_from_name` varchar(255) NOT NULL DEFAULT 'MachForm',
													  `default_from_email` varchar(255) DEFAULT NULL,
													  `base_url` varchar(255) DEFAULT NULL,
													  `form_manager_max_rows` int(11) DEFAULT '10',
													  `form_manager_sort_by` varchar(25) DEFAULT NULL,
													  `admin_login` varchar(255) NOT NULL DEFAULT '',
													  `admin_password` varchar(255) NOT NULL DEFAULT '',
													  `cookie_hash` varchar(25) DEFAULT NULL,
													  `admin_image_url` varchar(255) DEFAULT NULL,
													  `disable_machform_link` int(1) DEFAULT '0',
													  `customer_id` varchar(100) DEFAULT NULL,
													  `customer_name` varchar(100) DEFAULT NULL,
													  `license_key` varchar(50) DEFAULT NULL,
													  `machform_version` varchar(10) NOT NULL DEFAULT '3.3',
													  PRIMARY KEY (`id`)
													) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//9. Insert into ap_settings table
		$domain = str_replace('www.','',$_SERVER['SERVER_NAME']);
		$default_from_email = "no-reply@{$domain}";

		if(!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] != 'off')){
			$ssl_suffix = 's';
		}else if(isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https'){
            $ssl_suffix = 's';
        }else if (isset($_SERVER['HTTP_FRONT_END_HTTPS']) && $_SERVER['HTTP_FRONT_END_HTTPS'] == 'on'){
            $ssl_suffix = 's';
        }else{
			$ssl_suffix = '';
		}
		$machform_base_url = 'http'.$ssl_suffix.'://'.$_SERVER['HTTP_HOST'].rtrim(dirname($_SERVER['PHP_SELF']), '/\\').'/';

		$hasher = new PasswordHash(8, FALSE);
		$default_password_hash = $hasher->HashPassword('machform');

		$query = "INSERT INTO `".MF_TABLE_PREFIX."settings` (`id`, 
																	`smtp_enable`, 
																	`smtp_host`, 
																	`smtp_port`, 
																	`smtp_auth`, 
																	`smtp_username`, 
																	`smtp_password`, 
																	`smtp_secure`, 
																	`upload_dir`, 
																	`data_dir`, 
																	`default_from_name`, 
																	`default_from_email`, 
																	`base_url`, 
																	`form_manager_max_rows`, 
																	`form_manager_sort_by`, 
																	`admin_login`, 
																	`admin_password`, 
																	`cookie_hash`, 
																	`admin_image_url`, 
																	`disable_machform_link`,
																	`license_key`,
																	`machform_version`)
															VALUES
																	(1,
																	 0,
																	'localhost',
																	25,
																	0,
																	'',
																	'',
																	0,
																	'./data',
																	'./data',
																	'MachForm',
																	'{$default_from_email}',
																	'{$machform_base_url}',
																	10,
																	'date_created',
																	'{$admin_username}',
																	'{$default_password_hash}',
																	'',
																	'',
																	0,
																	'{$license_key}',
																	'{$new_machform_version}');";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//10. Loop through each form table and alter table structure
		$query = "select `form_id`,`form_email`,`esr_email_address`,`form_redirect` from ".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
				
		$email_enable_status_array = array();
		$redirect_enable_status_array = array();
		while($row = mf_do_fetch_result($sth)){
			$form_id = $row['form_id'];
			$form_id_array[] = $form_id;

			if(!empty($row['form_email'])){
				$email_enable_status_array[$form_id]['esl_enable'] = 1;
			}else{
				$email_enable_status_array[$form_id]['esl_enable'] = 0;
			}

			if(!empty($row['esr_email_address'])){
				$email_enable_status_array[$form_id]['esr_enable'] = 1;
			}else{
				$email_enable_status_array[$form_id]['esr_enable'] = 0;
			}

			if(!empty($row['form_redirect'])){
				$redirect_enable_status_array[$form_id] = 1;
			}else{
				$redirect_enable_status_array[$form_id] = 0;
			}
		}
				
		foreach ($form_id_array as $form_id) {
			//add new columns
			$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_{$form_id}`
													  ADD COLUMN `status` int(4) unsigned NOT NULL DEFAULT '1',
													  ADD COLUMN `resume_key` varchar(10) default NULL;";
			$params = array();
			$sth = $dbh->prepare($query);
			try{
				$sth->execute($params);
			}catch(PDOException $e) {
				$post_install_error .= $e->getMessage().'<br/><br/>';
			}

			$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_{$form_id}_review`
													  ADD COLUMN `status` int(4) unsigned NOT NULL DEFAULT '1',
													  ADD COLUMN `resume_key` varchar(10) default NULL;";
			$params = array();
			$sth = $dbh->prepare($query);
			try{
				$sth->execute($params);
			}catch(PDOException $e) {
				//do nothing, ignore if table review not exist
			}

			//update the esl_enable/esr_enable/redirect_enable
			$query = "UPDATE `".MF_TABLE_PREFIX."forms` SET esl_enable = ?,esr_enable = ?,form_redirect_enable = ? WHERE form_id = ?";
					
			$params = array($email_enable_status_array[$form_id]['esl_enable'],$email_enable_status_array[$form_id]['esr_enable'],$redirect_enable_status_array[$form_id],$form_id);
					
			$sth = $dbh->prepare($query);
			try{
				$sth->execute($params);
			}catch(PDOException $e) {
				$post_install_error .= $e->getMessage().'<br/><br/>';
			}
		}

		//11. Loop through each CSS file and create a theme for each form
				
		//first delete htaccess file if exist
		if(file_exists('./data/.htaccess')){
			@unlink('./data/.htaccess');
		}		
				
		//Create "themes" folder
		if(is_writable("./data")){
			$old_mask = umask(0);
			mkdir("./data/themes",0777);
			umask($old_mask);
		}

		foreach ($form_id_array as $form_id) {
			$advanced_css = '';

			if(file_exists("./data/form_{$form_id}/css/view.css")){
				rename("./data/form_{$form_id}/css/view.css", "./data/form_{$form_id}/css/view.old.css");

				//copy default view.css to css folder
				$old_mask = umask(0);
				if(copy("./view.css","./data/form_{$form_id}/css/view.css")){
					$form_has_css = 1;
				}else{
					$form_has_css = 0;
				}
				umask($old_mask);

				//update form_has_css value
				$query = "UPDATE ".MF_TABLE_PREFIX."forms set form_has_css=? where form_id=?";
				$params = array($form_has_css,$form_id);
				$sth = $dbh->prepare($query);
				try{
					$sth->execute($params);
				}catch(PDOException $e) {
					$post_install_error .= $e->getMessage().'<br/><br/>';
				}


				$advanced_css = file_get_contents("./data/form_{$form_id}/css/view.old.css"); //store the old view.css content as advanced code
			
				//insert into ap_form_themes  table
				$query = "INSERT INTO 
								`".MF_TABLE_PREFIX."form_themes` 
										( 
										`status`, 
										`theme_has_css`, 
										`theme_name`, 
										`theme_built_in`, 
										`logo_type`, 
										`logo_custom_image`, 
										`logo_custom_height`, 
										`logo_default_image`, 
										`logo_default_repeat`, 
										`wallpaper_bg_type`, 
										`wallpaper_bg_color`, 
										`wallpaper_bg_pattern`, 
										`wallpaper_bg_custom`, 
										`header_bg_type`, 
										`header_bg_color`, 
										`header_bg_pattern`, 
										`header_bg_custom`, 
										`form_bg_type`, 
										`form_bg_color`, 
										`form_bg_pattern`, 
										`form_bg_custom`, 
										`highlight_bg_type`, 
										`highlight_bg_color`, 
										`highlight_bg_pattern`, 
										`highlight_bg_custom`, 
										`guidelines_bg_type`, 
										`guidelines_bg_color`, 
										`guidelines_bg_pattern`, 
										`guidelines_bg_custom`, 
										`field_bg_type`, 
										`field_bg_color`, 
										`field_bg_pattern`, 
										`field_bg_custom`, 
										`form_title_font_type`, 
										`form_title_font_weight`, 
										`form_title_font_style`, 
										`form_title_font_size`, 
										`form_title_font_color`, 
										`form_desc_font_type`, 
										`form_desc_font_weight`, 
										`form_desc_font_style`, 
										`form_desc_font_size`, 
										`form_desc_font_color`, 
										`field_title_font_type`, 
										`field_title_font_weight`, 
										`field_title_font_style`, 
										`field_title_font_size`, 
										`field_title_font_color`, 
										`guidelines_font_type`, 
										`guidelines_font_weight`, 
										`guidelines_font_style`, 
										`guidelines_font_size`, 
										`guidelines_font_color`, 
										`section_title_font_type`, 
										`section_title_font_weight`, 
										`section_title_font_style`, 
										`section_title_font_size`, 
										`section_title_font_color`, 
										`section_desc_font_type`, 
										`section_desc_font_weight`, 
										`section_desc_font_style`, 
										`section_desc_font_size`, 
										`section_desc_font_color`, 
										`field_text_font_type`, 
										`field_text_font_weight`, 
										`field_text_font_style`, 
										`field_text_font_size`, 
										`field_text_font_color`, 
										`border_form_width`, 
										`border_form_style`, 
										`border_form_color`, 
										`border_guidelines_width`, 
										`border_guidelines_style`, 
										`border_guidelines_color`, 
										`border_section_width`, 
										`border_section_style`, 
										`border_section_color`, 
										`form_shadow_style`, 
										`form_shadow_size`, 
										`form_shadow_brightness`, 
										`form_button_type`, 
										`form_button_text`, 
										`form_button_image`, 
										`advanced_css`)
								VALUES
									(1,0,?,0,'default','http://',40,'machform.png',0,'color','#ececec','','','color','#DEDEDE','','',
									'color','#ffffff','','','color','#FFF7C0','','','color','#F5F5F5','','','color','#ffffff','','','Lucida Grande',
									400,'normal','160%','#000000','Lucida Grande',400,'normal','95%','#000000','Lucida Grande',700,'normal','95%','#222222',
									'Lucida Grande',400,'normal','80%','#444444','Lucida Grande',400,'normal','110%','#000000','Lucida Grande',400,'normal',
									'85%','#000000','Lucida Grande',400,'normal','100%','#333333',1,'solid','#CCCCCC',1,'solid','#CCCCCC',1,'dotted','#CCCCCC',
									'WarpShadow','large','normal','text','Submit','http://',?);"; 
				$theme_name = 'Form #'.$form_id.' Theme';

				$params = array($theme_name,$advanced_css);
				$sth = $dbh->prepare($query);
				try{
					$sth->execute($params);
				}catch(PDOException $e) {
					$post_install_error .= $e->getMessage().'<br/><br/>';
				}
				
				$theme_id = (int) $dbh->lastInsertId();

				//create/update the CSS file for the theme
				$css_theme_filename = "./data/themes/theme_{$theme_id}.css";
				$css_theme_content  = mf_theme_get_css_content($dbh,$theme_id);
				
				$fpc_result = @file_put_contents($css_theme_filename,$css_theme_content);
				
				if(!empty($fpc_result)){ //if we're able to write into the css file, set the 'theme_has_css' to 1
					$params = array(1,$theme_id);
					$query = "UPDATE ".MF_TABLE_PREFIX."form_themes SET theme_has_css = ? WHERE theme_id = ?";
					
					$sth = $dbh->prepare($query);
					try{
						$sth->execute($params);
					}catch(PDOException $e) {
						$post_install_error .= $e->getMessage().'<br/><br/>';
					}
				}

				//update ap_forms table to use the new theme
				$query = "UPDATE ".MF_TABLE_PREFIX."forms set form_theme_id=? where form_id=?";

				$params = array($theme_id,$form_id);
				$sth = $dbh->prepare($query);
				try{
					$sth->execute($params);
				}catch(PDOException $e) {
					$post_install_error .= $e->getMessage().'<br/><br/>';
				}
				
			} //end file_exists
		} //end foreach form_id_array



		return $post_install_error;

	}

	/***************************************************************************
	 Changelog 3.0 to 3.2 												   
	 
	 - ap_settings: added 'admin_theme' column
	 - ap_form_elements: added 'element_section_display_in_email' default(0),'element_section_enable_scroll' default(0) column
	 - added .section_scroll_small,.section_scroll_medium,.section_scroll_large definition to all view.css for each form
	 - added .mf_review_section_break definition to all view.css
	 - added .mf_canvas_pad,.mf_sig_wrapper,.mf_sigpad_clear to all view.css
	 - added built-in class, .column_2 to .column_6,.new_row,.hidden,.guidelines_bottom

	 there wasn't any database change within 3.1
	 thus there is only this 3.0 to 3.2 update path
	***************************************************************************/
	
	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time

	function do_delta_update_3_0_to_3_2($dbh,$options=array()){

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//alter table ap_settings, add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."settings` ADD COLUMN `admin_theme` varchar(11) DEFAULT NULL;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//alter table ap_form_elements, add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_elements` 
															ADD COLUMN `element_section_display_in_email` int(1) NOT NULL DEFAULT '0',
  													  		ADD COLUMN `element_section_enable_scroll` int(1) NOT NULL DEFAULT '0';";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//loop through each view.css file and add new classes
		$query  = "select `form_id` from ".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
	
		while($row = mf_do_fetch_result($sth)){
			$form_id = $row['form_id'];
			$form_id_array[] = $form_id;
		}

		$new_css_code = <<<EOT
.section_scroll_small{
	height: 5em;
	overflow-y: scroll;
}
.section_scroll_medium{
	height: 10em;
	overflow-y: scroll;
}
.section_scroll_large{
	height: 20em;
	overflow-y: scroll;
}
#machform_review_table td.mf_review_section_break{
	padding: 10px 5px;
}
.mf_canvas_pad{
	border-radius: 10px;
	cursor: url("../../../js/signaturepad/pen.cur"), crosshair;
  	cursor: url("../../../js/signaturepad/pen.cur") 16 16, crosshair;
}
#machform_review_table .mf_canvas_pad{
  cursor: auto;
}
.mf_sig_wrapper {
	border-radius: 10px;
	border: 1px solid #ccc;
	width: 309px;
	padding-bottom: 0px !important;
	padding: 3px !important;
}
.mf_sigpad_clear{
	margin-left: 280px;
	margin-top: 5px;
	display: block;
}
/** Built-in Class **/
#main_body form li{
	clear: both;
}
#main_body form li.column_2{
  width: 47%;
  float: left;
  clear: none !important;
}
#main_body form li.column_3{
	width: 31%;
	float: left;
	clear: none !important;
}
#main_body form li.column_4{
	width: 22%;
  	float: left;
	clear: none !important;
}
#main_body form li.column_5{
	width: 17%;
	float: left;
	clear: none !important;
}
#main_body form li.column_6{
	width: 14%;
	float: left;
	clear: none !important;
}
#main_body form li.new_row{
	clear: left !important;
}
#main_body form li.hidden{
	display: none;
}
#main_body form li.guidelines_bottom .guidelines
{
	background: none !important;
	border: none !important;
	font-size:105%;
	line-height:100%;
	margin: 0 !important;
    padding: 0 0 5px;
	visibility:visible;
	width:100%;
	position: static;

}
EOT;
		foreach ($form_id_array as $form_id) {
			$target_css_file = $mf_settings['data_dir']."/form_{$form_id}/css/view.css";
			if(file_exists($target_css_file) && is_writable($target_css_file)){
				file_put_contents($target_css_file, $new_css_code, FILE_APPEND);
			}
		}

		return $post_install_error;
	}

	/***************************************************************************
	 Changelog 3.2 to 3.3 												   
	 
	 - new table ap_users
	 - new table ap_permissions
	 - new table ap_entries_preferences
	 - new table ap_form_locks
	 - new table ap_form_sorts

	 - ap_form_filters: added 'user_id' column
	 - ap_column_preferences: added 'user_id' column
	 - ap_form_themes: added 'user_id','theme_is_private' columns 

	 - delete columns from ap_forms: entries_sort_by, entries_enable_filter, entries_filter_type.... move the records into ap_entries_preferences table and set user_id to 1
	 - delete column from ap_settings: form_manager_sort_by and move the record into ap_form_sorts table

	 - copy admin login data to ap_users data and then delete the columns (admin_login,admin_password,cookie_hash), set admin user_id = 1

	 - create index.html file to each "files" folder and to the "data" folder
	***************************************************************************/
	
	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time

	function do_delta_update_3_2_to_3_3($dbh,$options=array()){

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//1. Create table ap_users
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."users` (
												  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
												  `user_email` varchar(255) NOT NULL DEFAULT '',
												  `user_password` varchar(255) NOT NULL DEFAULT '',
												  `user_fullname` varchar(255) NOT NULL DEFAULT '',
												  `priv_administer` tinyint(1) NOT NULL DEFAULT '0',
												  `priv_new_forms` tinyint(1) NOT NULL DEFAULT '0',
												  `priv_new_themes` tinyint(1) NOT NULL DEFAULT '0',
												  `last_login_date` datetime DEFAULT NULL,
												  `last_ip_address` varchar(15) DEFAULT '',
												  `cookie_hash` varchar(255) DEFAULT '',
												  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 - deleted; 1 - active; 2 - suspended',
												  PRIMARY KEY (`user_id`)
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//2. Create table ap_permissions
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."permissions` (
												  `form_id` bigint(11) unsigned NOT NULL,
												  `user_id` int(11) unsigned NOT NULL,
												  `edit_form` tinyint(1) NOT NULL DEFAULT '0',
												  `edit_entries` tinyint(1) NOT NULL DEFAULT '0',
												  `view_entries` tinyint(1) NOT NULL DEFAULT '0',
												  PRIMARY KEY (`form_id`,`user_id`)
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//3. Create table ap_entries_preferences
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."entries_preferences` (
												  `form_id` int(11) NOT NULL,
												  `user_id` int(11) NOT NULL,
												  `entries_sort_by` varchar(100) NOT NULL DEFAULT 'id-desc',
												  `entries_enable_filter` int(1) NOT NULL DEFAULT '0',
												  `entries_filter_type` varchar(5) NOT NULL DEFAULT 'all' COMMENT 'all or any'
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//4. Create table ap_form_locks
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_locks` (
												  `form_id` int(11) NOT NULL,
												  `user_id` int(11) NOT NULL,
												  `lock_date` datetime NOT NULL
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//5. Create table ap_form_sorts
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_sorts` (
												  `user_id` int(11) NOT NULL,
												  `sort_by` varchar(25) DEFAULT '',
												  PRIMARY KEY (`user_id`)
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}
		
		//6. Alter table ap_form_filters. Add 'user_id' column
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_filters` ADD COLUMN `user_id` int(11) NOT NULL DEFAULT '1';";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//7. Alter table ap_column_preferences. Add 'user_id' column
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."column_preferences` ADD COLUMN `user_id` int(11) NOT NULL DEFAULT '1';";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//8. Alter table ap_form_themes. Add 'user_id' and 'theme_is_private' column
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_themes`
													  ADD COLUMN `user_id` int(11) NOT NULL DEFAULT '1',
													  ADD COLUMN `theme_is_private` int(11) NOT NULL DEFAULT '1';";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//9. Alter table ap_forms. Delete columns: entries_sort_by, entries_enable_filter, entries_filter_type 
		//   Move the records into ap_entries_preferences table first and set user_id to 1
		$query = "INSERT INTO ".MF_TABLE_PREFIX."entries_preferences(
													form_id,
													user_id,
													entries_sort_by,
													entries_enable_filter,
													entries_filter_type) 
											  SELECT 
											 		form_id,
											 		'1' as user_id,
											 		entries_sort_by,
											 		entries_enable_filter,
											 		entries_filter_type 
											 	FROM 
											 		".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		$query = "ALTER TABLE ".MF_TABLE_PREFIX."forms DROP COLUMN `entries_sort_by`,DROP COLUMN `entries_enable_filter`,DROP COLUMN `entries_filter_type`;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//10. Alter table ap_settings. Delete column 'form_manager_sort_by'
		//    Move the record value into ap_form_sorts table
		$query = "INSERT INTO ".MF_TABLE_PREFIX."form_sorts(user_id,sort_by) SELECT '1' as user_id,form_manager_sort_by FROM ".MF_TABLE_PREFIX."settings";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		$query = "ALTER TABLE ".MF_TABLE_PREFIX."settings DROP COLUMN `form_manager_sort_by`;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//11. Copy admin login data to ap_users and then delete columns: admin_login,admin_password,cookie_hash
		//    Set user_id = 1
		$query = "INSERT INTO 
							 ".MF_TABLE_PREFIX."users(
		   							  user_id,
		   							  user_email,
		   							  user_password,
		   							  user_fullname,
		   							  priv_administer,
		   							  priv_new_forms,
		   							  priv_new_themes,
		   							  cookie_hash,
		   							  `status`)
								SELECT 
									  '1' as user_id,
									  admin_login,
									  admin_password,
									  'Administrator' as user_fullname, 
									  '1' as priv_administer, 
									  '1' as priv_new_forms,
									  '1' as priv_new_themes,
									  cookie_hash,
									  '1' as `status` 
								  FROM 
									  ".MF_TABLE_PREFIX."settings";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		$query = "ALTER TABLE ".MF_TABLE_PREFIX."settings DROP COLUMN `admin_login`,DROP COLUMN `admin_password`,DROP COLUMN `cookie_hash`;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//12. Loop through each "files" folder and to "data" folder. Create an empty "index.html" file.
		$query = "select `form_id` from ".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
				
		$form_id_array = array();
		while($row = mf_do_fetch_result($sth)){
			$form_id = $row['form_id'];

			if(is_writable($mf_settings['upload_dir']."/form_{$form_id}/files")){
				@file_put_contents($mf_settings['upload_dir']."/form_{$form_id}/files/index.html",' ');
			}
		}

		if(is_writable("./data")){
			@file_put_contents("./data/index.html",' ');
		}

		return $post_install_error;
	}

	/***************************************************************************
	 Changelog 3.3 to 3.4 												   
	 
	 - new table ap_field_logic_elements
	 - new table ap_field_logic_conditions
	 - new table ap_form_payments
	 - new table ap_page_logic
	 - new table ap_page_logic_conditions

	 - ap_forms: added columns 'logic_field_enable', logic_page_enable, payment_enable_trial, payment_trial_period, payment_trial_unit, payment_trial_amount, payment_stripe_live_secret_key, 
	 							payment_stripe_live_public_key, payment_stripe_test_secret_key, payment_stripe_test_public_key, payment_stripe_enable_test_mode, payment_enable_invoice, 
	 							payment_delay_notifications, payment_ask_billing, payment_ask_shipping, payment_invoice_email, payment_paypal_enable_test_mode 
	 - update ap_forms records, set the value of 'payment_delay_notifications' to 0 for all records. so that all existing paypal payments will still working as it is now.

	 - add these CSS code to all view.css files on all forms:

		a) #main_body select.select { background-image: none; }
		b) #main_body form li.guidelines_bottom .guidelines { clear: both; }
		c) everything under 'Payment Page'
	***************************************************************************/

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	
	function do_delta_update_3_3_to_3_4($dbh,$options=array()){

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//1. Create table ap_field_logic_elements
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."field_logic_elements` (
																		  `form_id` int(11) NOT NULL,
																		  `element_id` int(11) NOT NULL,
																		  `rule_show_hide` varchar(4) NOT NULL DEFAULT 'show',
																		  `rule_all_any` varchar(3) NOT NULL DEFAULT 'all',
																		  PRIMARY KEY (`form_id`,`element_id`)
																		) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//2. Create table ap_field_logic_conditions
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."field_logic_conditions` (
																		  `alc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
																		  `form_id` int(11) NOT NULL,
																		  `target_element_id` int(11) NOT NULL,
																		  `element_name` varchar(50) NOT NULL DEFAULT '',
																		  `rule_condition` varchar(15) NOT NULL DEFAULT 'is',
																		  `rule_keyword` varchar(255) DEFAULT NULL,
																		  PRIMARY KEY (`alc_id`),
																		  KEY `form_id` (`form_id`,`target_element_id`)
																		) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//3. Create table ap_form_payments
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_payments` (
																  `afp_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
																  `form_id` int(11) unsigned NOT NULL,
																  `record_id` int(11) unsigned NOT NULL,
																  `payment_id` varchar(255) DEFAULT NULL,
																  `date_created` datetime DEFAULT NULL,
																  `payment_date` datetime DEFAULT NULL,
																  `payment_status` varchar(255) DEFAULT NULL,
																  `payment_fullname` varchar(255) DEFAULT NULL,
																  `payment_amount` decimal(62,2) NOT NULL DEFAULT '0.00',
																  `payment_currency` varchar(3) NOT NULL DEFAULT 'usd',
																  `payment_test_mode` int(1) NOT NULL DEFAULT '0',
																  `payment_merchant_type` varchar(25) DEFAULT NULL,
																  `status` int(1) NOT NULL DEFAULT '1',
																  `billing_street` varchar(255) DEFAULT NULL,
																  `billing_city` varchar(255) DEFAULT NULL,
																  `billing_state` varchar(255) DEFAULT NULL,
																  `billing_zipcode` varchar(255) DEFAULT NULL,
																  `billing_country` varchar(255) DEFAULT NULL,
																  `same_shipping_address` int(1) NOT NULL DEFAULT '1',
																  `shipping_street` varchar(255) DEFAULT NULL,
																  `shipping_city` varchar(255) DEFAULT NULL,
																  `shipping_state` varchar(255) DEFAULT NULL,
																  `shipping_zipcode` varchar(255) DEFAULT NULL,
																  `shipping_country` varchar(255) DEFAULT NULL,
																   PRIMARY KEY (`afp_id`)
																  ) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//4. Create table ap_page_logic
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."page_logic` (
																`form_id` int(11) NOT NULL,
															  	`page_id` varchar(15) NOT NULL DEFAULT '',
															  	`rule_all_any` varchar(3) NOT NULL DEFAULT 'all',
															  	 PRIMARY KEY (`form_id`,`page_id`)
															   ) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//5. Create table ap_page_logic_conditions
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."page_logic_conditions` (
																		   `apc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
																		   `form_id` int(11) NOT NULL,
																		   `target_page_id` varchar(15) NOT NULL DEFAULT '',
																		   `element_name` varchar(50) NOT NULL DEFAULT '',
																		   `rule_condition` varchar(15) NOT NULL DEFAULT 'is',
																		   `rule_keyword` varchar(255) DEFAULT NULL,
																		    PRIMARY KEY (`apc_id`),
																		    KEY `form_id` (`form_id`,`target_page_id`)
															   			  ) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//6. Alter ap_forms table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."forms` 
														  ADD COLUMN `logic_field_enable` tinyint(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `logic_page_enable` tinyint(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_enable_trial` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_trial_period` int(11) NOT NULL DEFAULT '1',
														  ADD COLUMN `payment_trial_unit` varchar(5) NOT NULL DEFAULT 'month',
														  ADD COLUMN `payment_trial_amount` decimal(62,2) NOT NULL DEFAULT '0.00',
														  ADD COLUMN `payment_stripe_live_secret_key` varchar(50) DEFAULT NULL,
											  			  ADD COLUMN `payment_stripe_live_public_key` varchar(50) DEFAULT NULL,
											  			  ADD COLUMN `payment_stripe_test_secret_key` varchar(50) DEFAULT NULL,
											  			  ADD COLUMN `payment_stripe_test_public_key` varchar(50) DEFAULT NULL,
											  			  ADD COLUMN `payment_stripe_enable_test_mode` int(1) NOT NULL DEFAULT '0',
											  			  ADD COLUMN `payment_paypal_enable_test_mode` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_enable_invoice` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_invoice_email` varchar(255) DEFAULT NULL,
														  ADD COLUMN `payment_delay_notifications` int(1) NOT NULL DEFAULT '1',
														  ADD COLUMN `payment_ask_billing` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_ask_shipping` int(1) NOT NULL DEFAULT '0';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//7. Update ap_forms records, set the value of 'payment_delay_notifications' to 0 for all records. 
		//so that all existing paypal payments will still working as it is now.
		$query = "UPDATE `".MF_TABLE_PREFIX."forms` SET `payment_delay_notifications`=0";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//8. Loop through each form CSS file and add new CSS code
		$query  = "select `form_id` from ".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
	
		while($row = mf_do_fetch_result($sth)){
			$form_id = $row['form_id'];
			$form_id_array[] = $form_id;
		}

		$new_css_code = <<<EOT

#main_body select.select { background-image: none; }
#main_body form li.guidelines_bottom .guidelines { clear: both; }
#main_body ul.payment_summary{
	overflow: hidden;
}
#main_body form li.payment_summary_list{
	border-right: 1px dashed #ccc;
	padding-right: 10px;
	width: 70%;
	float: right;
	clear: none;
	text-align: right;
}
#main_body form li.payment_summary_amount{
	width: auto;
	float: right;
	clear: none;
}
#main_body form ul.payment_list_items li{
	width: 98%;
	font-size: 95%;
	padding-top: 0px;
	padding-bottom: 5px;
}
#main_body form ul.payment_list_items li span{
	margin: 0px;
	float: right;
	display: block;
	font-weight: bold;
	padding: 0px;
	padding-left: 10px;
	color: inherit;
}
#main_body form li.payment_summary_term{
	text-align: right;
	font-size: 90%;
	padding: 15px 0;
}
#main_body form li#li_accepted_cards{
	margin-bottom: 10px;
}
#li_accepted_cards img{
	height: 27px;
}
#main_body form ul.payment_detail_form{
	margin-top: 20px
}
#main_body form li.credit_card div span{
	padding-bottom: 8px;
}
#main_body form li.credit_card div span#li_cc_span_3{
	width: 75%;
}
#main_body form li.credit_card div span#li_cc_span_4{
	width: 21%;
}
#cc_secure_icon{
	float: left;
	margin-top:5px;
}
#cc_expiry_month{
	width: 23%;
}
#cc_expiry_year{
	width: 11%;
}
#li_billing_address span.state_list,
#li_shipping_address span.state_list{
	padding-bottom: 12px !important;
}
#li_shipping_address div.shipping_address_detail{
	content: "";
    display: table;
  	clear: both;
}
#li_credit_card{
	padding-bottom: 5px !important;
	margin-bottom: 20px !important;
}
EOT;
		foreach ($form_id_array as $form_id) {
			$target_css_file = $mf_settings['data_dir']."/form_{$form_id}/css/view.css";
			if(file_exists($target_css_file) && is_writable($target_css_file)){
				file_put_contents($target_css_file, $new_css_code, FILE_APPEND);
			}
		}

		return $post_install_error;
	}

	/***************************************************************************
	 Changelog 3.4 to 3.5 												   
	 
	 - new table ap_email_logic
	 - new table ap_email_logic_conditions
	 
	 - ap_forms: added columns  form_disabled_message, payment_enable_tax, payment_tax_rate, logic_email_enable
	 - ap_form_elements: added columns  element_number_enable_quantity, element_number_quantity_link

	 - update ap_forms records, set the value of 'form_disabled_message' to be coming from the language setting for each form.

	***************************************************************************/

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	
	function do_delta_update_3_4_to_3_5($dbh,$options=array()){

		global $mf_lang;

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//1. Create table ap_email_logic
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."email_logic` (
												    		  `form_id` int(11) NOT NULL,
															  `rule_id` int(11) NOT NULL,
															  `rule_all_any` varchar(3) NOT NULL DEFAULT 'all',
															  `target_email` text NOT NULL,
															  `template_name` varchar(15) NOT NULL DEFAULT 'notification' COMMENT 'notification - confirmation - custom',
															  `custom_from_name` text,
															  `custom_from_email` varchar(255) NOT NULL DEFAULT '',
															  `custom_subject` text,
															  `custom_content` text,
															  `custom_plain_text` int(1) NOT NULL DEFAULT '0',
															  PRIMARY KEY (`form_id`,`rule_id`)
												) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//2. Create table ap_email_logic_conditions
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."email_logic_conditions` (
												    		  `aec_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `target_rule_id` int(11) NOT NULL,
															  `element_name` varchar(50) NOT NULL DEFAULT '',
															  `rule_condition` varchar(15) NOT NULL DEFAULT 'is',
															  `rule_keyword` varchar(255) DEFAULT NULL,
															  PRIMARY KEY (`aec_id`),
															  KEY `form_id` (`form_id`,`target_rule_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		
		//3. Alter ap_forms table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."forms` 
														  ADD COLUMN `form_disabled_message` text,
														  ADD COLUMN `payment_enable_tax` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_tax_rate` decimal(62,2) NOT NULL DEFAULT '0.00',
														  ADD COLUMN `logic_email_enable` tinyint(1) NOT NULL DEFAULT '0';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//4. Alter ap_form_elements table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_elements` 
														  ADD COLUMN `element_number_enable_quantity` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_number_quantity_link` varchar(15) DEFAULT NULL;";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//5. Update ap_forms records, set the value of 'form_disabled_message' to be coming from the language setting for each form 
		$form_language_settings = array();

		$query  = "select `form_id`,`form_language` from ".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
	
		$i=0;
		while($row = mf_do_fetch_result($sth)){
			$form_language_settings[$i]['form_id'] = $row['form_id'];

			if(!empty($row['form_language'])){
				$form_language_settings[$i]['form_language'] = $row['form_language'];
			}else{
				$form_language_settings[$i]['form_language'] = 'english';
			}
			$i++;
		}

		if(!empty($form_language_settings)){
			foreach ($form_language_settings as $value) {
				
				mf_set_language($value['form_language']);

				$query = "UPDATE `".MF_TABLE_PREFIX."forms` SET `form_disabled_message`=? where form_id=?";
				
				$params = array($mf_lang['form_inactive'],$value['form_id']);
				$sth = $dbh->prepare($query);
				try{
					$sth->execute($params);
				}catch(PDOException $e) {
					$post_install_error .= $e->getMessage().'<br/><br/>';
				}
			}
		}
		

		

		return $post_install_error;
	}

	/***************************************************************************
	 Changelog 3.5 to 4.0.beta 												   
	 
	- new table ap_webhook_options
	- new table ap_webhook_parameters
	- new table ap_reports
	- new table ap_report_elements
	- new table ap_report_filters
	- new table ap_grid_columns

	- ap_forms: added column 'payment_enable_discount','payment_discount_type','payment_discount_amount','payment_discount_code', 'payment_discount_element_id','payment_discount_max_usage','payment_discount_expiry_date','webhook_enable'
	- ap_forms: added 'payment_authorizenet_live_apiloginid','payment_authorizenet_live_transkey','payment_authorizenet_test_apiloginid','payment_authorizenet_test_transkey','payment_authorizenet_enable_test_mode','payment_authorizenet_save_cc_data'
	- ap forms: added payment_paypal_rest_live_clientid, payment_paypal_rest_live_secret_key,payment_paypal_rest_test_clientid,payment_paypal_rest_test_secret_key,payment_paypal_rest_enable_test_mode column
	- ap_forms: added colums:
					* payment_braintree_live_merchant_id
					* payment_braintree_live_public_key
					* payment_braintree_live_private_key
					* payment_braintree_live_encryption_key

					* payment_braintree_test_merchant_id
					* payment_braintree_test_public_key
					* payment_braintree_test_private_key
					* payment_braintree_test_encryption_key

					* payment_braintree_enable_test_mode

	- ap_entries_preferences: added column 'entries_incomplete_sort_by','entries_incomplete_enable_filter','entries_incomplete_filter_type'
	- ap_form_filters: added column 'incomplete_entries'
	- ap_column_preferences: added column 'incomplete_entries'

	- add a block of new CSS code to all view.css files on all forms
	***************************************************************************/

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	
	function do_delta_update_3_5_to_4_0_beta($dbh,$options=array()){

		global $mf_lang;

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//1. Create table ap_webhook_options
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."webhook_options` (
												    		  `awo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `rule_id` int(11) NOT NULL DEFAULT '0',
															  `webhook_url` text,
															  `webhook_method` varchar(4) NOT NULL DEFAULT 'post',
															  `webhook_format` varchar(10) NOT NULL DEFAULT 'key-value',
															  `webhook_raw_data` mediumtext,
															  `enable_http_auth` int(1) DEFAULT '0',
															  `http_username` varchar(255) DEFAULT NULL,
															  `http_password` varchar(255) DEFAULT NULL,
															  `enable_custom_http_headers` int(1) NOT NULL DEFAULT '0',
															  `custom_http_headers` text,
															  PRIMARY KEY (`awo_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//2. Create table ap_webhook_parameters
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."webhook_parameters` (
												    		  `awp_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `rule_id` int(11) NOT NULL DEFAULT '0',
															  `param_name` text,
															  `param_value` text,
															  PRIMARY KEY (`awp_id`),
															  KEY `form_id` (`form_id`,`rule_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//3. Create table ap_reports
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."reports` (
												    		  `form_id` int(11) NOT NULL,
															  `report_access_key` varchar(100) DEFAULT NULL,
															  PRIMARY KEY (`form_id`),
															  KEY `report_access_key` (`report_access_key`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//4. Create table ap_report_elements
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."report_elements` (
												    		  `access_key` varchar(100) DEFAULT NULL,
															  `form_id` int(11) NOT NULL,
															  `chart_id` int(11) NOT NULL,
															  `chart_position` int(11) NOT NULL DEFAULT '0',
															  `chart_status` int(1) NOT NULL DEFAULT '1',
															  `chart_datasource` varchar(25) NOT NULL DEFAULT '',
															  `chart_type` varchar(25) NOT NULL DEFAULT '',
															  `chart_enable_filter` int(1) NOT NULL DEFAULT '0',
															  `chart_filter_type` varchar(5) NOT NULL DEFAULT 'all',
															  `chart_title` text,
															  `chart_title_position` varchar(10) NOT NULL DEFAULT 'top',
															  `chart_title_align` varchar(10) NOT NULL DEFAULT 'center',
															  `chart_width` int(11) NOT NULL DEFAULT '0',
															  `chart_height` int(11) NOT NULL DEFAULT '400',
															  `chart_background` varchar(8) DEFAULT NULL,
															  `chart_theme` varchar(25) NOT NULL DEFAULT 'blueopal',
															  `chart_legend_visible` int(1) NOT NULL DEFAULT '1',
															  `chart_legend_position` varchar(10) NOT NULL DEFAULT 'right',
															  `chart_labels_visible` int(1) NOT NULL DEFAULT '1',
															  `chart_labels_position` varchar(10) NOT NULL DEFAULT 'outsideEnd',
															  `chart_labels_template` varchar(255) NOT NULL DEFAULT '#= category #',
															  `chart_labels_align` varchar(10) NOT NULL DEFAULT 'circle',
															  `chart_tooltip_visible` int(1) NOT NULL DEFAULT '1',
															  `chart_tooltip_template` varchar(255) NOT NULL DEFAULT '#= category # - #= dataItem.entry # - #= kendo.format(''{0:P}'', percentage)#',
															  `chart_gridlines_visible` int(1) NOT NULL DEFAULT '1',
															  `chart_bar_color` varchar(8) DEFAULT NULL,
															  `chart_is_stacked` int(1) NOT NULL DEFAULT '0',
															  `chart_is_vertical` int(1) NOT NULL DEFAULT '0',
															  `chart_line_style` varchar(6) NOT NULL DEFAULT 'smooth',
															  `chart_axis_is_date` int(1) NOT NULL DEFAULT '0',
															  `chart_date_range` varchar(6) NOT NULL DEFAULT 'all' COMMENT 'all,period,custom',
															  `chart_date_period_value` int(11) NOT NULL DEFAULT '1',
															  `chart_date_period_unit` varchar(5) NOT NULL DEFAULT 'day',
															  `chart_date_axis_baseunit` varchar(5) DEFAULT NULL,
															  `chart_date_range_start` date DEFAULT NULL,
															  `chart_date_range_end` date DEFAULT NULL,
															  `chart_grid_page_size` int(11) NOT NULL DEFAULT '10',
															  `chart_grid_max_length` int(11) NOT NULL DEFAULT '100',
															  PRIMARY KEY (`form_id`,`chart_id`),
															  KEY `access_key` (`access_key`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//5. Create table ap_report_filters
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."report_filters` (
												    		  `arf_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `chart_id` int(11) NOT NULL,
															  `element_name` varchar(50) NOT NULL DEFAULT '',
															  `filter_condition` varchar(15) NOT NULL DEFAULT 'is',
															  `filter_keyword` varchar(255) DEFAULT NULL,
															  PRIMARY KEY (`arf_id`),
															  KEY `form_id` (`form_id`,`chart_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//6. Create table ap_grid_columns
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."grid_columns` (
												    		  `agc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `chart_id` int(11) NOT NULL,
															  `element_name` varchar(255) NOT NULL DEFAULT '',
															  `position` int(11) NOT NULL,
															  PRIMARY KEY (`agc_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}
		
		//7. Alter ap_forms table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."forms` 
														  ADD COLUMN `payment_enable_discount` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_discount_type` varchar(12) NOT NULL DEFAULT 'percent_off',
														  ADD COLUMN `payment_discount_amount` decimal(62,2) NOT NULL DEFAULT '0.00',
														  ADD COLUMN `payment_discount_code` text,
														  ADD COLUMN `payment_discount_element_id` int(11) DEFAULT NULL,
														  ADD COLUMN `payment_discount_max_usage` int(11) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_discount_expiry_date` date DEFAULT NULL,
														  ADD COLUMN `webhook_enable` tinyint(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `webhook_url` text,
														  ADD COLUMN `webhook_method` varchar(4) NOT NULL DEFAULT 'post',
														  ADD COLUMN `payment_paypal_rest_live_clientid` varchar(100) DEFAULT NULL,
														  ADD COLUMN `payment_paypal_rest_live_secret_key` varchar(100) DEFAULT NULL,
														  ADD COLUMN `payment_paypal_rest_test_clientid` varchar(100) DEFAULT NULL,
														  ADD COLUMN `payment_paypal_rest_test_secret_key` varchar(100) DEFAULT NULL,
														  ADD COLUMN `payment_paypal_rest_enable_test_mode` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_authorizenet_live_apiloginid` varchar(50) DEFAULT NULL,
														  ADD COLUMN `payment_authorizenet_live_transkey` varchar(50) DEFAULT NULL,
														  ADD COLUMN `payment_authorizenet_test_apiloginid` varchar(50) DEFAULT NULL,
														  ADD COLUMN `payment_authorizenet_test_transkey` varchar(50) DEFAULT NULL,
														  ADD COLUMN `payment_authorizenet_enable_test_mode` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_authorizenet_save_cc_data` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_braintree_live_merchant_id` varchar(50) DEFAULT NULL,
														  ADD COLUMN `payment_braintree_live_public_key` varchar(50) DEFAULT NULL,
														  ADD COLUMN `payment_braintree_live_private_key` varchar(50) DEFAULT NULL,
														  ADD COLUMN `payment_braintree_live_encryption_key` text,
														  ADD COLUMN `payment_braintree_test_merchant_id` varchar(50) DEFAULT NULL,
														  ADD COLUMN `payment_braintree_test_public_key` varchar(50) DEFAULT NULL,
														  ADD COLUMN `payment_braintree_test_private_key` varchar(50) DEFAULT NULL,
														  ADD COLUMN `payment_braintree_test_encryption_key` text,
														  ADD COLUMN `payment_braintree_enable_test_mode` int(1) NOT NULL DEFAULT '0';";
																							  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//8. Alter ap_entries_preferences table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."entries_preferences` 
														  ADD COLUMN `entries_incomplete_sort_by` varchar(100) NOT NULL DEFAULT 'id-desc',
														  ADD COLUMN `entries_incomplete_enable_filter` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `entries_incomplete_filter_type` varchar(5) NOT NULL DEFAULT 'all' COMMENT 'all or any';";
														  																				  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}
		
		//9. Alter ap_form_filters table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_filters` 
														  ADD COLUMN `incomplete_entries` int(1) NOT NULL DEFAULT '0';";
														  																				  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//10. Alter ap_column_preferences table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."column_preferences` 
														  ADD COLUMN `incomplete_entries` int(1) NOT NULL DEFAULT '0';";
														  																				  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//11. Loop through each form CSS file and add new CSS code
		$query  = "select `form_id` from ".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
	
		while($row = mf_do_fetch_result($sth)){
			$form_id = $row['form_id'];
			$form_id_array[] = $form_id;
		}

		$new_css_code = <<<EOT
#main_body form li.total_payment span.total_extra{
	clear: both; 
	margin-top: 10px; 
	text-align: right
}
#main_body form li.total_payment span.total_extra h5{
	font-weight: 700;
}
/** File Upload - HTML5 **/
.uploadifive-button {
	background-color: #505050;
	background-image: linear-gradient(bottom, #505050 0%, #707070 100%);
	background-image: -o-linear-gradient(bottom, #505050 0%, #707070 100%);
	background-image: -moz-linear-gradient(bottom, #505050 0%, #707070 100%);
	background-image: -webkit-linear-gradient(bottom, #505050 0%, #707070 100%);
	background-image: -ms-linear-gradient(bottom, #505050 0%, #707070 100%);
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, #505050),
		color-stop(1, #707070)
	);
	background-position: center top;
	background-repeat: no-repeat;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
	border: 2px solid #808080;
	color: #FFF !important;
	font: bold 12px Arial, Helvetica, sans-serif;
	text-align: center;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.25);
	text-transform: uppercase;
	width: 100%;
	margin: 0 !important;
	padding: 0 !important;
}
.uploadifive-button:hover {
	background-color: #606060;
	background-image: linear-gradient(top, #606060 0%, #808080 100%);
	background-image: -o-linear-gradient(top, #606060 0%, #808080 100%);
	background-image: -moz-linear-gradient(top, #606060 0%, #808080 100%);
	background-image: -webkit-linear-gradient(top, #606060 0%, #808080 100%);
	background-image: -ms-linear-gradient(top, #606060 0%, #808080 100%);
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0, #606060),
		color-stop(1, #808080)
	);
	background-position: center bottom;
}
.uploadifive-queue-item {
	background-color: #F5F5F5 !important;
	border: 2px solid #E5E5E5 !important;
	font: 11px Verdana, Geneva, sans-serif;
	margin-top: 5px !important;
	padding: 10px !important;
	width: 350px;
}
.uploadifive-queue-item.error {
	background-color: #FDE5DD !important;
	border: 2px solid #FBCBBC !important;
}
.uploadifive-queue-item .close {
	background: url('../../../images/icons/delete.png') 0 0 no-repeat;
	display: block;
	float: right;
	height: 16px;
	text-indent: -9999px;
	width: 16px;
}
.uploadifive-queue-item .progress {
	border: 1px solid #D0D0D0;
	height: 3px;
	margin: 8px 0 0 0 !important;
	width: 100%;
	padding: 0 !important;
	clear: both;
}
.uploadifive-queue-item .progress-bar {
	background-color: #0099FF;
	height: 3px;
	width: 0;
	padding: 0 !important;
}
.uploadifive-queue-item div{
	overflow: auto;
	padding-bottom: 0 !important;
}
.uploadifive-queue-item span{
	width: auto !important;
}
.uploadifive-queue-item span.fileinfo{
	margin-left: 5px !important;
}
EOT;
		foreach ($form_id_array as $form_id) {
			$target_css_file = $mf_settings['data_dir']."/form_{$form_id}/css/view.css";
			if(file_exists($target_css_file) && is_writable($target_css_file)){
				file_put_contents($target_css_file, $new_css_code, FILE_APPEND);
			}
		}
		


		return $post_install_error;
	}

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	function do_delta_update_4_0_beta_to_4_0($dbh,$options=array()){
		//there is no changes between 4.0.beta to 4.0
		//only the version number need to be changed

		return '';
	}

	/***************************************************************************
	 Changelog 4.0 to 4.1 												   
	 
	 - ap_forms: added column 'esl_replyto_email_address','esr_replyto_email_address'
	 - ap_email_logic: added column 'custom_replyto_email'
	 
	1) Loop through each form
	..copy value from 'esl_from_email_address' to 'esl_replyto_email_address'
	..check into 'esl_from_email_address' field 
	....if the field doesn't contain email address, replace it with the Default From Email

	..copy value from 'esr_from_email_address' to 'esr_replyto_email_address'
	..check into 'esr_from_email_address' field 
	....if the field doesn't contain email address, replace it with the Default From Email

	2) Loop through each record within ap_email_logic table
    ..copy value from 'custom_from_email' to 'custom_replyto_email'
    ..check into 'custom_from_email' field
    ....if the field doesn't contain email address, replace it with the Default From Email
	 
	***************************************************************************/

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	
	function do_delta_update_4_0_to_4_1($dbh,$options=array()){

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//1. Alter ap_forms table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."forms` 
														  ADD COLUMN `esl_replyto_email_address` varchar(255) DEFAULT NULL,
														  ADD COLUMN `esr_replyto_email_address` varchar(255) DEFAULT NULL;";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//2. Alter ap_email_logic table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."email_logic` ADD COLUMN `custom_replyto_email` varchar(255) NOT NULL DEFAULT '';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//3. Update ap_forms table 
		//   Copy value from 'esl_from_email_address' to 'esl_replyto_email_address'
		//   Copy value from 'esr_from_email_address' to 'esr_replyto_email_address'
		$query = "UPDATE ".MF_TABLE_PREFIX."forms set esl_replyto_email_address=esl_from_email_address,esr_replyto_email_address=esr_from_email_address";

		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//4. Update ap_email_logic table
		//   Copy value from 'custom_from_email' to 'custom_replyto_email'
		$query = "update ".MF_TABLE_PREFIX."email_logic set custom_replyto_email=custom_from_email";

		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//5. Loop through each record within ap_forms table 
		$query  = "select `form_id`,`esl_from_email_address`,`esr_from_email_address` from ".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
		
		$form_email_data = array();
		$i=0;
		while($row = mf_do_fetch_result($sth)){
			$form_email_data[$i]['form_id'] = $row['form_id'];
			$form_email_data[$i]['esl_from_email_address'] = $row['esl_from_email_address'];
			$form_email_data[$i]['esr_from_email_address'] = $row['esr_from_email_address'];
			$i++;
		}

		if(!empty($form_email_data)){
			$default_from_email = $mf_settings['default_from_email'];

			foreach ($form_email_data as $value) {
				$form_id = $value['form_id'];

				$query = '';
				if((strpos($value['esl_from_email_address'], '@') === false) && (strpos($value['esr_from_email_address'], '@') === false)){
					$query = "UPDATE ".MF_TABLE_PREFIX."forms set esl_from_email_address = ?,esr_from_email_address = ? where form_id = ?";
					$params = array($default_from_email,$default_from_email,$form_id);
				}else if(strpos($value['esl_from_email_address'], '@') === false){
					$query = "UPDATE ".MF_TABLE_PREFIX."forms set esl_from_email_address = ? where form_id = ?";
					$params = array($default_from_email,$form_id);
				}else if(strpos($value['esr_from_email_address'], '@') === false){
					$query = "UPDATE ".MF_TABLE_PREFIX."forms set esr_from_email_address = ? where form_id = ?";
					$params = array($default_from_email,$form_id);
				}

				if(!empty($query)){
					$sth = $dbh->prepare($query);
					try{
						$sth->execute($params);
					}catch(PDOException $e) {
						$post_install_error .= $e->getMessage().'<br/><br/>';
					}
				}

			}
		}

		//6. Loop through each record within ap_email_logic table
		//check into custom_from_email_address field
		//if the field doesn't contain email address, replace it with the Default From Email
		$query  = "select `form_id`,`rule_id`,`custom_from_email` from ".MF_TABLE_PREFIX."email_logic";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
		
		$form_email_logic_data = array();
		$i=0;
		while($row = mf_do_fetch_result($sth)){
			$form_email_logic_data[$i]['form_id'] = $row['form_id'];
			$form_email_logic_data[$i]['rule_id'] = $row['rule_id'];
			$form_email_logic_data[$i]['custom_from_email'] = $row['custom_from_email'];
			$i++;
		}

		if(!empty($form_email_logic_data)){
			$default_from_email = $mf_settings['default_from_email'];

			foreach ($form_email_logic_data as $value) {
				$form_id = $value['form_id'];
				$rule_id = $value['rule_id'];

				if(strpos($value['custom_from_email'], '@') === false){
					$query = "UPDATE ".MF_TABLE_PREFIX."email_logic set custom_from_email = ? where form_id = ? and rule_id = ?";
					$params = array($default_from_email,$form_id,$rule_id);

					$sth = $dbh->prepare($query);
					try{
						$sth->execute($params);
					}catch(PDOException $e) {
						$post_install_error .= $e->getMessage().'<br/><br/>';
					}
				}

			}
		}
		

		return $post_install_error;
	}

	/***************************************************************************
	 Changelog 4.1 to 4.2 												   
	 - create new table: ap_webhook_logic_conditions
	 
	 - ap_settings: added column 'enforce_tsv','enable_ip_restriction','ip_whitelist','enable_account_locking',
	 				'account_lock_period','account_lock_max_attempts','default_form_theme_id'
	 - ap_users: added column 'tsv_enable','tsv_secret','tsv_code_log','login_attempt_date','login_attempt_count'
	 - ap_forms: added column 'logic_webhook_enable','form_custom_script_enable','form_custom_script_url'
	 - ap_webhook_options: added column 'rule_all_any'
	 
	 - loop through each form: update 'session_id' length on all ap_form_x_review tables. Set the length to 128 instead of 100.
	 
	 - run these queries:
			ALTER TABLE `ap_field_logic_conditions` ADD INDEX (`form_id`,`target_element_id`);
			ALTER TABLE `ap_email_logic_conditions` ADD INDEX (`form_id`,`target_rule_id`);
			ALTER TABLE `ap_page_logic_conditions` ADD INDEX (`form_id`,`target_page_id`);
			update ap_form_themes set field_bg_color='#FBFBFB' where field_bg_color = '#ffffff' and theme_id <= 22;
			update ap_form_themes set border_form_width=0 where border_form_width=1 and theme_id <= 22;
	***************************************************************************/

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	
	function do_delta_update_4_1_to_4_2($dbh,$options=array()){

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//1. Create table ap_webhook_logic_conditions
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."webhook_logic_conditions` (
												    		  `wlc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `target_rule_id` int(11) NOT NULL,
															  `element_name` varchar(50) NOT NULL DEFAULT '',
															  `rule_condition` varchar(15) NOT NULL DEFAULT 'is',
															  `rule_keyword` varchar(255) DEFAULT NULL,
															  PRIMARY KEY (`wlc_id`),
															  KEY `form_id` (`form_id`,`target_rule_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//2. Alter ap_settings table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."settings` 
														  ADD COLUMN `enforce_tsv` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `enable_ip_restriction` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `ip_whitelist` text,
														  ADD COLUMN `enable_account_locking` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `account_lock_period` int(11) NOT NULL DEFAULT '30',
														  ADD COLUMN `account_lock_max_attempts` int(11) NOT NULL DEFAULT '6',
														  ADD COLUMN `default_form_theme_id` int(11) NOT NULL DEFAULT '0';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//3. Alter ap_users table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."users` 
														  ADD COLUMN `tsv_enable` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `tsv_secret` varchar(16) DEFAULT NULL,
														  ADD COLUMN `tsv_code_log` varchar(100) DEFAULT NULL,
														  ADD COLUMN `login_attempt_date` datetime DEFAULT NULL,
														  ADD COLUMN `login_attempt_count` int(11) NOT NULL DEFAULT '0';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//4. Alter ap_forms table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."forms` 
														  ADD COLUMN `logic_webhook_enable` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `form_custom_script_enable` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `form_custom_script_url` text;";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//5. Alter ap_webhook_options table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."webhook_options` 
														  ADD COLUMN `rule_all_any` varchar(3) NOT NULL DEFAULT 'all';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//6. Update 'session_id' length on all ap_form_x_review tables. Set the length to 128 instead of 100. 
		$query = "select `form_id` from ".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
				
		$form_id_array = array();
		while($row = mf_do_fetch_result($sth)){
			$form_id = $row['form_id'];
			$form_id_array[] = $form_id;
		}
				
		foreach ($form_id_array as $form_id) {
			$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_{$form_id}_review` CHANGE `session_id` `session_id` VARCHAR(128) NULL;";
			
			$params = array();
			$sth = $dbh->prepare($query);
			try{
				$sth->execute($params);
			}catch(PDOException $e) {
				//do nothing, ignore if table review not exist
			}
		}

		//7. Run several UPDATE queries
		$misc_update_query_array = array();

		$misc_update_query_array[] = "ALTER TABLE `".MF_TABLE_PREFIX."field_logic_conditions` ADD INDEX (`form_id`,`target_element_id`)";
		$misc_update_query_array[] = "ALTER TABLE `".MF_TABLE_PREFIX."email_logic_conditions` ADD INDEX (`form_id`,`target_rule_id`)";
		$misc_update_query_array[] = "ALTER TABLE `".MF_TABLE_PREFIX."page_logic_conditions` ADD INDEX (`form_id`,`target_page_id`)";
		$misc_update_query_array[] = "UPDATE ".MF_TABLE_PREFIX."form_themes SET field_bg_color='#FBFBFB' WHERE field_bg_color = '#ffffff' and theme_id <= 22";
		$misc_update_query_array[] = "UPDATE ".MF_TABLE_PREFIX."form_themes SET border_form_width=0 WHERE border_form_width=1 and theme_id <= 22";
		
		foreach ($misc_update_query_array as $query) {
			$params = array();
			$sth = $dbh->prepare($query);
			try{
				$sth->execute($params);
			}catch(PDOException $e) {
				$post_install_error .= $e->getMessage().'<br/><br/>';
			}
		}

		return $post_install_error;
	}

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	function do_delta_update_4_2_to_4_2_3($dbh,$options=array()){
		//there is no database changes between 4.2 to 4.2.3
		//only the version number need to be changed

		return '';
	}

	/***************************************************************************
	 Changelog 4.2.3 to 4.3 												   
	 - ap_settings: added column 'recaptcha_site_key','recaptcha_secret_key','ldap_enable','ldap_type','ldap_host','ldap_port','ldap_encryption','ldap_basedn','ldap_account_suffix','ldap_required_group','ldap_exclusive'
	  
	 - run these queries:
			ALTER TABLE `ap_form_payments` ADD INDEX (`form_id`,`record_id`);
	***************************************************************************/

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	
	function do_delta_update_4_2_3_to_4_3($dbh,$options=array()){

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//1. Alter ap_settings table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."settings` 
														  ADD COLUMN `recaptcha_site_key` varchar(255) DEFAULT NULL,
														  ADD COLUMN `recaptcha_secret_key` varchar(255) DEFAULT NULL,
														  ADD COLUMN `ldap_enable` tinyint(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `ldap_type` varchar(11) NOT NULL DEFAULT 'ad' COMMENT 'ad,openldap',
														  ADD COLUMN `ldap_host` varchar(255) DEFAULT NULL,
														  ADD COLUMN `ldap_port` int(11) NOT NULL DEFAULT '389',
														  ADD COLUMN `ldap_encryption` varchar(11) NOT NULL DEFAULT 'none' COMMENT 'none,ssl,tls',
														  ADD COLUMN `ldap_basedn` varchar(255) DEFAULT NULL,
														  ADD COLUMN `ldap_account_suffix` varchar(100) DEFAULT NULL,
														  ADD COLUMN `ldap_required_group` varchar(255) DEFAULT NULL,
														  ADD COLUMN `ldap_exclusive` tinyint(1) NOT NULL DEFAULT '0';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//2. Run several UPDATE queries
		$misc_update_query_array = array();

		$misc_update_query_array[] = "ALTER TABLE `".MF_TABLE_PREFIX."form_payments` ADD INDEX (`form_id`,`record_id`)";
		
		foreach ($misc_update_query_array as $query) {
			$params = array();
			$sth = $dbh->prepare($query);
			try{
				$sth->execute($params);
			}catch(PDOException $e) {
				$post_install_error .= $e->getMessage().'<br/><br/>';
			}
		}

		return $post_install_error;
	}

	/***************************************************************************
	 Changelog 4.3 to 4.4 												   
	 - ap_forms: added columns 'esl_pdf_enable','esl_pdf_content','esr_pdf_enable','esr_pdf_content','form_name_hide','form_unique_ip_maxcount','form_unique_ip_period'
	 - ap_email_logic: added columns 'custom_pdf_enable', 'custom_pdf_content','delay_notification_until_paid'
	 - ap_webhook_options: added columns 'delay_notification_until_paid'
	 - ap_form_elements: added columns 'element_is_readonly','element_choice_limit_rule','element_choice_limit_qty',
									  'element_choice_limit_range_min','element_choice_limit_range_max','element_enable_placeholder',
									  'element_choice_max_entry'
	 - ap_report_elements: added columns 'chart_grid_sort_by'

	 run this query to all ap_form_XX tables:
	 --------
	 ALTER TABLE `ap_form_XXXX` ADD INDEX (`ip_address`);
	 ALTER TABLE `ap_form_XXXX` ADD INDEX (`date_created`);

	 run this single query:
	 ----------------
	 1) update ap_forms set payment_enable_merchant = 0 where payment_enable_merchant = -1
	 2) ALTER TABLE `ap_forms` CHANGE `payment_enable_merchant` `payment_enable_merchant` INT(1)  NOT NULL  DEFAULT '0';

	 tasks:
	 ------
	 loop through each "form_unique_ip" records, if the value is 1, set 'form_unique_ip_period' to 'l' (lifetime) and set 'form_unique_ip_maxcount' to 1

	 Add the following CSS code to all view.css files:
	--------
	#main_body form li div span.label
	{
		clear:both;
		color:#444;
		display:block;
		font-size:85%;
		line-height:15px;
		margin:0;
		padding-top:3px;
	}

	#main_body form li div span.label var
	{
		font-style: normal;
		font-weight: bold;
	}
	#main_body span.description
	{
		border:none;
		color:#444;
		display:block;
		font-size:95%;
		font-weight:700;
		line-height:150%;
		padding:0 0 1px;
		float: none;
	}

	#main_body form.left_label span.description{
		float: left;
		margin: 0 15px 0 0;
		width: 29%;
	}

	#main_body form.right_label span.description{
		float: left;
		margin: 0 15px 0 0;
		width: 29%;
		text-align: right;
	}
	.no_guidelines form.left_label span.description,
	.no_guidelines form.right_label span.description{
		width: 30% !important;
	}
	#main_body form li fieldset{
		margin: 0;
		padding:0;
		border: none;
	}
	--------
	***************************************************************************/

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	
	function do_delta_update_4_3_to_4_4($dbh,$options=array()){

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//1. Alter ap_forms table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."forms` 
														  ADD COLUMN `esl_pdf_enable` tinyint(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `esl_pdf_content` mediumtext,
														  ADD COLUMN `esr_pdf_enable` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `esr_pdf_content` mediumtext,
														  ADD COLUMN `form_name_hide` tinyint(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `form_unique_ip_maxcount` int(11) NOT NULL DEFAULT '5',
														  ADD COLUMN `form_unique_ip_period` char(1) NOT NULL DEFAULT 'd' COMMENT 'h,d,w,m,y,l (hour/day/week/month/year/lifetime)';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//2. Alter ap_email_logic table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."email_logic` 
														  ADD COLUMN `custom_pdf_enable` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `custom_pdf_content` text,
														  ADD COLUMN `delay_notification_until_paid` int(1) NOT NULL DEFAULT '0';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//3. Alter ap_webhook_options table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."webhook_options` 
														  ADD COLUMN `delay_notification_until_paid` int(1) NOT NULL DEFAULT '0';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//4. Alter ap_form_elements table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_elements` 
														  ADD COLUMN `element_is_readonly` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_choice_limit_rule` varchar(12) NOT NULL DEFAULT 'atleast',
														  ADD COLUMN `element_choice_limit_qty` int(11) NOT NULL DEFAULT '1',
														  ADD COLUMN `element_choice_limit_range_min` int(11) NOT NULL DEFAULT '1',
														  ADD COLUMN `element_choice_limit_range_max` int(11) NOT NULL DEFAULT '1',
														  ADD COLUMN `element_enable_placeholder` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `element_choice_max_entry` int(11) NOT NULL DEFAULT '0';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//5. Alter ap_report_elements table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."report_elements` 
														  ADD COLUMN `chart_grid_sort_by` varchar(100) NOT NULL DEFAULT 'id-desc';";
														  
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//6. Add indexes (ip_address, date_created) on all ap_form_x tables
		$query = "select `form_id` from ".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
				
		$form_id_array = array();
		while($row = mf_do_fetch_result($sth)){
			$form_id = $row['form_id'];
			$form_id_array[] = $form_id;
		}
				
		foreach ($form_id_array as $form_id) {
			$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_{$form_id}` ADD INDEX (`ip_address`);";
			
			$params = array();
			$sth = $dbh->prepare($query);
			try{
				$sth->execute($params);
			}catch(PDOException $e) {
				//do nothing, ignore if table review not exist
			}
		}

		foreach ($form_id_array as $form_id) {
			$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_{$form_id}` ADD INDEX (`date_created`);";
			
			$params = array();
			$sth = $dbh->prepare($query);
			try{
				$sth->execute($params);
			}catch(PDOException $e) {
				//do nothing, ignore if table review not exist
			}
		}

		//7. Run several UPDATE queries
		$misc_update_query_array = array();

		$misc_update_query_array[] = "UPDATE ".MF_TABLE_PREFIX."forms set payment_enable_merchant = 0 WHERE payment_enable_merchant = -1";
		$misc_update_query_array[] = "UPDATE ".MF_TABLE_PREFIX."forms set form_unique_ip_period = 'l',form_unique_ip_maxcount = 1 WHERE form_unique_ip = 1";
		$misc_update_query_array[] = "ALTER TABLE `".MF_TABLE_PREFIX."forms` CHANGE `payment_enable_merchant` `payment_enable_merchant` INT(1)  NOT NULL  DEFAULT '0'";
		
		foreach ($misc_update_query_array as $query) {
			$params = array();
			$sth = $dbh->prepare($query);
			try{
				$sth->execute($params);
			}catch(PDOException $e) {
				$post_install_error .= $e->getMessage().'<br/><br/>';
			}
		}
		
		//8. Loop through each view.css file and add new code
		$new_css_code = <<<EOT
#main_body form li div span.label
{
	clear:both;
	color:#444;
	display:block;
	font-size:85%;
	line-height:15px;
	margin:0;
	padding-top:3px;
}

#main_body form li div span.label var
{
	font-style: normal;
	font-weight: bold;
}
#main_body span.description
{
	border:none;
	color:#444;
	display:block;
	font-size:95%;
	font-weight:700;
	line-height:150%;
	padding:0 0 1px;
	float: none;
}

#main_body form.left_label span.description{
	float: left;
	margin: 0 15px 0 0;
	width: 29%;
}

#main_body form.right_label span.description{
	float: left;
	margin: 0 15px 0 0;
	width: 29%;
	text-align: right;
}
.no_guidelines form.left_label span.description,
.no_guidelines form.right_label span.description{
	width: 30% !important;
}
#main_body form li fieldset{
	margin: 0;
	padding:0;
	border: none;
}
EOT;
		foreach ($form_id_array as $form_id) {
			$target_css_file = $mf_settings['data_dir']."/form_{$form_id}/css/view.css";
			if(file_exists($target_css_file) && is_writable($target_css_file)){
				file_put_contents($target_css_file, $new_css_code, FILE_APPEND);
			}
		}

		return $post_install_error;
	}

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	function do_delta_update_4_4_to_4_5($dbh,$options=array()){
		//there is no database structure changes between 4.4 to 4.5
		//only the version number need to be changed

		return '';
	}

	/***************************************************************************
	 Changelog 4.5 to 4.6

	 new tables:
		- ap_success_logic_conditions
		- ap_success_logic_options
	
	 modified tables:
		- ap_forms: added columns 'payment_enable_setupfee','payment_setupfee_amount','logic_success_enable','esl_bcc_email_address',
								  'esr_bcc_email_address','form_resume_subject','form_resume_content','form_resume_from_name',
								  'form_resume_from_email_address'
		- ap_email_logic: added columns 'custom_bcc'
	***************************************************************************/

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	
	function do_delta_update_4_5_to_4_6($dbh,$options=array()){

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//1. Create table ap_success_logic_conditions
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."success_logic_conditions` (
												    		  `slc_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `target_rule_id` int(11) NOT NULL,
															  `element_name` varchar(50) NOT NULL DEFAULT '',
															  `rule_condition` varchar(15) NOT NULL DEFAULT 'is',
															  `rule_keyword` varchar(255) DEFAULT NULL,
															  PRIMARY KEY (`slc_id`),
															  KEY `form_id` (`form_id`,`target_rule_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//2. Create table ap_success_logic_options
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."success_logic_options` (
												    		  `slo_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `form_id` int(11) NOT NULL,
															  `rule_id` int(11) NOT NULL DEFAULT '0',
															  `rule_all_any` varchar(3) NOT NULL DEFAULT 'all',
															  `success_type` varchar(11) NOT NULL DEFAULT 'message' COMMENT 'message;redirect',
															  `success_message` text,
															  `redirect_url` text,
															  PRIMARY KEY (`slo_id`)
															) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		
		//3. Alter ap_forms table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."forms` 
														  ADD COLUMN `payment_enable_setupfee` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_setupfee_amount` decimal(62,2) NOT NULL DEFAULT '0.00',
														  ADD COLUMN `logic_success_enable` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `esl_bcc_email_address` text,
														  ADD COLUMN `esr_bcc_email_address` text,
														  ADD COLUMN `form_resume_subject` text,
														  ADD COLUMN `form_resume_content` mediumtext,
														  ADD COLUMN `form_resume_from_name` text,
														  ADD COLUMN `form_resume_from_email_address` varchar(255) DEFAULT '';";

		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//4. Alter ap_email_logic table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."email_logic` ADD COLUMN `custom_bcc` text";

		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}


		return $post_install_error;
	}

	/***************************************************************************
	 Changelog 4.6 to 4.7

	 modified tables:
		- ap_forms: added columns 'payment_stripe_enable_receipt','payment_stripe_receipt_element_id'
		- ap_permissions: added columns 'edit_report'
		- ap_form_elements: added columns 'element_text_default_type','element_text_default_length','element_text_default_random_type',
								  'element_text_default_prefix','element_text_default_case'

	 run this single query:
	 ---------------- 
	 update ap_permissions set edit_report = edit_form;
	
	 add the following CSS code to all view.css files:
	 ---------
	 #main_body form.left_label li div.mf_sig_wrapper, #main_body form.right_label li div.mf_sig_wrapper
	 {
		float: left;
		width: 309px;
	 }
	 #main_body form.left_label li .mf_sigpad_clear, #main_body form.right_label li .mf_sigpad_clear
	 {
		float: left;
	 }
	 ---------
	***************************************************************************/

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	
	function do_delta_update_4_6_to_4_7($dbh,$options=array()){

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//1. Alter ap_forms table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."forms` 
														  ADD COLUMN `payment_stripe_enable_receipt` int(1) NOT NULL DEFAULT '0',
														  ADD COLUMN `payment_stripe_receipt_element_id` int(11) DEFAULT NULL;";

		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//2. Alter ap_permissions table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."permissions` ADD COLUMN `edit_report` tinyint(1) NOT NULL DEFAULT '0'";

		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//3. Alter ap_form_elements table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."form_elements` 
														  ADD COLUMN `element_text_default_type` varchar(6) NOT NULL DEFAULT 'static',
														  ADD COLUMN `element_text_default_length` int(11) NOT NULL DEFAULT '10',
														  ADD COLUMN `element_text_default_random_type` varchar(8) NOT NULL DEFAULT 'letter',
														  ADD COLUMN `element_text_default_prefix` varchar(50) DEFAULT NULL,
														  ADD COLUMN `element_text_default_case` char(1) NOT NULL DEFAULT 'u';";

		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//4. run single query to update ap_permissions
		$query = "UPDATE ".MF_TABLE_PREFIX."permissions SET edit_report = edit_form;";

		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//5. Loop through the view.css file of each form and add new code
		$query = "select `form_id` from ".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
				
		$form_id_array = array();
		while($row = mf_do_fetch_result($sth)){
			$form_id = $row['form_id'];
			$form_id_array[] = $form_id;
		}

		$new_css_code = <<<EOT
#main_body form.left_label li div.mf_sig_wrapper, #main_body form.right_label li div.mf_sig_wrapper
{
	float: left;
	width: 309px;
}
#main_body form.left_label li .mf_sigpad_clear, #main_body form.right_label li .mf_sigpad_clear
{
	float: left;
}
EOT;
		foreach ($form_id_array as $form_id) {
			$target_css_file = $mf_settings['data_dir']."/form_{$form_id}/css/view.css";
			if(file_exists($target_css_file) && is_writable($target_css_file)){
				file_put_contents($target_css_file, $new_css_code, FILE_APPEND);
			}
		}

		return $post_install_error;
	}

	/***************************************************************************
	 Changelog 4.7 to 4.8

	 modified tables:
	 -----------
	 - ap_settings: added column 'timezone'
	 - ap_users: added column 'reset_hash','reset_date'

	 new tables:
	 -----------
	 - ap_form_themes_files

	 add the following CSS code to all view.css files:
	 ---------
	 #main_body form li.error span.description
	 {
		color:#DF0000 !important;
	 }
	 ---------
	***************************************************************************/

	//this function or any other do_delta_update_xxx functions should never call the create_xxx_tables functions
	//because those create_xxx_tables are intended for new installations and the structure might be changed over time
	
	function do_delta_update_4_7_to_4_8($dbh,$options=array()){

		$post_install_error = '';

		$mf_settings = mf_get_settings($dbh);

		//1. Alter ap_settings table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."settings` ADD COLUMN `timezone` varchar(100) DEFAULT NULL;";

		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//2. Alter ap_users table. Add new columns
		$query = "ALTER TABLE `".MF_TABLE_PREFIX."users` 
														  ADD COLUMN `reset_hash` varchar(100) DEFAULT NULL,
														  ADD COLUMN `reset_date` datetime DEFAULT NULL;";

		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//3. Create table ap_form_themes_files
		$query = "CREATE TABLE `".MF_TABLE_PREFIX."form_themes_files` (
													  		  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
															  `file_name` text NOT NULL,
															  `file_content` longblob,
															  PRIMARY KEY (`id`),
															  KEY `file_name` (`file_name`(255))
													) DEFAULT CHARACTER SET utf8;";
		$params = array();
		$sth = $dbh->prepare($query);
		try{
			$sth->execute($params);
		}catch(PDOException $e) {
			$post_install_error .= $e->getMessage().'<br/><br/>';
		}

		//4. Loop through the view.css file of each form and add new code
		$query = "select `form_id` from ".MF_TABLE_PREFIX."forms";
		$params = array();
		$sth 	= mf_do_query($query,$params,$dbh);
				
		$form_id_array = array();
		while($row = mf_do_fetch_result($sth)){
			$form_id = $row['form_id'];
			$form_id_array[] = $form_id;
		}

		$new_css_code = <<<EOT
#main_body form li.error span.description
{
	color:#DF0000 !important;
}
EOT;
		foreach ($form_id_array as $form_id) {
			$target_css_file = $mf_settings['data_dir']."/form_{$form_id}/css/view.css";
			if(file_exists($target_css_file) && is_writable($target_css_file)){
				file_put_contents($target_css_file, $new_css_code, FILE_APPEND);
			}
		}

		return $post_install_error;
	}

?>