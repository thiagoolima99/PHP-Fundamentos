<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = "   Jose da Silva   ";
        echo(strlen($nome))."</br>";
        $novo = trim($nome);
        echo "$nome"."</br>";
        echo(strlen($novo));
        // ESSA FUNÇÃO TRIM IMPOSSIBILITA A CRIAÇÃO DE USUÁRIOS IGUAIS AOS EXISTENTES MAS COM ESPAÇOS INCLUIDOS, SEJA NO COMEÇO OU NO FINAL.
        // EXEMPLO: "admin" "admin " " admin" " admin "
        // FUNÇÕES COMO LTRIM/RTRIM SÃO VULNERÁVEIS, POIS SÓ DESCONSIDERAM ESPAÇOS NO COMEÇO DA STRING(LTRIM) OU NO FIM DA STRING(RTRIM)
    
    ?>	
</div>
</body>
</html>
 
