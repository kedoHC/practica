<?php



$command = isset( $_GET['command'] ) ? $_GET['command'] : '';

switch( $command )
{
	case 1:
		$command_to_execute ='dir';
	break;
	case 2:
		$command_to_execute ='ipconfig';
	break;
	default:
	$command_to_execute ='';
}


echo '<pre>';
echo `{$command_to_execute}`;