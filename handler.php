<?php

/*$nebo=htmlspecialchars($_POST["nebo"]); 
$leto=htmlspecialchars($_POST["leto"]); 
$zima=htmlspecialchars($_POST["zima"]);*/
//$otvet==$nebo;
$name=$_POST["imya"];
$fam=$_POST["famile"];
$otc=$_POST["otchestvo"];

if($_POST["answer"]=="nebo") {
	echo "Bce npaBuLbHo ".$fam." ".$name." ".$otc;
}
else {echo "He npaBuLbHo ".$fam." ".$name." ".$otc;}
echo " \n";
//var_dump($_POST["imya"]);


?>