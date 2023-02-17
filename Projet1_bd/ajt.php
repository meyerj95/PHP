<?php
$idc=mysql_connect("localhost","root","");
$c=mysql_select_db("scolarite");
$a = $_POST['Num'];
$b = $_POST['Nom'];
$e = $_POST['adresse'];
$d = $_POST['num_tel'];


$req = "INSERT INTO eleves VALUE ('$a','$b','$e','$d')";
$rl = mysql_query($req);

echo "<h1> L'enregistrement est effectué avec succes </h1>" ;
mysql_close ($idc)
?>