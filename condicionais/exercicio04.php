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
         $estados = $_GET["estados"];

         switch ($estados) {
      
          case 'norte':
         
          echo "Região Norte";
      
          break;
      
          case 'nordeste':
      
          echo "Região Nordeste";
      
          break;
      
          case 'centro-oeste':
      
          echo "Região Centro-Oeste";
          break;
      
          case 'sudeste':
      
          echo "Região Sudeste";
          break;
      
          case 'sul':
      
          echo "Região Sul";
          break;
      
          default:
          echo "Nenhum estado definido";
          break;
         }
    ?>
    <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
</div>
</body>
</html>
 