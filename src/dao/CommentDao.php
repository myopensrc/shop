<?php 
	/**
	* CommentDao
	*/
	require_once('../bean/Comment.php');
	class CommentDAO
	{

		public function addComment(Comment $comment) {
			return true;
		}
		
		public function deleteComment(Comment $comment) {
			return true;
		}

		public function updateComment() {
			$comment = new Comment();
			$comment->id = 1;
			$comment->goodsId = 1;
			$comment->userId = 1;
			$comment->content = 'this is only a comment';
			return $comment;

		}

		public function queryComment() {
			$comment = new Comment();
			$comment->id = 1;
			$comment->goodsId = 1;
			$comment->userId = 1;
			$comment->content = 'this is only a comment';			
			return $comment;

		}


		function __construct()
		{
			# code...
		}
	}

	$comment = new CommentDao();
	$aa = $comment->updateComment();
	var_dump($aa);
	$aa = $comment->queryComment();
	var_dump($aa);
 ?>