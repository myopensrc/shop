<?php 
	/**
	* ormTool
	*/

	require('./ormRule.php');
	require('./dbMapping.php');


	class ormTool
	{
		
		public static function getRule($object){

			$class_name = get_class($object) ;

			if( is_null($GLOBALS["ormRules"]) ) {
				//不存在全局变量 则创建一个
				$GLOBALS["ormRules"] = array();
			}


			$name = $GLOBALS["ormRules"][$class_name];
			if( is_null($name) ) {
				//不存在对象的rule 则创建一个,放到全局变量中
				$path = '../../ormConf/' . $class_name . '.Mapping.xml';
				$xml = simplexml_load_file($path);

				$rule = dbMapping::convert($xml);
				$GLOBALS["ormRules"][$class_name] = $rule ;
				return $rule;
			} else {
				return $name;
			}
			
		}
	}


 ?>