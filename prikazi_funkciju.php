<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pronadji</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if (!isset ($_GET["id_radnika"])){
echo "Parametar nije prosleđen!";
} else {
$pom=$_GET["id_radnika"];
include "konekcija.php";
$sql="SELECT * FROM radnici WHERE id_radnika='".$pom."'";
$rez = $mysqli->query($sql);
echo "<table border='3' >
<tr>
<th>ID</th>
<th>Ime</th>
<th>Prezime</th>
<th>Funkcija</th>
</tr>";
while($red = $rez->fetch_object()){
 echo "<tr border='3'>";
 echo "<td>" . $red->id_radnika . "</td>";
 echo "<td>" . $red->ime . "</td>";
 echo "<td>" . $red->prezime . "</td>";
 echo "<td>" . $red->funkcija . "</td>";
 echo "</tr>";
 }
echo "</table>";

$mysqli->close();
}
?>

</body>
</html>
