<?php
namespace sf\core\http;

class Http404 extends BaseHttp {
	function __construct() {
		header("HTTP/1.0 404 Not Found");
	}
}

?>