#### NOTE: THIS IS NOT YET FINISH!!

#### Location of views and controllers

1) sf/app/controllers/
2) sf/app/views/

#### Set the default controller at index.php (line 32)

define("SF_DEFAULT_CONTROLLER", "DefaultController"); //name of controller without ".php" extension

#### DefaultController code (defaultcontroller.php)


namespace sf\\app\\controllers;
use sf\\core\\SF_Controller;
class DefaultController extends SF_Controller {

	function __construct() {
		SF_Controller::__construct();
	}
	
	function index() {
		$this->view->load('default.html'); //load view
	}

}

