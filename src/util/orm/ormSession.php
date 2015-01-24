<?php 
	
	/**
	* ormSession
	*/

	//用完可删
	require('../../bean/User.php');
	require('./ruleToSQL.php');
	require('./ormTool.php');
	require('../db.php');

	class ormSession
	{
		var $conn = null;
		var $db = null;
		
		function __construct()
		{
			// $this->db = new DB();
			// $this->conn = $this->db->getConnect();
		}

		public function save($object) {
			$conn = new PDO('mysql:host=localhost' . ';database=shop',
							'root', '' );
			$conn->exec("SET CHARACTER SET utf8");
			
			if( !$conn ) {
				echo 'faild';
			} else { 
				echo 'success';
			}
			$sql = ruleToSQL::makeSave(ormTool::getRule($object) , $object);
			print_r($sql);
			try{
				$aa = $conn->exec("select * from User");
			} catch (Exception $e) {
				print 'Error: ' . $e->getMessage() . '<br />';
			}
			//var_dump($aa);
			return $aa;
		}

		public function saveOrUpdate($object){

		}
		public function update($object) {
			$sql = ruleToSQL::makeUpdate(ormTool::getRule($object) , $object);
			return $this->conn->exec($sql);
		}

		public function delete($object) {
			$sql = ruleToSQL::makeDelete(ormTool::getRule($object) , $object);
			return $this->conn->exec($sql);
		}

		public function find($object) {
			$sql = ruleToSQL::makeFind(ormTool::getRule($object) , $object);
			return $this->conn->exec($sql);
		}

		public function findAll() {
			
		}
	}

	$user = new User();
	$user->userId = 2;
	$user->userName = 'hello02';
	$user->password = 'world02';
	$user->age = 23;
	$user->sex = 'boy';
	print_r($user);
	$ormSession = new ormSession();
	$num = $ormSession->save($user);
	var_dump($num);


 ?>