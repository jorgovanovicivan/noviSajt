<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="sugerisi.js" type="text/javascript"></script>
  <script type="text/javascript">
    function place(ele) {
      document.getElementById('txt').value = ele.innerHTML;
      document.getElementById("livesearch").style.display = "none";
    }
  </script>
  <style type="text/css">
    #livesearch {
      margin: 5px;
      width: 220px;
    }
    #txt {
      border: solid #A5ACB2;
      margin: 5px;
    }
  </style>
  <title>Neovlašćeni serviser</title>
</head>

<body class="kontrol" onload="document.getElementById('txt').focus()"  >
<nav class="navbar navbar-light "style="background-color:#333333;">
<a button type="button" class="btn btn-outline-success my-2 my-sm-0" href="/noviSajt/index.php">Početna</a></nav>
  <div class="container" id="kontis"style=" padding:30px;  margin-right:150px; " >
    <div class="row">


      <div class="col">
        <div class="card" style="width: 24rem;padding:50px;">
          <img src="slike/ubaci.png" class="card-img-top" alt="">
          <div class="card-body"style=" padding:1px; ">
            <h5 class="card-title">Ubaci novog zaposlenog</h5>
            
            <a href="/noviSajt/ubaci.php"  button class="btn btn-outline-success my-2 my-sm-0" type="submit">UBACI</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 24rem;padding:50px;">
          <img src="slike/izbaci1.png" class="card-img-top" alt="">
          <div class="card-body"style=" padding:1px;">
            <h5 class="card-title">Izbaci</h5>
            
            <a href="/noviSajt/izbaci.php"button class="btn btn-outline-success my-2 my-sm-0" type="submit">IZBACI</button></a>
          </div>
        </div>
      </div>
      </div>
      </div>
      

  <div class="container" id="kontis"style=" padding:30px;margin-right:150px;">
    <div class="row">
     
      <div class="col">
        <div class="card" style="width: 24rem; padding:50px;">
          <img src="slike/izmeni1.png" class="card-img-top" alt="">
          <div class="card-body"style=" padding:1px;">
            <h5 class="card-title">Izmeni podatke</h5>
           
            <a href="/noviSajt/izmeni.php" button class="btn btn-outline-success my-2 my-sm-0" type="submit">IZMENI</button></a>
          </div>
        </div>
      </div>
    
      
      <div class="col">
        <div class="card" style="width: 24rem;padding:50px; ">
          <img src="slike/pretrazi12.png" class="card-img-top" alt="">
          <div class="card-body"style=" padding:1px;">
            <h5 class="card-title">Proveri da li postoji u bazi</h5>
          
            <a href="/noviSajt/pretraga.php" button class="btn btn-outline-success my-2 my-sm-0" type="submit">PRETRAGA</button></a>
          </div>
        </div>
      </div>
      
     
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>