<?php
//pega o index pela URL
$index = $_GET['index'];

//pega os dados do json 
$data = file_get_contents('../model/bookstore.json');
$data_array = json_decode($data);

//atribui ao index o dado selecionado na tabela
$row = $data_array[$index];

?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8">
		<link href="../view/css/bootstrap.min.css" rel="stylesheet">
        <script src="../view/js/bootstrap.min.js"></script>
        <title>Editar Livro</title>
    </head>
    <body>
        <div class="container">
            <div class="span10 offset1">
                <div class="row">
                    <h3>Editar Livro</h3>
                </div>
                <form class="form-horizontal"  method="POST">
                    <p>
                        <label for="id">ID</label>
                        <input type="text" id="id" name="id" value="<?php echo $row->id; ?>">
                    </p>
                    <p>
                        <label for="title">Titulo</label>
                        <input type="text" id="title" name="title" value="<?php echo $row->title; ?>">
                    </p>
                    <p>
                        <label for="genre">Gênero</label>
                        <input type="text" id="genre" name="genre" value="<?php echo $row->genre; ?>">
                    </p>
                    <p>
                        <label for="publishDate">Data de Publicação</label>
                        <input type="text" id="publishDate" name="publishDate" value="<?php echo $row->publishDate; ?>">
                    </p>
                    <input class="btn btn-success" type="submit" name="save" value="Save">
                    <a class="btn" href="../index.php">Voltar</a>
                </form>

                <?php
                if(isset($_POST['save'])){
                //define os dados editados
                $input = array(
                'id' => $_POST['id'],
                'title' => $_POST['title'],
                'genre' => $_POST['genre'],
                'publishDate' => $_POST['publishDate'],
                );

                //atualiza o index
                $data_array[$index] = $input;

                //codifica o json
                $data = json_encode($data_array, JSON_PRETTY_PRINT);
                file_put_contents('../model/bookstore.json', $data);

                header('location: ../index.php');
                }
                ?>
            </div>
        </div>
    </body>
</html>