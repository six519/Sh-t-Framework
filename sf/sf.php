<?php
/*
 * Shit Framework loader 
 */
use sf\core\ShitFramework;
use sf\core\http\Http404;

function __autoload($classname) {

	$fileToLoad = str_replace("\\", "/",$classname) . ".php";
	$fileToLoadAllLower = strtolower($fileToLoad);

	if(file_exists($fileToLoadAllLower)) {
		include_once($fileToLoadAllLower);
	} else {
		if(file_exists($fileToLoad)) {
			include_once($fileToLoad);
		} else {
			$http404 = new Http404();
		}
	}
	
}

//Run Shit Framework
$shitFramework = new ShitFramework();
$shitFramework->run();

?>