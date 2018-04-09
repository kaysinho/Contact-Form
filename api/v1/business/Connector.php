<?php
/**
 * 
 * @package business
 * @author Jhonantan Plata - jhonatan_plata@hotmail.com
 * @since 2018
 */
error_reporting(1);

class Connector {
	
	/**
     * Pass the connection data
     */
     
	public function init(){
		return new mysqli("localhost","kaysinho","14122009","contact-form-db"); //Dev enrironment
		//return new mysqli("localhost","id1171371_kaysinho","14122009","id1171371_pruebas"); //Prod enrironment 000webhost
	}
}
?>