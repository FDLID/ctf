<?php
if(isset($_POST["pass"])){
  $flag = $_POST["pass"];

if($flag == 'CTFFDL{Call_Me_FDL_(CTF2)}'){
  echo '<br>Flag Benar<br><br>Jangan Lupa Follow Akun Instagram Saya :v @fdlganz.id<br>Kalo Mau Sekalian Subscribe Channel YT Saya : FDL GANZ';
}else{
  echo 'Flag Salah';
exit; }
}
?>