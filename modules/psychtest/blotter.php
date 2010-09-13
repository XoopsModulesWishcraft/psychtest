<?php
	
	error_reporting(0);
	$width = $_REQUEST['width'];
	$height = $_REQUEST['height'];
	$passkey = $_REQUEST['passkey'];
	
	include('../../mainfile.php');
	include( $GLOBALS['xoops']->path('modules/psychtest/include/functions.php'));
	
	if (!psychtest_checkpasskey($passkey)) { 
		echo 'Passkey Mismatch - '. date('Y-m-d h');
		exit(0);
	}
	
	error_reporting(0);
	
	echo psychtest_blotter($width, $height, $passkey);
?>