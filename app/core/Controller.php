<?php
	class Controller {

		public function model($model) {
			require_once '../app/models/'.$model.'.php';
			return new $model();
		}

		public function view($view, $data = []) {
			$loader = new Twig_Loader_Filesystem('../app/views/');

			$twig = new Twig_Environment($loader);

			echo $twig->render($view.'.php', $data);
		}
	}