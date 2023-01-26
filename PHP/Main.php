<?php

require_once ('Contas.php'); //conectei as classes

$conta = new Conta ("12345678910", "Camila Pereira de oliveira", 1000000); //instanciar a contas
$conta-> imprimir(); 

echo "<br><br>";
$saque = new Conta ("12345678911","Rafaela", 500000);

//realizando saque 
echo "<br><br>";
$conta->sacar($conta,500000);
$conta->imprimir();

//realizando deposito
echo "<br><br>";
$conta->depositar($conta,100000);
$conta->imprimir();


//realizar transferencia
echo"<br><br>";
$conta->transferir($saque, $conta,200000);
$conta->imprimir();

echo"<br><br>";
$saque->imprimir();

?>