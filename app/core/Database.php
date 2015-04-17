<?php 
	
	class Database {
		public $_DATABASE_CONNECTION;

		public function __construct() {
			$this->_DATABASE_CONNECTION = mysqli_connect("localhost", "root", "", "quiz");
		}

	}