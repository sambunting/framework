<?php

	class App {
<<<<<<< HEAD
		
		public function initWhoops() {
			$whoops = new \Whoops\Run;
			$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
			$whoops->register();

			return $this;
		}

=======
>>>>>>> parent of 152b5a6... Added Whoops
		protected $controller = 'home';
		protected $method = 'index';
		protected $params = [];

		public function __construct() {
			$url = $this->phraseURL();

			if (file_exists('../app/controllers/'.$url[0].'.php')) {
				$this->controller = $url[0];
				unset($url[0]);
			}

			require_once '../app/controllers/'.$this->controller.'.php';
		
			$this->controller = new $this->controller;

			if(isset($url[1])) {
				if(method_exists($this->controller, $url[1])) {
					$this->method = $url[1];
					unset($url[1]);
				}
			}

			$this->params = $url ? array_values($url) : [];

			call_user_func_array([$this->controller, $this->method], $this->params);
		}

		public function phraseURL() {
			if (isset($_GET['url'])) {
				return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
			}
		}
	}