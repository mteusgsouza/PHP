<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Pokemon.php';
        require_once 'Luta.php';

        $pkm = array();
        $pkm[0] = new Pokemon("Charizard", "Kanto", "fogo", 1.7, 90.5, 12, 2, 0);
        $pkm[1] = new Pokemon("Blastoise", "Kanto", "água", 1.6, 85.5, 8, 3, 2);
        $pkm[2] = new Pokemon("Venusaur", "Kanto", "grama", 2, 100, 12, 0, 2);
        $pkm[3] = new Pokemon("Greninja", "Kalos", "água", 1.5, 40, 14, 0, 0);
        $pkm[4] = new Pokemon("Serperior", "Unova", "grama", 3.3, 63, 8, 4, 2);

        $pkmFight1 = new Luta();
        $pkmFight1->marcarLuta($pkm[1], $pkm[3]);
        $pkmFight1->lutar();
        
        $pkm[1]->status();
        $pkm[0]->status();
        ?>
    </body>
</html>
