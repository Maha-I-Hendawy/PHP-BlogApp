<?php 

class Post {

	public string $title;

	public string $content;

	public int $author;


	public function __constructor(string $posttitle, string $postcontent, int $postauthor){

		$title = $this->posttitle;
		$content = $this->postcontent;
		$author = $this->postauthor;

	}

	public function postinfo(){

		echo this->$title;
	}
}