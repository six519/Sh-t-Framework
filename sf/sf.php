<?php
/*
 * Shit Framework loader 
 */
use sf\core\ShitFramework;
use sf\core\http\Http404;

function __autoload($classname) {

	$fileToLoad = strtolower(str_replace("\\", "/",$classname)) . ".php";

	if(file_exists($fileToLoad)) {
		include_once($fileToLoad);
	} else {
		$http404 = new Http404();
	}
	
}

//Run Shit Framework
$shitFramework = new ShitFramework();
$shitFramework->run();

?>