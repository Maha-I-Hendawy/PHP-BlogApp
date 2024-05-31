<?php 


class Comment {

	public $comment;
	public $author;
	public $post;


	function __construct($comment, $author, $post){


		$this->comment = $comment;
		$this->author = $author;
		$this->post = $post;


	}

	function commentinfo(){

		echo $this->comment;
	}
}

$comment = new Comment("this is a text", 3, 3);

$comment->commentinfo();