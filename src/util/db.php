<?php 
	/**
	* DB
	*/
	class DB extends PDO
	{
		
		const host = "localhost";

		const dbName = "shop";

		const user = "root";

		const password = "";



		function __construct()
		{
			parent::__construct('mysql:host=' . DB::host . ';dbname=' . DB::dbName,
				DB::user,DB::password);
		}


	}

	//$db = new DB();

 ?>