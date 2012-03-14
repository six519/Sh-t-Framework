<?php
namespace sf\core\http\data;
use sf\core\utility\UserInputUtility;

class FormData {
	
	function __construct() {
		
	}
	
	function get($postName,$defaultValue = '') {
		if(isset($_POST[$postName])) {
			return UserInputUtility::addSlash($_POST[$postName]);
		} else {
			return ($defaultValue)?addslashes($defaultValue):'';
		}
	}
	
}

?>