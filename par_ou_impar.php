<doctype html>


<?php
$title = "Par ou impar";
$n1 = rand(0, 10);
$numero= isset($_POST['numero']) ? $_POST['numero']: "";
$e = isset($_POST['e']) ? $_POST['e'] : "";
?>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>
<body>
<h1><?php echo $title ?></h1>
<form action="" method="post">
<label> Selecione uma das opções:</label>
    <input type="radio" name="e" value="par" required/>Par
    <input type="radio" name="e" value="impar" required/> Impar<br>
    Insira um número de 0 a 10: <input type= "text" name="numero" id="numero"><br>
    
    <input type="submit" name="enviar" value="Enviar">
</form> 
    <?php  

  if (isset($_POST ['enviar'])) : ?>
  <h2><?php echo "Você escolheu : ", $e; ?></h2>
  <h2><?php echo "Jogou o valor: ". (isset($_POST ['numero']) ? $_POST['numero'] : ""); ?></h2>
  <h2><?php echo "O máquina jogou: ". $n1; ?></h2>

  <?php
   
    if (((isset($_POST ['numero']) ? $_POST['numero'] : "")+$n1) % 2 == 0) {
        if ($e == "par") {
            echo "<b><font size=+4>Você ganhou.</b></font>";
        } else {
            echo "<b><font size=+4>Você perdeu.</b></font>";
        }
    } else {
        if ($e == "impar") {
            echo "<b><font size=+4>Você ganhou.</b></font>";
        } else {
            echo "<b><font size=+4>Você perdeu.</b></font>";
        }
    }
 ?>

  <?php endif; ?>


</body>

</html>



  