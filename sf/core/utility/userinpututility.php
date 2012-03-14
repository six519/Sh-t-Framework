<?php
namespace sf\core\utility;

class UserInputUtility {
	
	static function addSlash($string) {
		//Add slash if magic_quotes_gpc is on
		return (get_magic_quotes_gpc())?$string:addslashes($string);
	}
	
	static function removeSlash($string) {
		//Remove slash if magic_quotes_gpc is on
		return (get_magic_quotes_gpc())?stripslashes($string):$string;
	}
	
}

?>