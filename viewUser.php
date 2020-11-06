<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class ViewUser extends User{

   public function showAllUsers(){
      $datas=$this->getAllUsers();
    ?>
    <table id="ta" width="600" border="4" cellpadding="5" cellspacing="2" style="text-align:center  ">
    <tr style="background-color: #ccffb3">
                            <td><b>Ime</b></td>
                            <td><b>Prezime</b></td>
                            <td><b>Funkcija</b></td>
                        </tr>
  
    <?php  foreach($datas as $data){ ?>
    <tr> <td><?php echo $data['ime']; ?></td>
        <td><?php echo $data['prezime']; ?></td>
     <td><?php echo $data['automobil']; ?></td>
      <?php } ?>
      </table>
      <?php
    } 
}
?>
</body>
</html>