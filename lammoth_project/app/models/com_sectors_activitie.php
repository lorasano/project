<?php

class ComSectorsActivitie extends AppModel {
  var $name = 'ComSectorsActivitie';

 
  var $belongsTo = array (
    'ComActivitie'	=> array	(	'ClassName' => 'ComActivitie',
						'foreignKey' => 'com_activities_id',
						'dependent' => false
				),
    'ComSector'		=> array	(	'ClassName' => 'ComSector',
						'foreignKey' => 'com_sectors_id',
						'dependent' => false
				)
  ); 
}
?>