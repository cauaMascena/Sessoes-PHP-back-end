<?php

function lerArquivo($nomeArquivo)
{
    $arquivo = file_get_contents($nomeArquivo);

    $arquivoAr = json_decode($arquivo);

    return $arquivoAr;
}

//Parametros da função:
//1º: usuario vindo do form;
//2º: senha vindo do form;
//3º: dados do arquivo json.

function realizarLogin($usuario, $senha, $dados)
{

    foreach ($dados as $dado) {


        if ($dado->usuario == $usuario && $dado->senha) {
        
          //VAriaveis de sessão:
          $_SESSION["usuario"] = $dado->usuario;
          $_SESSION["id"] = session_id();
          $_SESSION["data_hora"] = date('d/m/Y - h:i:s');

          header("location: area_rstrita.php");
          exit;
        
        } else {
            
            header("location: index.php");
            exit;
        }
    }
}
