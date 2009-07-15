<?php

class CommonDataUser extends AppModel {
  var $name = 'CommonDataUser';
  var $primaryKey = 'users_id';
 
   var $hasOne = array (
     'User'	=> array	(	'ClassName' => 'User',
 					'dependent' => true,
 					'foreignKey' => 'id'
 				)
   ); 


}
?>