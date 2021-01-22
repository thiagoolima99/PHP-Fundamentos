<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
            <?php
            
            $inicio = isset($_GET["inicio"])?$_GET["inicio"]:0;
            $final = isset($_GET["final"])?$_GET["final"]:0;
            $incremento = isset($_GET["incremento"])?$_GET["incremento"]:0;
            
            if ($inicio < $final) {
                while ($inicio <= $final) {
                    switch ($incremento) {
                        case 'inc1':
                        echo "$inicio ";
                        $inicio += 1;
                        break;

                        case 'inc1':
                            echo "$inicio ";
                            $inicio += 1;
                            break;

                        case 'inc2':
                            echo "$inicio ";
                            $inicio += 2;
                            break;
                        
                        case 'inc3':
                             echo "$inicio ";
                             $inicio += 3;
                            break;

                        case 'inc4':
                            echo "$inicio ";
                            $inicio += 4;
                            break;
                    
                        case 'inc5':
                            echo "$inicio ";
                            $inicio += 5;
                            break;                    
                                       
                    }
                }
            } else {
                while ($final < $inicio) {
                    switch ($incremento) {
                        case 'inc1':
                        echo "$inicio ";
                        $inicio -= 1;
                        break;

                        case 'inc1':
                            echo "$inicio ";
                            $inicio -= 1;
                            break;

                        case 'inc2':
                            echo "$inicio ";
                            $inicio -= 2;
                            break;
                        
                        case 'inc3':
                             echo "$inicio ";
                             $inicio -= 3;
                            break;

                        case 'inc4':
                            echo "$inicio ";
                            $inicio -= 4;
                            break;
                    
                        case 'inc5':
                            echo "$inicio ";
                            $inicio -= 5;
                            break;                    
                                       
                    }
                    
                }
            }              
   
            ?>
  
</div>
</body>
</html>