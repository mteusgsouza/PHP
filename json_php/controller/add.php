<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="../view/css/bootstrap.min.css" rel="stylesheet">
        <script src="../view/js/bootstrap.min.js"></script>
        <title>Cadastrar Livro</title>
    </head>
    <body>
        <div class="container">
            <div class="span10 offset1">
                <div class="row">
                    <h3>Cadastrar Livro</h3>
                </div>
                <form class="form-horizontal" method="POST">
                    <p>
                        <label for="id">ID</label>
                        <input type="text" id="id" name="id">
                    </p>
                    <p>
                        <label for="title">Título</label>
                        <input type="text" id="title" name="title">
                    </p>
                    <p>
                        <label for="genre">Gênero</label>
                        <input type="text" id="genre" name="genre">
                    </p>
                    <p>
                        <label for="publishDate">Data de Publicação</label>
                        <input type="text" id="publishDate" name="publishDate">
                    </p>

                    <input class="btn btn-success" type="submit" name="save" value="Cadastrar">
                    <a class="btn" href="../index.php">Voltar</a>
                </form>

                <?php
                if(isset($_POST['save'])){
                //abre o json
                $data = file_get_contents('../model/bookstore.json');
                $data = json_decode($data);

                //insere os dados do POST
                $input = array(
                'id' => $_POST['id'],
                'title' => $_POST['title'],
                'genre' => $_POST['genre'],
                'publishDate' => $_POST['publishDate']
                );

				//acrescenta o input ao array
				$data[] = $input;

                //codifica o json
                $data = json_encode($data, JSON_PRETTY_PRINT);
                file_put_contents('../model/bookstore.json', $data);

                header('location: ../index.php');
                }
                ?>
            </div>
        </div>
    </body>
</html>