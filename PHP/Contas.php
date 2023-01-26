<?php
class Conta{
    //area de variaveis

    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldoTitular;

    public function __construct(string $cpf, string $nome , float $saldo)
    { 
        $this-> setCpf ($cpf);
        $this-> setNome ($nome);
        $this-> setSaldo ($saldo);

    }//fim do construct 

    //métodos de acesso e modificação
    public function getCpf() : string
    {
        return $this->cpfTitular;
    }//fim do getCpf

    public function getNome() : string
    {
        return $this->nomeTitular;
    }//fim do getNome

    public function getSaldo() : float
    {
        return $this->saldoTitular;
    }//fim do getSaldo

    public function setCpf(string $cpf) : void
    {
         $this->cpfTitular = $cpf; 
    }//fim do setCpf

    public function setNome(string $nome) : void
    {
         $this->nomeTitular = $nome; 
    }//fim do setnome

    public function setSaldo(float $saldo) : void
    {
         $this->saldoTitular = $saldo; 
    }//fim do setSaldo

    public function sacar(Conta $cont, float $valor) : void
    {
        if($cont->getSaldo()>= $valor){
            $cont->setSaldo($cont->getSaldo()-$valor);
            return;//Parar a execução do método
        }
        echo "<br> Não é possível sacar $valor, pois a conta tem apenas".$cont->getSaldo()."<br>";
    }// fim do sacar


    public function depositar(Conta $cont,float $valor) : void
    {
        if($valor>0){
        $cont->setSaldo($cont->getSaldo()+$valor);
        echo "Depósito realizado com sucesso!";
        return;
        }
        echo "<br>Impossível depositar, algo de errado!<br>";
    }// fim do depositar

    public function transferir(Conta $saque, Conta $transf, float $valor) : void
    {   
        if($valor>0){
            $saque->sacar($saque,$valor);
            $transf->depositar($transf, $valor);
            echo "<br>Transferido com sucesso!<br>";
            return;
        }
        echo "<br>Impossível realizar a transferencia!<br>";

    }// fim do transferir

    //Mostrar na tela os detalhes da conta
    public function imprimir() : void 
    {
        echo "<br> CPF:".$this->getCpf()."<br> Nome:".$this->getNome()."<br> Saldo: R$".$this->getSaldo();
    }//fim do imprimir

}// fim da classe conta
?>