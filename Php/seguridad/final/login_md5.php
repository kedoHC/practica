<?php

	$password = isset( $_GET['password'] ) ? $_GET['password'] : '';

		$salt = '$BE@pppp190716LS%';

		if(md5($salt . $password) == 'cc92fd771d7fd0affb6f4d5497da6de4')
		{
			
			echo 'Contrasenia correcta';
			
		}else
		{
			
			echo 'Contrasenia incorrecta';
			
		}


	
