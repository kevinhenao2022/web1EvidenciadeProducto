<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="arreglocss.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARREGLOS PERSONAS FAMOSAS</title>
</head>
<body>
    <fieldset>
        <legend>PERSONAS FAMOSAS</legend>
        <center><form action="arreglos.php" method="post">
        <h3>Ingrse los 5 Nombes y Apellidos en una sola linea agregando ","</h3>
         <h4>Nombres: </h4><input type="text" name="nombre" required>
         <h4>Apellidos: </h4><input type="text" name="apellido" required><br><br>
         <input type="submit" name="Enviar"><br><br> </center> 

        </form>

        <?php
        echo " Informacion recibida: ";
        print_r($_POST);           
        ?>
        <br>
        <?php
        echo "El nombre recibido es: ".$_POST['nombre'];
        ?>
        
    </fieldset>
</body>
</html>