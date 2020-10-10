<?php

if(isset($_GET['submit'])){
echo $_GET['nama'];
}

?>
<form action="index.php" menthod="get">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
<form>
