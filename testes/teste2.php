<?php
//Recuperando a sessão criada

session_start();

echo session_id();

// Exibindo dados de uma variavellde sessão:
echo $_SESSION["nome"];


?>