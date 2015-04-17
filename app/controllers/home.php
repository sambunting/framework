<?php 
	class Home extends Controller {

		public function index() {
			$user = $this->model('user');

			$this->view('index');
		}
	}