<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/*! Common Helper
	* ================
	* Common Helper application file for All Common function . 
	* This fileshould be included in all pages.  
	* @Author  :  Manish Kumar
	* @Created :  01 Nov 2019
	*/
	
	
	function date_formate($date){
		   
		 return date_format(date_create($date),'d-M-Y ,h:i:s A');
		 
	} 

   
	
	function slug($string){
      $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
     return $slug;
     }
	 
	function encode($data) { 
	return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
	} 

	function decode($data) { 
	return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
	}

	function nicetime($date){
		if(empty($date)) {
			return "No date provided";
		}
		
		$periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
		$lengths         = array("60","60","24","7","4.35","12","10");
		
		$now             = time();
		$unix_date         = strtotime($date);
		
			// check validity of date
		if(empty($unix_date)) {    
			return "Bad date";
		}

		// is it future date or past date
		if($now > $unix_date) {    
			$difference     = $now - $unix_date;
			$tense         = "ago";
			
		} else {
			$difference     = $unix_date - $now;
			$tense         = "Just Now";
		}
		
		for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
			$difference /= $lengths[$j];
		}
		
		$difference = round($difference);
		
		if($difference != 1) {
			$periods[$j].= "s";
		}
		
		return "$difference $periods[$j] {$tense}";
	}
	
	
	
	
	
	
	  
?>