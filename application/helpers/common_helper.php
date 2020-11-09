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
?>