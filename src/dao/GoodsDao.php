<?php 
	/**
	* GoodsDao
	*/

	require_once('../bean/Goods.php');

	class GoodsDao
	{
		
		public function addGoods(Goods $goods){
			return true;
		}

		public function deleteGoods(Goods $goods){
			return true;
		}

		public function updateGoods() {
			$goods = new Goods();

			$goods->id = 1;
			$goods->name = 'screen';
			$goods->price = 900;
			$goods->unit = 'ge';
			$goods->cateId = 1;
			return $goods;
		}

		public function queryGoods(){
			$goods = new Goods();

			$goods->id = 2;
			$goods->name = 'keyboard';
			$goods->price = 15;
			$goods->unit = 'ge';
			$goods->cateId = 1;
			return $goods;

		}

		function __construct()
		{
			# code...
		}
	}

	$goodsDao = new GoodsDao();
	$aa = $goodsDao->updateGoods();
	var_dump($aa);
	$aa = $goodsDao->queryGoods();
	var_dump($aa);
 ?>