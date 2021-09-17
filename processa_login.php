<?php

require("./funcoes.php");

session_start();

realizarLogin($usuario, $senha, $dados);


?>

<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de inicio</title>
</head>
<body>
    <h1>Login efetuado com sucesso</h1>
</body>
</html>