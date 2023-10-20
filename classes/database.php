<?php

/**
 *  
 */
class Database
{
	private $conn;

	public function __construct()
	{
		$this->conn = $this->connect();
	}
	private function connect()
	{
		$strings = "mysql:host=localhost,dbhost:livechatapp";
		try{
			$dbconnect = new PDO($strings, DBUSER, DBPASS);
			return $dbconnect;
		}catch(PDOException  $e){
			echo $e->getMessage();
			die();
		}
		return false;
	}
}