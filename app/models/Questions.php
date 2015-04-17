<?php
	
	class Questions extends Database {

		public $title;
		public $answer;

		public function index($_DATABASE_CONNECTION) {
			// echo $_DATABASE_CONNECTION;

			// $result = $_DATABASE_CONNECTION->query("SELECT * FROM questions");
			
			// $row = mysqli_fetch_array($result);

			// $this->title = $row['question_title'];
			// $this->answer = $row['question_correct'];

		}
	}