<?php

class Math extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function multiply($num1, $num2){
		$result = $num1 * $num2;
		
		return $result
	}
	
	function divide($num1, $num2){
		$result = $num2 / $num1;
		
		return $result
	}

}