<?php 
	class Home extends Controller {

		public function index($_DATABASE_CONNECTION) {
			$questions = $this->model('Questions');
			$questions->index($_DATABASE_CONNECTION);

			$this->view('index', ["title" => $questions->title, "answer" => $questions->answer]);
		}
	}