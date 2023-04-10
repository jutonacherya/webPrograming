<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Largest number :</h1>
    <?php
      
        //  $Sum=0;
        //  $temp=99
        //   for ($i=1;$i<=99;$i=$i+2){
        //     $Sum= $Sum+($i/$temp);
        //     $temp-=2;
        //   }
      
    //      function sum($a,$b){
    //         return $a+$b;
    //       }
    //   echo sum(12,34);
         
    function getprice($a){
        if($a>=20){
            $price =((($a*23.49)*0.85)*1.2)+50;
        }else if($a>=10){
            $price =((($a*23.49)*0.90)*1.2)+50; 
        }else if($a>=1){
           $price =(($a*23.49)*1.2)+50;
        }
        return $price;
    }
    echo getprice(9);
    
?>
</body>
</html>


