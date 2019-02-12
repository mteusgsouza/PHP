<?php
	//pega o index
	$index = $_GET['index'];

	//chama os dados do json
	$data = file_get_contents('../model/bookstore.json');
	$data = json_decode($data);

	//deleta a linha pelo index
	unset($data[$index]);

	//codifca pro json
	$data = json_encode($data, JSON_PRETTY_PRINT);
	file_put_contents('../model/bookstore.json', $data);

	header('location: ../index.php');
?>