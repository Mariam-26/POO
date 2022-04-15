 <?php 

spl_autoload_register(function($class){
    include '../class/' . $class . '.php';
});
$formInscription = new Form($_POST);

?>


<form action="#" method="POST">

<?php 

echo $formInscription->input('username');
echo $formInscription->input('nom');
echo $formInscription->input('prenom');
echo $formInscription->inputPS('password');
echo $formInscription->submit();

?>

</form>

<?php /* ICI MON CODE */

$formConnexion = new Form();


?>

<form action="#" method="POST">

<?php /* ICI MON CODE */

echo $formConnexion->input('pseudo');
echo $formConnexion->inputPS('password');
echo $formConnexion->submit();


?>



</form>