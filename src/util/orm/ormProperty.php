<?php 
	/**
	* 
	*/
	class ormProperty
	{
		var $name = '';

		var $type = '';

		var $column = '';

		var $notNull = '';

		var $length = '';

		var $validation = '';

		function __construct()
		{
			# code...
		}

		public function setNotNull($value)
		{
			if ($value == 'false')
			{
				$this->notNull = FALSE;
			}
			else
			{
				$this->notNull = TRUE;
			}

		}
	}
 ?>