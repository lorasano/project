<?php

   foreach ($users as $user) :
		echo $user['CommonDataUser']['photo'];	
		if (empty($user['CommonDataUser']['firstname'])) {
			echo "Empty";
		}
		else {
			echo $user['CommonDataUser']['firstname'];
		}															
		echo $user['User']['created'];	
	endforeach;
   
?>