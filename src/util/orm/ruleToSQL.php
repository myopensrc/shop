<?php 
	
	/**
	* ruleToSQL
	*/
	class ruleToSQL
	{
		
		function __construct()
		{
			
		}

		public static function makeSave($rule, $object)
		{
			$sql = 'INSERT INTO `' . $rule->ormClass->table . '` (';
				//自增不用id
				//. $rule->ormId->column ;
			foreach ($rule->ormProperties as $value) {
				if($object->{$value->name} != null) {
					$sql = $sql . '`' . $value->column . '`,';
				} else {
					if ( $value->notNull == true ) {
						throw new Exception( $value->name . ' must not be null');
					}
				}

			}
			$sql = substr($sql, 0, -1);
			$sql = $sql . ')';
			$sql = $sql . ' VALUES(\''
				. $object->userName
				. '\',\'' . $object->password
				. '\',\'' . $object->age
				. '\',\'' . $object->sex
				. '\');' ;

			return $sql;
 

		}
		public static function makeUpdate($rule, $object)
		{
			$sql = 'update ' . $rule->ormClass->table . ' set ';
			foreach ($rule->ormProperties as $value) {
				if($object->{$value->name} != null) {
					$sql = $sql . $value->column . '="' 
					. $object->{$value->name} . '" and ' ;
				}

			}
			$sql = substr($sql, 0, -4);
			$sql = $sql . ' where ' . $rule->ormId->column 
					. '="' . $object->{$rule->ormId->name} . '"';
			
			return $sql;
		}

		public static function makeDelete($rule, $object)
		{
			$sql = 'delete ' . $rule->ormClass->table . ' where '
					. $rule->ormId->column .'="'
					. $object->{$rule->ormId->column}
					. '"';
			
			
			return $sql;
		}

		public static function makeFind($rule, $object)
		{
			$sql = 'select from ' . $rule->ormClass->table . ' where ';
				//自增不用id
				//. $rule->ormId->column ;
			foreach ($rule->ormProperties as $value) {
				if($object->{$value->name} != null) {
					$sql = $sql . $value->column . '="'
					. $object->{$value->name} .'" and ';
				}

			}
			$sql = substr($sql, 0, -5);

			return $sql;
		}


	}

 ?>