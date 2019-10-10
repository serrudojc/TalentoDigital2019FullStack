<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <style>
       .centrar{
           text-align : center;
       }
   </style>
</head>
<body>
   <header class="centrar">
       <br>
       <?php
       if(isset($_POST['btn-1'])){
           if (empty($_POST['celcius'])){
              echo 'No ingreso ningun parametro por favor ingrese uno.';
              echo '<br>';
              echo '<button><a href="grados.php">Regresar</a></button>';
              die;
           }
           $grados = $_POST['celcius'];
           $pasaje = ($grados * 1.8) + 32;            ?>
           <p>Usted ingreso <?php echo $grados;?> grados Celcius.</p>
           <p><?php echo $grados;?> °C a grados Fahrenheit son <?php echo $pasaje;?> °F.</p>
           <button><a href="grados.php">Regresar</a></button>
           <?php
       } else {
           ?>
           <br>
           <form action="" method="POST">
           <label for="celcius">Ingrese C°: <input type="text" name="celcius" placeholder=" Grados celcius"></label>
           <br>
           <br>
           <button type="submit" name="btn-1">Enviar</button>
           </form>
           <?php
       }
       ?>
   </header>
</body>
</html>