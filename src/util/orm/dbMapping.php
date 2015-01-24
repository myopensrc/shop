<?php 
	/**
	* dbMapping
	*/

	
	


	 class dbMapping
	{
		
		
		static function convert($xml)
		{
			$rule = new ormRule();
			$rule->ormClass = new ormClass();
			$rule->ormId = new ormId();

			$attrClass = $xml->children()->attributes() ;

			$rule->ormClass->name = $attrClass['name'] . '';
			$rule->ormClass->table= $attrClass['table'] . '';

			$attrId = $xml->children()->children()->attributes() ;
			$rule->ormId->name = $attrId['name'] . '';
			$rule->ormId->type= $attrId['type'] . '';
			$rule->ormId->column = $attrId['column'] . '';
			$rule->ormId->length = $attrId['length'] + 0;
			$rule->ormId->validation = $attrId['validation'] . '';
			$rule->ormId->generator = $attrId['generator'] . '';

			echo '<pre>';

			foreach ($xml->children()->children() as $child) {

				if($child->getName() == 'property'){
					$property = new ormProperty();
					foreach ($child->attributes() as $key => $value) {
						
						$tempKey = $key.'';
						$tempValue = $value.'';


						$property->$key = $tempValue;

					}
					$rule->ormProperties[] = $property;

				}
			}

			echo '</pre>';

			return $rule;
		} 
	}

 ?>