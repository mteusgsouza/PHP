<?php

class ContaBanco {

    //atributes   
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //methods
    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($tipo == "CC"):
            $this->setSaldo(50);
        elseif ($tipo == "CP"):
            $this->setSaldo(150);
        endif;
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0):
            echo "<p>Ainda tem saldo na conta!</p>";
        elseif ($this->getSaldo() < 0):
            echo "<p>Essa conta tá devendo!</p>";
        else: $this->setStatus(false);
            echo "<p>Conda de " . $this->getDono() . " foi fechada</p>";
        endif;
    }

    public function depositar($valor) {
        if ($this->getStatus()):
            $this->setSaldo($this->getSaldo() + $valor);
            echo "Deposito de R$" . $valor . " na conta de " . $this->getDono() . "<p>";
        else: echo "<p>Esta conta tá inativa!</p>";
        endif;
    }

    public function sacar($valor) {
        if ($this->getStatus()):
            if ($this->getSaldo() >= $valor):
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>" . $this->getDono() . ", seu saque foi autorizado</p>";
            else: echo "<p>Saldo insuficiente! " . $this->getDono() . ", seu saque de R$" . $valor . " não foi autorizado</p>";
            endif;
        else: echo "<p>Esta conta tá inativa!</p>";
        endif;
    }

    public function pagarMensal() {
        if ($this->getTipo() == "CC"):
            $valor = 12;
        elseif ($this->getTipo() == "CP"):
            $valor = 20;
        endif;
        if ($this->getStatus()):
            if ($this->getSaldo() > $valor):
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Mensalidade de R$" . $valor . " paga na conta de " . $this->getDono() . ", com sucesso!</p>";
            else: echo"<p>Saldo insuficiente</p>";
            endif;
        else: echo"<p>Conta inativa</p>";
        endif;
    }

//metodos especiais
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }

}
