<?php 

	session_start();

	require_once('../dao/UserDao.php');
	$name = $_POST['username'];
	$passwd = $_POST['password'];

	print_r($name);
	print_r($passwd);


	$userDao = new userDao();
	$user = $userDao->queryUser();

	if($name==$user->userName) {
		$_SESSION["aaa"] = $user;
		header('Location: ../front/index.php');
	} else {
		print_r('faild');
	}

 ?>