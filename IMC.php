<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="IMCestilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <fieldset>
        <legend>INDICE DE MASA CORPORAL</legend>
        <form action="IMC.php" method="post">
          <center>  <h1>IMC EN PHP</h1>
            <h4>Ingrese su nombre </h4><input type="text" name="nombre" required>
            <h4>Ingrese su edad</h4><input type="number" name="edad" required>
            <h4>Ingrese su peso en Kg</h4><input type="text" name="peso" value="" required>
            <h4>Ingrese su estatura en mts</h4><input type="text" name="estatura" value="" required><br><br>
            <input type="radio" name="persona" value="Niño" id="Niño">
            <label for="Niño">Niño</label>
            <input type="radio" name="persona" value="Adulto" id="Adulto">
            <label for="Adulto">Adulto</label>
            <br><br>
            <input type="submit" value="calcular"> <br><br></center> 
        </form>

        <?php

        $nombre = $_POST['nombre'];
        $peso = $_POST['peso'];
        $estatura = $_POST['estatura'];
        $t_persona = $_POST['persona'];
        $edad = $_POST['edad'];

        $imc = $peso / ($estatura^2);

        if($t_persona == 'Niño'){
            echo 'Ha seleccionado la opcion '.$t_persona . '<br>';

        } else if ($t_persona == 'Adulto'){
            echo 'Ha selecionado la opcion '.$t_persona . '<br>';
        } 

        if ($t_persona == 'Niño'){
            echo 'Ha seleccionado la opcion '.$t_persona . '<br>';
            if ($imc <= 3){
                echo 'hola '. $nombre. ' si IMC es: '. $imc . '<br>';
                echo '<h3>esta BAJO de peso</h3>';
            }elseif ($imc > 3 && $imc <= 85){
                echo 'hola '. $nombre . ' su IMC es: '. $imc . '<br>';
                echo '<h3> el niño se encuntra con peso NORMAL</h3>';
            }elseif ($imc > 97){
                echo 'hola '. $nombre . ' su IMC es: '. $imc . '<br>';
                echo '<h3>El niño se encuentra en OBECIDAD</h3>';


            }
        }

            if ($t_persona == 'Adulto'){
            echo 'Ha seleccionado la opcion'.$t_persona . '<br>';

            if ($imc < 18.5){
                echo 'Hola '. $nombre. ' su IMC es: '. $imc . '<br>';
                echo '<h3>Esta BAJO de peso</h3>';
            }elseif ($imc > 18.5 && $imc <24.9){
                echo 'Hola '. $nombre. ' su IMC es: '. $imc . '<br>';
                echo '<h3> su nivel de peso es NORMAL</h3>';
            }elseif ($imc > 24.9 && $imc <30){
                echo 'Hola '. $nombre. ' su IMC es: '. $imc . '<br>';
                echo'<h3> Esta en SOBRE peso</h3>';
            }elseif ($imc > 30 && $imc <34){
                echo 'Hola '. $nombre. ' su IMC es: '. $imc . '<br>';
                echo'<h3> Esta en obesidad GRADO 1</h3>';
            }elseif ($imc > 34 && $imc <39 ){
                echo 'Hola '. $nombre. ' su IMC es: '. $imc . '<br>';
                echo'<h3> Esta en obesidad GRADO 2</h3>';
            }elseif ($imc > 40){
                echo 'Hola '. $nombre. ' su IMC es: '. $imc . '<br>';
                echo'<h3> Esta en obesidad GRADO 3</h3>';
            }            
        }

        ?>
    </fieldset>
</body>
</html>