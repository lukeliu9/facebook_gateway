<?php 
	error_reporting(0);
	/*****************Application API / SECRET KEY*****************/
	$app_id		= "FB APP ID";   //Provided from facebook app				
	$secret  	= "FB APP SECRET";  //Provided from facebook app
	
	include_once 'facebook.php';
	$facebook = new Facebook(array('appId'=>$app_id, 'secret'=>$secret, 'cookie'=>true));
	
	
	$signed_request = $facebook->getSignedRequest();
	
	$page_id 	 = $signed_request["page"]["id"];        
	$page_admin  = $signed_request["page"]["admin"];
	$like_status = $signed_request["page"]["liked"];
	
	/************************************************************************/

	$title = "Your App Title Here";  //For example, my 25% off coupon code gateway was called "Discount Code"
?>
   
