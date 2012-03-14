<?php
namespace sf\app\controllers;
use sf\core\SF_Controller;

class DefaultController extends SF_Controller {
	
	function __construct() {
		SF_Controller::__construct();
	}
	
	function index() {
		$this->view->load('default.html');
	}

}

?>