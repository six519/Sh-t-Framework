<?php
namespace sf\core;
use sf\core\http\HttpRequest;
use sf\core\SF_View;

class SF_Controller {
	
	public $request;
	public $view;
	
	function __construct() {
		$this->view = new SF_View();
		$this->request = new HttpRequest();
	}
	
	function index() {
	}
	
}

?>