<?php
if(isset($_POST["pass"])){
  $flag = $_POST["pass"];

if($flag == 'CTFFDL{Find_Y0ur_1M4G3}'){
  echo '<br>Flag Benar<br><br>Jangan Lupa Follow Akun Instagram Saya :v @fdlganz.id<br>Kalo Mau Sekalian Subscribe Channel YT Saya : FDL GANZ';
}else{
  echo 'Flag Salah';
exit; }
}
?>