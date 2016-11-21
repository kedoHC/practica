<?php
require_once('encryption_config.php');
function decrypt($string) 
{
    $key = hash('sha256', SECRET_KEY);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);

    $output = openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
    return $output;
}

echo decrypt('a2ZnMUM3a1QxMDdRTkVyY2N0VTNUekJlZmVKTkl3ZVFnL2pvS2RrNUZuRT0=');
