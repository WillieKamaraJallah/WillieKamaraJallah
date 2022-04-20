<?php
	
	class Post{
		//Database Items
	private $conn;
	private $table = 'scholarship';

	//Post Properties
	public $id;
	public $institute;
	public $address;
	public $about;
	public $link;
	public $elibiblity;
	public $deadline;
	public $type;
	public $level;

	//Constructor with DB
	public function __construct($db){
		$this->conn = $db;
	}

	// Get Posts
	public function read(){
		// Creating Query
		$query = "SELECT * FROM `scholarship`";

             // Prepare statement
      $stmt = $this->conn->prepare($query);

      //Execute Query
      $stmt->execute();

      return $stmt;
	}
	}
?>