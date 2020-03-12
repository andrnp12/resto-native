<?php

class database{
	private $db = [
		'host' => 'localhost',
		'username' => 'root',
		'password' => '',
		'database' => 'db_resto'
	];

	public function data(){
		return $this->db;
	}
}