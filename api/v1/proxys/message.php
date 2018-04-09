<?php
    /**
     * 
     * @package proxys
     * @author Jhonantan Plata - jhonatan_plata@hotmail.com
     * @since 2018
     */
    

    require_once("../models/Message.php");
    
    	
	$_message = new Message();
    
    $postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    
    $service = $request->service;
    $name = $request->name;
    $email = $request->email;
    $cellphone = $request->cellphone;
    $message = $request->message;


	/*
	 * 1. Add new Message
	 * */
    
	if(isset($service)){
	 	switch ($service){
			case "1":
				if(strlen($name)>0 && strlen($email)>0 && strlen($cellphone)>0 && strlen($message)>0 ){
					$response=$_message->add($name, $email, $cellphone, $message);
					echo($response);
				}else{
					echo '{"status":"fault","message":"Some fields are null","service":"1"}';
				}
			break;
            default:
	   			echo '{"status":"fault","message":"The service does not exist in message model","service":"'.$service.'"}';
	 	}
	}else{
        echo '{"status":"fault","message":"The service is requiered","service":"Not received"}';
    }
 ?> 