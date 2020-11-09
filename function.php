<?php
define('server','localhost');
define('user','root');
define('password' ,'');
define('dbname', 'automehanicarska_radnja');
class DB_con
{
function __construct()
{
$con = mysqli_connect(server,user,password,dbname);
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