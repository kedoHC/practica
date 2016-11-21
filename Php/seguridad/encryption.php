<?php
require_once('encryption_config.php');
function encrypt($string) 
{
    $output = FALSE;
    $key = hash('sha256', SECRET_KEY);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);

    $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
    $output = base64_encode($output);

    return $output;

}

$plain_txt = "3707 123456 12345";
echo encrypt($plain_txt);
