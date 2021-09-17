<?php

// Criando sessões:
session_start();

//Verificando o id por sessão:
echo session_id();

// Criando variaveis de sessão:

$_SESSION["nome"] = " Cristiano Correa de Moraes";

$nome = " Cristiano Correa de Moraes";

echo $nome

?>