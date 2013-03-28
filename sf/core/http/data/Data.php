<?php
namespace sf\core\http\data;
use sf\core\http\data\FormData;
use sf\core\http\data\SessionData;

class Data {
	
	public $form;
	public $session;
	
	function __construct() {
		$this->form = new FormData();
		$this->session = new SessionData();
	}
	
}

?>