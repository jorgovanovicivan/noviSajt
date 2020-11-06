<?php
if (!isset ($_GET["id_radnika"])){
echo "Id nije prosleđen!";
} else {
$id_radnika=$_GET["id_radnika"];
include "konekcija.php";
$sql="DELETE FROM radnici WHERE id_radnika='".$id_radnika."'";
if ($rezultat = $mysqli->query($sql)){
echo "1";
}
$mysqli->close();
}
?>