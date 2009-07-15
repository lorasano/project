<?php

class UsersController extends AppController {
  var $name = 'Users';
  var $components = array('Auth', 'RequestHandler');
  var $helpers = array('Html', 'Form', 'Ajax', 'Javascript');
  
  function beforeFilter() {        
    $this->Auth->fields = array(
         'username' => 'email',
		   'password' => 'password');
    $this->Auth->loginAction = array('controller'=>'users','action'=>'login');
    $this->Auth->allow('login','signup', 'home', 'prueba', 'view');
    //$this->Auth->authorize = 'controller';  
    $this->Auth->loginError = "No puedes acceder !!";
    $this->set('loggedIn',$this->Session->check('Auth.User.id'));
    $this->Auth->loginRedirect = array('controller' => 'common_data_users', 'action' => 'index');
  }

  function signup() {
    if (!empty($this->data)) {
      if (isset($this->data['User']['password2'])) {
        //$this->data['User']['password'] = $this->Auth->password($this->data['User']['password']);
        $this->data['User']['password2hashed'] = $this->Auth->password($this->data['User']['password2']);
        $this->User->create();
      }
      if ($this->User->save($this->data)) {
        $this->Session->setFlash('Felicidades, has sido registrado!');
        $this->redirect(array('controller' => 'users', 'action' => 'home'));
      }
      else {
        $this->Session->setFlash('Ha habido un error en el registro, por favor intentelo de nuevo');
        $this->data = null;
      }
    }
  }

  function home () {
    $this->User->recursive = 1 ;    
    $users = $this->User->find('all');
    $this->set('users', $users);    
  }
  
  function prueba () {
    $this->User->recursive = 1 ;    
    $users = $this->User->find('all');
    $this->set('users', $users);
    //$this->render('prueba','ajax');
  }

 function show ($id=null) {
    if (!$id) {
      $this->Session->setFlash('Usuario Inexistente');
      $this->redirect(array('action'=>'home'));
    }
    $this->set('users', $this->User->read(null,$id));
   }
   
  function view($user)
  {
    if ($user = $this->User->CommonDataUser->findByFirstname($user)) {
        $this->set('user', $user);
    } else {
        $this->redirect('/');
        exit();
    }
  }
   
  function login () {
	 
  }
  
  function logout () {
      $this->Session->destroy('user');
      $this->redirect('/');
   }

// 	function index() {
// 		$this->redirect($this->Auth->logout());
// 
// 	}
// 	function logout () {
// 	  $this->Session->destroy('user');
// 	  $this->Session->setFlash('Estas fuera!');
// 
// 	  $this->redirect('login');
// 	}


 
}
?>
