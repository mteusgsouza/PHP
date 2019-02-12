<?php
	//estabelece a conecção com o BD
	$conn = new mysqli('localhost', 'root', '', 'bookstore');
 
	$data = array();
	$sql = "SELECT * FROM books";
	$query = $conn->query($sql);
	while($row = $query->fetch_assoc()){
		$data[] = $row;
	}
 
	//converte em json
	$data = json_encode($data);
 
	//cria um arquivo json 
	$filename = '../model/bookstore.json';
	if(file_put_contents($filename, $data)){
		echo 'arquivo Json criado com sucesso';
	} 
	else{
		echo 'Erro ao criar Json';
	}
 
?>