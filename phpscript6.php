<?php
//Print 000 - 100 using loops
echo ("using for loop \n");
    for ($i = 0; $i < 1; $i++) {
        for ($j = 0; $j < 10; $j++) {
            for ($k = 0; $k < 10; $k++) {
                echo $i, $j, $k, "\n";
            }
        }
    }


echo ("using while loop \n");
$a = $b= $c = 0;
while ($a<1){
    while ($b<9){
        while ($c<9){
            $c++;
            echo $a, $b , $c,"\n";
        }$b++;
        $c=0;
        echo $a, $b , $c,"\n";
    }$a++;
    $b=$c=0;
    echo $a, $b , $c,"\n";
}


// echo ("using do while loop \n");
//  $d = 0;
//  do {
//     do{
//         do{ 
//             echo $d, $e , $f, "\n";
//             $f++;
//         } while($f<10);
//         $f=0;
//         $e++;
//         echo $d, $e, $f, "\n";
//         $f++;  
//     } while ($e<=9);
//      $d++;
    
//     $e=0;
//     echo $d, $e, $f, "\n";
// }while($d<1);

echo ("using do while loop \n");
 $d = 0;
do{
echo str_pad($d,3,0,STR_PAD_LEFT),"\n";
$d++;
}
while ($d<=100);


echo ("using ForEach \n");
$number = range(0,100);
foreach($number as $t){
    echo str_pad($t,3,0,STR_PAD_LEFT),"\n";
}