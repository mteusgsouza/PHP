<?php

class Pokemon {

    //Atributos
    private $nome;
    private $regiao;
    private $tipo, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    //Metodos
    function apresentar() {
        echo "<p>--------------------------------</p>";
        echo "<br>Diretamente da região de " . $this->getRegiao();
        echo "<br>Lutando como categoria " . $this->getCategoria() . ", representando os pokémons tipo " . $this->getTipo();
        echo "<br>Medindo " . $this->getAltura() . "m de altura, pesando " . $this->getPeso() . "kg";
        echo "<br>Com o historico de " . $this->getVitorias() . " vitórias, " . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
        echo "<br>" . $this->getNome() . ", eu escolho você!";
    }

    function status() {
        echo "<br>---- Historico de Lutas ----";
        echo"<br>Nome: " . $this->getNome();
        echo"<br>Categoria: " . $this->getCategoria();
        echo"<br>Vitorias: " . $this->getVitorias();
        echo"<br>Derrotas: " . $this->getDerrotas();
        echo"<br>Empates: " . $this->getEmpates();
    }

    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    //Metodos Especiais
    function __construct($nome, $regiao, $tipo, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->regiao = $regiao;
        $this->tipo = $tipo;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    function getNome() {
        return $this->nome;
    }

    function getRegiao() {
        return $this->regiao;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setRegiao($regiao) {
        $this->regiao = $regiao;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if ($this->peso <= 30) {
            $this->categoria = "invalido!";
        } elseif ($this->peso <= 10) {
            $this->categoria = "leve";
        } elseif ($this->peso <= 40) {
            $this->categoria = "médio";
        } elseif ($this->peso <= 120) {
            $this->categoria = "pesado";
        } else {
            $this->categoria = "invalido!";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

}
