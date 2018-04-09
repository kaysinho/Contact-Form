<?php

/**
 * 
 * @package models
 * @author Jhonantan Plata - jhonatan_plata@hotmail.com
 * @since 2018
 */

error_reporting(1);
require_once("../business/Connector.php");
require_once("../models/Mailer.php");
class Message {
	
	/**
     * Inserts a tblmessages 
     * @param String $name
	 * @param String $email
     * @param String $cellphone
     * @param String $message
     */	
	public function add($name,$email,$cellphone,$message){  

        $_connector = new Connector();
		$conn = $_connector->init();

		$insert = "INSERT INTO tblmessages (name, email, cellphone, message) VALUES ('$name','$email','$cellphone','$message')";
		
		if ($conn->query($insert) === TRUE) 
		{
			$_mailer = new Mailer();
			//jessica.vasquez@intermediosdigital.com
			$content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<title>Contact Form</title>
			</head>
			<body style="display: block; width:600px; margin:0 auto; padding:0; background:#f0f0f5">
			<h1 style="color: #5e9ca0;"><span style="color: #008080;">Formulario de Contacto&nbsp;</span></h1>
			<p>Enviado por: '.$name.'</p>
			<p>Email: <a href="mailto:'.$email.'">'.$email.'</a></p>
			<p>Celular: '.$cellphone.'</p>
			<h3><span style="color: #008080;">Mensaje:</span></h3>
			<p>'.$message.'</p>
			</body>
			</html>';

			$_mailer->send("jessica.vasquez@intermediosdigital.com", "Formulario de Contacto", $name, $email, $content);
			$_mailer->send("kaysinho@gmail.com", "Formulario de Contacto", $name, $email, $content);
			
			return '{"status":"success","message":"Message sended"}';
		}else{
			return '{"status":"fault","message":"Insert error"}';			   
		}
	}

}


?>