<?php
$arr=file ("test_3_characters.txt");
$phrase=implode($arr);
$array = ["&","\"","\'", "<",">"];
$array2 = ["&amp","&quot","&#039", "&lt","&gt"];
$newphrase = str_replace($array,$array2,$phrase);
for ($i=0;$i<count($arr);$i++)
{
    $f=fopen("test_3_newCharacters.txt","r+");
    
   $f1=fwrite($f,$newphrase);}
echo "<h1>You will see resault in test_3_newCharacters</h1>";







fclose($f);

?>