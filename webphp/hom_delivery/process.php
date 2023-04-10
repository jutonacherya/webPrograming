<?php
$pine=$_POST['pineapple'];
$h_delivery=$_POST['delivery'];
$tip=$_POST['tip'];

$salt=$_POST['salt'];


$totalbill=$pine * 23.45;
$totalbill = $totalbill+$tip;
//echo $pine ."-----".$salt;

if (h_delivery=="yes"){
    $totalbill= 45 + $totalbill;
}else{
    $totalbill;  
}

if($salt=="small"){
    $totalbill+=$totalbill*0.05;
}else if($salt=="medium"){
    $totalbill+=$totalbill*0.1;

}else if($salt=="large"){
    $totalbill+=$totalbill*0.15;
}

echo "Total Bill". $totalbill;



?>