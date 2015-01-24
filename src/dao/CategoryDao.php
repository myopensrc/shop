<?php 
	/**
	* CategoryDao
	*/
	require_once('../bean/Category.php');

	class CategoryDao
	{
		
		public function addCategory(Category $category){
			return true;
		}

		public function deleteCategory(Category $category){
			return true;
		}

		public function updateCategory() {
			$category = new Category();
			$category->id = 1;
			$category->cateName = 'Computer';
			$category->parent = 0;
			return $category;

		}

		public function queryCategory() {
			$category = new Category();
			$category->id = 1;
			$category->cateName = 'Computer';
			$category->parent = 0;
			return $category;

		}



		function __construct()
		{
			# code...
		}
	}

	$category = new CategoryDao();
	$aa = $category->updateCategory();
	var_dump($aa);
	$aa = $category->queryCategory();
	var_dump($aa);
 ?>