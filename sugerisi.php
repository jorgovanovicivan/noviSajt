<?php
if (!isset ($_GET["unos"])){
echo "Parametar  nije prosleđen!";
} else {
$pomocna=$_GET["unos"];
include "konekcija.php";
$sql="SELECT id_radnika,ime,prezime,funkcija FROM radnici WHERE ime LIKE '$pomocna%'ORDER BY ime";
$drugo="SELECT id_radnika,ime,prezime,funkcija FROM radnici WHERE prezime LIKE '$pomocna%'ORDER BY prezime";
$rezultat = $mysqli->query($sql);

if ($rezultat->num_rows==0){
echo "U bazi ne postoji ime koja počinje na " . $pomocna;
} else {
while($red = $rezultat->fetch_object()){
?>
<a href="#" onclick="place(this)"><?php  echo $red->ime." "; echo $red->prezime." "; echo $red->funkcija;?></a>
<br/>
<?php
}
}
$mysqli->close();
}
?>

