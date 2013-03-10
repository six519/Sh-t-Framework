<?php
namespace sf\core;

class SF_View {
	
	function __construct() {
		$this->view = $this;
	}
	
	function load($viewName, $data=array()) {
		extract($data);
		include_once(SF_VIEWS_DIR . $viewName);
	}
	
}

?>