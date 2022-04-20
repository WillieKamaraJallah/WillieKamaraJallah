<?php

/**
 Database Parameter 
 */
class Database
{
	private  $host = 'localhost';
	private  $db_name = 'james';
	private  $username = 'root';
	private  $password = '';
	private  $conn;
	
	//Database Connection
	public function connect(){
		

		try {
			$this->conn = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name,
				$this->username, $this->password);

			//$this->conn=setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $this->conn;

		} catch (PDOException $e) {
			echo 'Unable to Connect:'.$e->getMessage();
		}

		
	}
}
	
 ?>