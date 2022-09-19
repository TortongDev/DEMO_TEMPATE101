<?php
	session_start();
	require "register_config.php";
	
	/*$insert = new registers;
	$insert->setUsername($_POST['username']);
	$insert->setPassword($_POST['password']);
	$insert->setAge('21');
	$insert->setStatus('2');
	$insert->save();
	*/
	
		$upd = new registers;

		$upd->setUsername($_POST['username']);
		$upd->setPassword($_POST['password']);
		$upd->setAge(22);
		$upd->setStatus($_POST['status']);
		
		$upd->saved();


?>