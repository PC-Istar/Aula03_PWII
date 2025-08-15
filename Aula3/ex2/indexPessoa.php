<?php
require 'Pessoa.php';
$pessoa1 = new Pessoa();
$pessoa1->dataNascimento = "25/01/1990";
$pessoa1->nome = "Roberval Santos";

$pessoa2 = new Pessoa();
$pessoa2->dataNascimento = "13/06/1990";
$pessoa2->nome = "Antonio Faria";

$pessoa1->imprimeDados();
echo "</br>";
$pessoa2->imprimeDados();

?>
