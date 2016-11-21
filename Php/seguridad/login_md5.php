<?php

	$password = isset( $_GET['password'] ) ? $_GET['password'] : '';



		if($password == '12345678')
		{
			
			echo 'Contrasenia correcta';
			
		}else
		{
			
			echo 'Contrasenia incorrecta';
			
		}


	
