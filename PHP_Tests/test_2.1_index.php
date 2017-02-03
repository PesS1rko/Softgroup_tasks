<?php

   $arr = file("test_2.1.txt");
    //echo gettype($arr);  
    sort($arr);
 
$f=fopen("test_2.2.txt","r+");
for($i = 0; $i < count($arr); $i++)
$f1=fwrite($f,$arr[$i]);

fclose($f);

$arr2 = file("test_2.2.txt");
for($i=0;$i<count($arr2);$i++)
    echo $arr2[$i]."<br />";


?>