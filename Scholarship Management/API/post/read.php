<?php 

	//Headers
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');
	header('accept-encoding: gzip, deflate');
	header('accept-language:en-US,en;q=0.8');

	include_once '../config/Database.php';
	include_once '../model/post.php';

	//Instantiate DB & Connect

	$database = new Database(); // THis is the Error Line
	$db = $database->connect();

	//Instantiate Post Object
	$post = new Post($db);

	//Post Query
	$result = $post->read();
	$num = $result->rowCount();

	//Checking for Post
	if ($num>0){
		//Post
		$posts_arr = array();
		$posts_arr['data'] = array();


		$res = $result->fetchAll(PDO::FETCH_ASSOC);

		$e = [];

		//this line is to get the records back
		foreach ($res as $data) {
			// code...
			array_push($e, $data);
		}

		http_response_code(200);
		$data = [
			"status" => "success",
			"data" => $e
		];

		echo json_encode($data);

	} else{
		// NO Posts
		http_response_code(400);
		$data = [
			"status" => "error",
			"message" => "No Post Found"
		];

		echo json_encode($data);
	}

?>