<?php

class calc_dir
{

var $a_fname=array();
var $a_fsize=array();
var $a_fdir =array();
var $cofiles;

function init()
{
$this->cofiles=0;
}

function calc_files($in_dir)
{


if ($dir_handle = @opendir($in_dir))
{
while($file = readdir($dir_handle))
{

if ($file!=".." && $file!="." && is_dir($file))
{
$this->calc_files($in_dir."/".$file);
}


if (is_file($in_dir."/".$file) && $file!=".." && $file!=".")
{
$this->a_fname[$this->cofiles]=$file;
$this->a_fsize[$this->cofiles]=filesize ($in_dir."/".$file);
$this->a_fdir [$this->cofiles]=$in_dir;
$this->cofiles++;

}
}
}
}

function show()
{
echo "<center><table border=\"1\"><tr align=\"center\"> <td>i</td><td>name</td><td>size</td><td>dir</td></tr>";
$a_size=0;
for ($i=0;$i<count($this->a_fname);$i++)
{ 
echo "<tr align=\"center\"><td>".($i+1)."</td><td>".$this-> a_fname[$i]."</td><td>".$this->a_fsize[$i]."</td><td> ".$this->a_fdir[$i]."</td></tr>";
$a_size+=$this->a_fsize[$i];
}
echo "<tr><td colspan=\"2\">Total:</td><td colspan=\"2\">$a_size</td></tr>";
echo "</table></center>";
}

}

$d=new calc_dir;
$d->init();
$d->calc_files("C:/windows/");
$d->show();
?>