<?php

$number=$_POST['number'];
$design=$_POST['design'];

if(design==1){
    for($i=1; $i<=$number; $i++) {
    for($j=1; $j<=$i; $j++)
    {
    echo '*';
    }
    echo '<br>';
    }
    

}
else{
    for($i=0; $i<$number; $i++) {
        for($j=0; $j<$number; $j++)
        {
        echo '*';
        }
        echo '<br>';
        }
}
//example to demonstrate star pattern-1
?>