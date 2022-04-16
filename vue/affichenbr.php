<?php    
require '../class/Number.php';

$nbr1 = Number::withZero(50);
echo $nbr1;
echo "<br><br>";
$nbr2 = Number::withZero(5);
echo $nbr2;

/* echo "<br><br>";
$nbr3 = new Number;
$nbr3 -> sansZero(5);
echo $nbr3;
*/
echo "<br><br>";

 $nbr4 = Number::avecEuro(150);
 echo $nbr4;