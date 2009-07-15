<?php

class User extends AppModel {
  var $name = 'User';
  var $components = array('Auth');
  var $primaryKey = 'id';
  var $hasOne = array (
    'CommonDataUser'	=> array	(	'ClassName' => 'CommonDataUser',
						'dependent' => true,
						'foreignKey' => 'users_id'),
    'ComProfile'	=> array	(	'ClassName' => 'ComProfile',
						'dependent' => true,
						'foreignKey' => 'users_id')
  );
  var $validate	= array (
    'email' => array(
      'notempty' => array(
            'rule' => 'email',
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Please enter a valid email'
      ),
      'unique' => array(
            'rule' => array('checkUnique','email'),
            'message' => 'Email taken. Use another'
      )
    ),
    'password'	=> array (	
      'notempty' => array	(
				  'rule'		=>	array('minLength', 3),
				  'required' 	=> 	true,
				  'allowEmpty' 	=>	false,
				  'message'	=> 	'Introduzca una contraseña'
				),
      'passwordSimilar'	=> array (
					'rule'		=> 	array('hashedMatch','password2'),
					'message'	=> 	'Contraseñas distintas'
				)
  ));   
  
  function checkUnique($data, $fieldName) {
    $valid = false;
    if (isset($fieldName) && $this->hasField($fieldName)) {
      $valid = $this->isUnique(array($fieldName => $data));
    }
    return $valid;
  }

  function checkPasswords ($data) {
    if ($data['password'] == $this->data['User']['password2']) 
      return true;
    return false;
  }

  function validateLogin($data) {
    $user = $this->find(array('username' => $data['username'], 'password' => md5($data['password'])), array('id','username'));
    
    if (!empty($user)) return $user['user'];
      return false;
  }
  
  function hashedMatch ($data, $field) {
	 $dataToMatch = Security::hash($this->data[$this->name][$field], null, true);
	 return array_pop($data) == $dataToMatch;
  }

}
?>
