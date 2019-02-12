<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once 'ContaBanco.php';

            $jubiloso = new ContaBanco();
            $creuzuda = new ContaBanco();

            $jubiloso->setNumConta(01);
            $jubiloso->setDono("Jubiloso");
            $jubiloso->abrirConta("CC");

            $creuzuda->setNumConta(02);
            $creuzuda->setDono("Creuza");
            $creuzuda->abrirConta("CP");

            $jubiloso->depositar(300);
            $creuzuda->depositar(500);
            
            
            $jubiloso->pagarMensal();
            $creuzuda->pagarMensal();
            
            $jubiloso->sacar(338);
            $creuzuda->sacar(630);
            
            $jubiloso->fecharConta();
            $creuzuda->fecharConta();
            
            
            
            print_r($jubiloso);
            print_r($creuzuda);
            ?>
        </pre>
    </body>
</html>
