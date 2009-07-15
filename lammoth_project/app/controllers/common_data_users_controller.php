<?php

class CommonDataUsersController extends AppController {
   var $name = 'CommonDataUsers';
	var $components = array('Auth', 'RequestHandler');
	var $helpers = array('Html', 'Form', 'Ajax', 'Javascript');
	
	function beforeFilter() {
		$this->layout = 'my_profile';
		$this->RequestHandler->setContent('html','text/html');
	}

   function index($users_id=null) {
	
		$users_id = $this->Session->read('Auth.User.id');
      $this->set('CommonDataUsers', $this->CommonDataUser->read(null,$users_id));
		
	}
}
?>