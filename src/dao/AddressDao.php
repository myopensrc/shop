<?php 
	/**
	* AddressDao
	*/
	require_once('../bean/Address.php');

	class AddressDao
	{
		
		public function addAddress(Address $address){
			return true;
		}

		public function deleteAddress(Address $address){
			return true;
		}

		public function updateAddress() {
			$address = new Address();
			$address->id = 1;
			$address->userId = 1;
			$address->address = 'NanJing YuHua China Software';
			$address->isDefault = 0;
			return $address;

		}

		public function queryAddress() {
			$address = new Address();
			$address->id = 1;
			$address->userId = 1;
			$address->address = 'NanJing YuHua China Software';
			$address->isDefault = 0;
			return $address;

		}



		function __construct()
		{
			# code...
		}
	}

	$add = new AddressDao();
	$aa = $add->updateAddress();
	var_dump($aa);
	$aa = $add->queryAddress();
	var_dump($aa);
 ?>