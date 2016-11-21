<?php
$tries = file_get_contents('tries.txt');
settype($tries, 'integer');

$max_attempts = 10;

if($_POST)
{
	$password = isset( $_POST['password'] ) ? $_POST['password'] : '';

	if($tries <= $max_attempts)
	{

		if($password == 'c25')
		{
			http_response_code(200);
			$new_tries = 0;
			file_put_contents('tries.txt', $new_tries);
		}else
		{
			http_response_code(404);
			$new_tries = ++$tries;
			file_put_contents('tries.txt', $new_tries);
		}

	}else
	{
		http_response_code(404);
	}
	
}