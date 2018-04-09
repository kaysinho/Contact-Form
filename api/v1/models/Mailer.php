<?php

/**
 * 
 * @package models
 * @author Jhonantan Plata - jhonatan_plata@hotmail.com
 * @since 2018
 */

error_reporting(1);

class Mailer {
	
	/**
     * Send mail
     * @param String $to
	 * @param String $from
     * @param String $subject
     * @param String $message
     */	
	public function send($to,$subject,$from,$name,$message){  
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
                $headers .= 'To: Formulario de Contacto <'.$to.'>'."\r\n";
                $headers .= 'From: '.$name.' <'.$from.'>' . "\r\n";
                mail($to, $subject, $message,$headers);
	}

}


?>