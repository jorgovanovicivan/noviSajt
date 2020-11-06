<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="sugerisi.js" type="text/javascript"></script>
  <title>Neovlašćeni serviser</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<nav class="navbar navbar-light "style="background-color:#ccffb3;">
<a button type="button" class="btn btn-outline-secondary" href="/noviSajt/baza.php">BAZA</a>
</nav>

  <div class="container">
    <div class="row">
      <div class="col-sm">
      </div>
      <div class="col-sm">
        <h1 style="font-size:30px;  margin: 50px;margin-left:90px; "> Izmeni </h1>
        <form method="post" action="">
          <div class="input-group"style=" margin:50px; ">
            <div class="input-group-prepend">
              <span class="input-group-text"style="border:2px solid #6c757d;;height:38px; color: #6c757d;; background:#ccffb3; ">Ime i prezime:</span>
            </div>
            <input type="text" aria-label="First name" class="form-control" name="ime"style="border:2px solid #6c757d;">
            <input type="text" aria-label="Last name" class="form-control" name="prezime"style="border:2px solid #6c757d;">
          </div>

          <div class="input-group mb-3"style=" margin:50px;">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default"style="border:2px solid #6c757d; color:#6c757d; background:#ccffb3">Funkcija:</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="funkcija"style="border:2px solid #6c757d; height:40px;">
          </div>

                              <div class="input-group mb-3" style="margin:48px;">
                        <div class="input-group-prepend" >
                            <span class="input-group-text" id="inputGroup-sizing-default"style="border:2px solid #6c757d; color:#6c757d; background:#ccffb3; ">ID:</span>
                        </div>
                        
                        <input type="number" name="id_radnika" class="form-control"onkeyup="sugestija(this.value)" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"style="border:2px solid #6c757d; height:40px;">
                        <div id="livesearch"></div>
                      </div>

          <input type="submit" name="unos" value="Izmeni"style=" width: 90px;height: 40px;margin-left:50px; margin:20px margin-right:30px; border: 2px solid #6c757d; background:#ccffb3;color:#6c757d;" />
        </form>
        <?php
        if (isset($_POST["unos"])) {
          if (isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['funkcija']) && isset($_POST['id_radnika'])) {
            $ime = $_POST['ime'];
            $prezime = $_POST['prezime'];
            $funkcija = $_POST['funkcija'];
            $id_radnika = $_POST['id_radnika'];

            include "konekcija.php";
            $sql = "UPDATE radnici (ime, prezime,funkcija) VALUES ('" . $ime . "', '" . $prezime . "', '" . $funkcija . "');";
            $sql = "UPDATE radnici SET ime='" . $ime . "', prezime='" . $prezime . "', funkcija='" . $funkcija . "' WHERE id_radnika=" . $id_radnika;
            if ($mysqli->query($sql)) {
              echo "<p>Podaci su izmenjeni</p>";
            } else {
              echo "<p>Greška prilikom promene</p>" . $mysqli->error;
            }
          } else {
            echo "Parametri nisu prosleđeni!";
          }
          $mysqli->close();
        }
        ?>
      </div>
      <div class="col-sm">

      </div>
    </div>
  </div>
</body>

</html>