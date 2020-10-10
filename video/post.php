<?php
if(isset($_POST['submit'])){
    echo $_POST['nama'];
    }
?>
<form action="profil.php" menthod="get">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
<form>
