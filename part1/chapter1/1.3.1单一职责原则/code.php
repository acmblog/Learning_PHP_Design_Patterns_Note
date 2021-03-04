<?php

class TellAll {
	private $userAgent;
	public function __construct() {
		$this->userAgent = $_SERVER['HTTP_USER_AGENT'];
		echo $this->userAgent;
	}
}

new tellAll();

// echo
// Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36
