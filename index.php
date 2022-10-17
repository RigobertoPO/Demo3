<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Areas</title>
</head>
<body>
    <form action="CalcularAreas.php" method="post">
            <label> Base</label>
            <input type="text" name="base">
            <label> Altura</label>
            <input type="text" name="altura">
            <label>Tipo</label>
            <select name="tipo" >
                <option value="1">Rectángulo</option>
                <option value="2">Triángulo</option>
            </select>
            <input type="submit" value="Calcular">
    </form>
</body>
</html>