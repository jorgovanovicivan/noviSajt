<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'automehanicarska_radnja');
class DB_con
{
function __construct()
{
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
}
public function insert($ime, $prezime, $automobil)
{
$ret=mysqli_query($this->dbh,"insert into korisnici(ime,prezime, automobil)
values('$ime','$prezime','$automobil')");
return $ret;
}
}
?>