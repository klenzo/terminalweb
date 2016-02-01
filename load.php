<?php
	if(isset($_POST['command'])){
		$reponse = $_POST['command'];
		echo json_encode(['reponse' => $reponse]);
	}else{
		echo json_encode(['reponse' => 'Commande incorrect !']);
	}
