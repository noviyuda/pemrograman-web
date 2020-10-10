<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>konfirmasi</title>
</head>
<body>
<?php

    if(isset($_POST['tombol'])){
        $username =$_POST['username'];
        $email = $_POST['email'];
        $namaDepan = $_POST['nadep'];
        $namaBelakang = $_POST['nabel'];
?> 
    
    username: <?php echo $username ?>
    <br>
    password: ******
    <br>
    nama lengkap: <?php echo $namaDepan." ".$namaBelakang ?>
    <br>
    email: <?php echo $email ?>
<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bs diakses langsung";
   }
?>
</body>
</html>