<?php

$user = 'novi';
$password = '123';

if(isset($_POST['submit'])){
    if($_POST['nama'] == $user &&
       $_POST['password'] == $password){
           //echo 'login berhasil';

        //cookie
        setcookie('nama_user', $_POST['nama'], time()+120);

           //memindahkan halaman
           header('Location: profil.php');
       }else{
           echo 'login gagal';
       }
    }
?>
<form action="contohlogin.php" menthod="post">
    <input type="text" name="nama">
    <input type="password" name="password">
    <input type="submit" name="submit">
<form>
