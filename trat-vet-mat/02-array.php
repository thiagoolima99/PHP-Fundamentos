<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
        <table border="1">
    <?php
        
        $v = array ("nome" => "Ana", "idade" => 23, "peso" => 65.5);
        
        foreach($v as $k => $c) {
            echo "O campo $k possui o conteudo $c </br>";
        }

           
    ?>
        </table>	
    </pre>
</div>
</body>
</html>
 