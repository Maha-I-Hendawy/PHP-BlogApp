<?php 

class Post {

	public $title;

	public $content;

	public $author;


	function __construct($title, $content, $author){

		$this->title = $title;
		$this->content = $content;
		$this->author = $author;

	}

	function postinfo(){

		echo $this->title;
	}
}


$post = new Post("title", "this is a content", 3);

$post->postinfo();