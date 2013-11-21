<?php

$nama=$_POST['nama'];
$email=$_POST['email'];
$subjek=$_POST['subjek'];
$pesan=$_POST['pesan'];

$to="rezanda.rohman@gmail.com";
$header="From: $email";

@mail($to, $subjek, $pesan, $header);
echo "Pesan Berhasil Dikirim";
?>
<?php
header('Location: http://localhost/bootstrapku');
?>