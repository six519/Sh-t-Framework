<?php
namespace sf\core\http\data;
use sf\core\utility\UserInputUtility;

class SessionData {
	
	function __construct() {
		
	}
	
	function get($cookieName,$defaultValue = '') {
		if(isset($_COOKIE[$cookieName])) {
			return UserInputUtility::addSlash($_COOKIE[$cookieName]);
		} else {
			if($defaultValue) {
				//@setcookie($cookieName,$defaultValue);
				return addslashes($defaultValue);
			} else {
				return '';
			}
		}
	}
	
	function set($cookieName,$cookieValue) {
		return @setcookie($cookieName,$cookieValue);
	}
	
}


?>