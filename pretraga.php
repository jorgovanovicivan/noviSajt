<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="pronadji.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="sugerisi.js" type="text/javascript"></script>
  <script type="text/javascript">
    function place(ele) {
      document.getElementById('txt').value = ele.innerHTML;
      document.getElementById("livesearch").style.display = "none";
    }
  </script>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Neovlašćeni serviser</title>
</head>
<body onload="document.getElementById('txt').focus()">


<nav class="navbar navbar-light "style="background-color:#ccffb3;">
<a button type="button" class="btn btn-outline-secondary" href="/noviSajt/baza.php">BAZA</a></nav>

  <div class="container">
    <div class="row">
    <div class="col-md-6">
      <div class="col-sm">
      </div>
      <div class="col-sm" style="padding:60px;">
        <h1 style="font-size:35px;">Pretraži ime u bazi</h1>
        <form style="padding-top:25px; border:3 solid ;">
          <input type="text" id="txt" size="40" onkeyup="sugestija(this.value)" style="padding:12px; border: 3 solid;">
          <div id="livesearch"></div>

        </form>
      </div>
      <div class="col-sm">

      </div>
    </div>
    <div class="col-md-6" style="padding:60px;">
    <?php
include "konekcija.php";
$sql="SELECT * FROM radnici";
$rezultat = $mysqli->query($sql);
?>
<div >
<form > 
<b style="font-size:35px;">Izaberi funkciju:</b>
<select name="funkcija" onchange="PrikaziFunkciju(this.value)"style="background-color:#ccffb3;font-size:20px;">
<?php
while($red = $rezultat->fetch_object()){
?>
<option value="<?php echo $red->id_radnika;?>"><?php echo $red->funkcija;?></option> 
<?php
}
?>
</select>
</form>
<p><div id="popuni"></div></p>
<?php
$mysqli->close();
?>
</div>
    </div>
  </div>
  </div>
</body>
</html>