<?php

class ComProfile extends AppModel {
  var $name = 'ComProfile';
  var $primaryKey = 'users_id';

 
  var $hasOne = array (
    'User'	=> array	(	'ClassName' => 'User',
					'dependent' => true,
					'foreignKey' => 'id'
				),
    'ComSectorsActivitie'	=> array	(	'ClassName' => 'ComSectorsActivitie',
							'dependent' => false,
							'foreignKey' => 'id'
						 )
  ); 
}
?>