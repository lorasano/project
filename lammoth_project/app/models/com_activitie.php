<?php

class ComActivitie extends AppModel {
  var $name = 'ComActivitie';

 
  var $hasMany = array (
    'ComSectorsActivitie'	=> array	(	'ClassName' => 'ComSectorsActivitie',
							'dependent' => false
				)
  ); 
}
?>