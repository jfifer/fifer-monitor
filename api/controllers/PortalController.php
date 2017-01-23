<?php
include_once 'AbstractController.php';

class PortalController extends AbstractController {
    public function postAction($request) {
	return "bye";        
    }
    
    public function putAction($request) {
        
    }
    
    public function getAction($request) {
	return "hi";        
    }
}


?>
