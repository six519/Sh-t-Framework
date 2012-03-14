<?php
/*
 * Shit Framework loader 
 */
use sf\core\ShitFramework;
use sf\core\response\Http404;

function __autoload($classname) {
	@include_once(strtolower(str_replace("\\", "/",$classname)) . ".php");
}

//Run Shit Framework
$shitFramework = new ShitFramework();
$shitFramework->run();

?>