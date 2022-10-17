<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ('Areas.php');
        $base=isset($_POST['base'])? $_POST['base']: null;
        $altura=isset($_POST['altura'])? $_POST['altura']: null;
        $tipo=isset($_POST['tipo'])? $_POST['tipo']: null;
        $area=new Area();
        if($tipo==1){
            $rectangulo=$area->CalcularRectangulo($base,$altura);
            echo $rectangulo;
        }
        else{
            $triangulo=$area->CalcularTriangulo($base,$altura);     
            echo $triangulo;
        }
               
    ?>
</body>
</html>