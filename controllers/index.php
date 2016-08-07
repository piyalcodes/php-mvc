<?php
	class Index extends Controller {
		function __construct() {
			parent::__construct();			 
			$this->view->render('views/index');
			$this->model->loadQuery('model/index');
		}
	}
?>