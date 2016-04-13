<?php

$link = new mysqli("localhost", "root", "root", "fantastic_beasts");


$result = $link->query("SELECT proizvodi.naziv as Naziv,proizvod.vrstaProizvoda as Vrsta,zivotinje.nazivZivotinje as Zivotinja,opisProizvoda as Opis,Cijena,proizvodi.id as id
	FROM proizvodi
	JOIN proizvod ON proizvodi.tipProizvoda=proizvod.id
	JOIN zivotinje ON proizvodi.tipZivotinje=zivotinje.id
	ORDER BY id;");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"Naziv":"'  . $rs["Naziv"] . '",';
    $outp .= '"Vrsta":"'   . $rs["Vrsta"]        . '",';
    $outp .= '"Zivotinja":"'   . $rs["Zivotinja"]        . '",';
    $outp .= '"Opis":"'   . $rs["Opis"]        . '",';
    $outp .= '"Cijena":"'. $rs["Cijena"]     . '"}'; 
}
$outp ='{"records":['.$outp.']}';
$link->close();

echo($outp);
?>