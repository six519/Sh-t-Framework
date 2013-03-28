<?php
namespace sf\core;
use sf\core\http\HttpRequest;
use sf\core\http\Http404;

class ShitFramework {
	
	private $request;
	
	public function __construct() {
		$this->request = new HttpRequest();
	}
	
	public function run() {
		//Get requested controller name
		//$this->request->controllerName = str_replace(str_replace(SF_INDEX,"",SF_SCRIPT_NAME),"",SF_REQUEST_URI);
		$urlRequest = explode("/", preg_replace("/\/" . SF_INDEX . "|\/$/", "", SF_REQUEST_URI));

		if(count($urlRequest) == 1) {
			//Set default controller
			$this->request->controllerName = SF_DEFAULT_CONTROLLER;
		} else {
			//Set custom controller
			$this->request->controllerName = $urlRequest[1];
		}
		
		//Check if controller exists
		if(class_exists('sf\\app\\controllers\\' . $this->request->controllerName)) {
			//Evaluate and create and instance of controller
			$controller = "sf\\app\\controllers\\" . $this->request->controllerName;
			$controller = new $controller();

			//Check if there's a method
			if(count($urlRequest) > 2) {
				//There's a method
				//Remove unwanted array index and the controller name
				array_shift($urlRequest);
				array_shift($urlRequest);
				//Get the method name
				$this->request->method = $urlRequest[0];

				if(method_exists($controller,$this->request->method)) {
					//method exists
					
					if(count($urlRequest) > 1) {
						//Remove method name
						array_shift($urlRequest);
						$this->request->methodParameters = $urlRequest;
						//Pass all of the request to controller
						$controller->request = $this->request;
						//execute the method with parameters below
						call_user_func_array(array($controller,$this->request->method),$this->request->methodParameters);
						
					} else {
						//Pass all of the request to controller
						$controller->request = $this->request;
						//Execute the method without parameters
						$controller->{$this->request->method}();
					}
					
				} else {
					//HTTP 404
					$http404 = new Http404();
				}
				
			} else {
				//Pass all of the request to controller
				$controller->request = $this->request;
				//Call the index method
				$controller->index();
			}
			
		} else {
			//HTTP 404
			$http404 = new Http404();
		}
		
	}
	
}
?>