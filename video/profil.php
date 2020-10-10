<?php
//session_start(); //kalo pake session
echo 'ini siapa? ' .$_GET['nama'];
//cookie $_COOKIE['nama_user];

if(isset($_SESSION['nama_user])){
    echo 'ini halaman profil' .$_SESSION['nama_user];

}else{
    echo 'login dlu yaa'
}
?>

<br>
<a href="longout.php">Longout</a>