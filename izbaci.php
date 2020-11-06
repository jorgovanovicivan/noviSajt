

<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="izbaci.js"></script>
    <title>Neovlašćeni serviser</title>
</head>
<nav class="navbar navbar-light "style="background-color:#ccffb3;">

<a button type="button" class="btn btn-outline-secondary" href="/noviSajt/baza.php">BAZA</a>
  
</nav>
<body  >
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
                <h1 style="text-align:center;">Obriši zaposlenog</h1>
                <?php 
                include "konekcija.php";
                $sql = "SELECT id_radnika, ime, prezime, funkcija FROM radnici";
                if (!$q = $mysqli->query($sql)) {
                    die("Nastala je greška pri izvođenju upita<br/>" . $mysqli->error);
                }
                if ($q->num_rows == 0) {
                    echo "Nema zaposlenih";
                } else {
                    ?>
                    <table id="ta" width="600" border="4" cellpadding="5" cellspacing="2" style="text-align:center  ">

                        <tr style="background-color: #ccffb3">
                            <td><b>Ime</b></td>
                            <td><b>Prezime</b></td>
                            <td><b>Funkcija</b></td>

                            <td><b><i>Obriši</i></b></td>
                        </tr>
                        <?php 
                      
                            while ($niz = $q->fetch_object() ) {
                                ?>
                            <tr>
                           
                                <td><?php echo $niz->ime; ?></td>
                                <td><?php echo $niz->prezime; ?></td>
                                <td><?php echo $niz->funkcija; ?></td>
                              
                                <td><a href="#" style="color:red" onclick="izbaci('<?php echo $niz->id_radnika; ?>',this.parentNode.parentNode.rowIndex)">Obriši zaposlenog</a></td>
                            <?php
                                }
                                ?>
                    </table>
                <?php
                }
                $mysqli->close();
                ?>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

</body>

</html>