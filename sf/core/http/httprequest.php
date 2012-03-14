<?php
namespace sf\core\http;
use sf\core\http\data\Data;

class HttpRequest extends BaseHttp {
	
	public $controllerName = '';
	public $method = '';
	public $methodParameters = array();
	public $data;

	function __construct() {
		$this->data = new Data();	
	}
	
}

?>