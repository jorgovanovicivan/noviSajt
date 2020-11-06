<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Neovlašćeni serviser</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<nav class="navbar navbar-light "style="background-color:#ccffb3;">
<a button type="button" class="btn btn-outline-secondary" href="/noviSajt/index.php">Početna</a> </nav>
<body>
    <div class="container" style="margin-right:5px; padding:20px;" >
        <div class="row">
           
            <div class="col-sm" >
                <h1 style="text-align:center;" >Korisnički servis</h1>
                <form method="post" action="">
                    <div class="input-group"style=" margin:50px; ">
                        <div class="input-group-prepend" >
                            <span class="input-group-text">Ime i prezime:</span>
                        </div>
                        <input type="text" aria-label="First name" class="form-control" name="ime">
                        <input type="text" aria-label="Last name" class="form-control" name="prezime">
                    </div>

                    <div class="input-group mb-3"style=" margin:50px;">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Automobil:</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="automobil">
                    </div>
                    <input type="submit" name="unos" value="Ubaci" style="margin-right:20px; margin-left:50px"/>
                </form>
                <?php
include_once("function.php");
$insertdata=new DB_con();
if(isset($_POST['unos']))
{
$ime=$_POST['ime'];
$prezime=$_POST['prezime'];
$automobil=$_POST['automobil'];
$sql=$insertdata->insert($ime, $prezime,$automobil);
if($sql)
{
echo "<script>alert('Korisnik je ubačen');</script>";
}
else
{
echo "<script>alert('Korisnik nije ubačen');</script>";
}
}
 ?>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-sm">
                <h1 style="text-align:center;">Lista kroisnika</h1>
                <?php
include 'dbclass.php';
include 'user.php';
include 'viewUser.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$users=new ViewUser();
$users->showAllUsers();

?>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>
</body>

</html>