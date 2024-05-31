<?php 


class Comment {

	public string $comment;
	public int $author;
	public int $post;


	public function __constructor(string $commentcom, int $commentauthor, int $commentpost){


		$comment = $this->commentcom;
		$author = $this->commentauthor;
		$post = $this->commentpost;


	}

	public function commentinfo(){

		echo this->$comment;
	}
}