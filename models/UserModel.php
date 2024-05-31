<?php 

class User {

	public string $username;

	public string $email;

	public string $password;


	public function __constructor(string $userusername, string $useremail, string $userpassword){

		$username = $this->userusername;
		$email = $this->email;
		$password = $this->password;
	}

	public function userinfo(){

		echo $this->username . ' ' . $this->email;
	}
}