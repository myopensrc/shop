<?php 
	/**
	* ExchangeDao
	*/
	require_once('../bean/Exchange.php');

	class ExchangeDao
	{
		
		public function addExchange(Exchange $exchange) {
			return true;
		}

		public function deleteExchange(Exchange $exchange) {
			return true;
		}

		public function updateExchange() {
			$exchange = new Exchange();
			$exchange->id = 1;
			$exchange->userId = 1;
			$exchange->addressId = 1;
			$exchange->goodsId = 1;
			return $exchange;

		}

		public function queryExchange() {
			$exchange = new Exchange();
			$exchange->id = 1;
			$exchange->userId = 1;
			$exchange->addressId = 1;
			$exchange->goodsId = 1;
			return $exchange;
			
		}

		function __construct()
		{
			# code...
		}
	}

	$exchangeDao = new ExchangeDao();
	$aa = $exchangeDao->updateExchange();
	var_dump($aa);
	$aa = $exchangeDao->queryExchange();
	var_dump($aa);

 ?>