<!doctype html>


<?php



$title = "JOKENPO";
$n1 = rand(1, 3);
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
<h2><label> SELECIONE UMA DAS OPÇÕES:</label></h2>
    <h2><input type="radio" name="e" value="1" required/>PAPEL
    <input type="radio" name="e" value="2" required/> PEDRA
    <input type="radio" name="e" value="3" required/> TESOURA
</h2><br>
    <input type="submit" name="jogar" value="JOGAR">
</form> 
<?php 
if (isset($_POST ['jogar'])) : ?>
 <?php
 echo "Máquina: ";
 echo "<img src='img/maos/$n1.png' alt=''>";
 ?><br /><?php

 echo "Usuário: ";

   
   ?>
   <img src='img/maos/<?php echo $e;?>.png'>
   <br /><?php

 if($e ==  $n1){
    ?><br /><?php 
    echo "<b>Empatou.</b>";
 }
 
 else if(($e == 1 and $n1 == 2 )||($e == 2 and $n1 == 3)||($e ==3 and $n1 ==1)) {
    ?><br /><?php
    echo "<b>Usuário ganhou.</b>";
} else{
    echo "<b>Computador ganhou.</b>";
}


endif;
 ?>



</body>

</html>