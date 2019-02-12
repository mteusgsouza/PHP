<?php

require_once 'Pokemon.php';

class Luta {

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

//metodos publicos
    function marcarLuta($pkm1, $pkm2) {
        if ($pkm1->getCategoria() === $pkm2->getCategoria() && ($pkm1 != $pkm2)) {
            $this->aprovada = true;
            $this->desafiado = $pkm1;
            $this->desafiante = $pkm2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    function lutar() {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: //empate
                    echo"<p>Empate</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1: //desafiado vence
                    echo "<p>Vitoria do desafiado: " . $this->desafiado->getNome()."</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2://desafiante vence
                    echo "<p>Vitoria do desafiante: " . $this->desafiante->getNome()."</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "<p>A luta não foi aprovada</p>";
        }
    }

//metodos especiais
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovada() {
        return $this->aprovada;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

}
