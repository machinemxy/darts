<?php
class Connector{
	var $result="";
	var $link=0;
	var $ip=SAE_MYSQL_HOST_M;
	var $user=SAE_MYSQL_USER;
	var $password=SAE_MYSQL_PASS;
	var $db=SAE_MYSQL_DB;
	
	function connect(){
		//connect mysql
		$this->link=mysql_connect($this->ip.":".SAE_MYSQL_PORT,$this->user,$this->password);
		if(!$this->link){
			die("connect failed");
		}
		
		//select database
		$get_db=mysql_select_db($this->db,$this->link);
		if(!$get_db){
			mysql_close($this->link);
			die("database error");
		}
		
		//set characterset
		mysql_query("set names 'utf8'");
	}
	
	function disconnect(){
		mysql_close($this->link);
	}
	
	function query($str){
		$this->result=mysql_query($str,$this->link);
	}
}
?>