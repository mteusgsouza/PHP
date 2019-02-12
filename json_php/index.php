<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link   href="view/css/bootstrap.min.css" rel="stylesheet">
    <script src="view/js/bootstrap.min.js"></script>
	<title>CRUD JSON com PHP</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<p>
			</p>
			<a href="controller/add.php" class="btn btn-success">Cadastrar Livro</a><p>
			<table class="table table-striped table-bordered">
				<thead>
					<th>ID</th>
					<th>Título</th>
					<th>Gênero</th>
					<th>Data de Publicação</th>
					<th>Ação</th>
				</thead>
				<tbody>
					<?php
						//busca os dados do json
						$data = file_get_contents('model/bookstore.json');
						//decodifica no php o array
						$data = json_decode($data);

						$index = 0;
						foreach($data as $row){
							echo '<tr>';
							echo '<td>'.$row->id.'</td>';
							echo '<td>'.$row->title.'</td>';
							echo '<td>'.$row->genre.'</td>';
							echo '<td>'.$row->publishDate.'</td>';
							echo '<td width=250>';
							echo '<a class="btn" href="controller/edit.php?index='.$index.'">Edit</a>';
							echo ' ';
							echo '<a class="btn btn-success" href="controller/delete.php?index='.$index.'">Delete</a>';
							echo '</td>';
							echo '</tr>';
							$index++;
						}
					?>
				</tbody>
			</table>
		</div>	
	</div>
</body>
</html>