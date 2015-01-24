<?php 
	/**
	* UserDao
	*/
	require_once('../bean/User.php');

	class UserDao
	{
		
		function addUser(User $user){
			return true;
		}

		function deleteUser(User $user){
			return true;
		}

		function updateUser(){

			$user = new User();

			$user->userId = 1;
			$user->userName = 'update';
			$user->password = 'psswd';
			$user->sex = 'boy';
			$user->age = 23;

			return $user;
		}

		function queryUser(){
			$user = new User();

			$user->userId = 2;
			$user->userName = 'query';
			$user->password = 'psswd';
			$user->sex = 'girl';
			$user->age = 21;

			return $user;
		}


		function __construct()
		{
			# code...
		}
	}

	$user = new UserDao();
	$aa = $user->updateUser();
	var_dump($aa);
	$aa = $user->queryUser();
	var_dump($aa);
 ?>