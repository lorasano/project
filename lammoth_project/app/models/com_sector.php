<?php

class ComSector extends AppModel {
  var $name = 'ComSector';

 
  var $hasMany = array (
    'ComSectorsActivitie'	=> array	(	'ClassName' => 	'ComSectorsActivitie',
							'dependent' => false
				)
  ); 
}
?>