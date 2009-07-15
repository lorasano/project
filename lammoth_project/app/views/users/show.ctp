<h2>	<?php e($users['User']['id']) ?>	</h2>


<dl>
  <dt><?php e($users['CommonDataUser']['firstname']) ?>
      <?php e($users['CommonDataUser']['lastname']) ?>	
  </dt>
</dl>	

  Direccion: <?php e($users['CommonDataUser']['address']) ?><br />
  Ciudad: 	<?php e($users['CommonDataUser']['city']) ?><br />
  Pais: <?php e($users['CommonDataUser']['country']) ?><br />
  Fecha de Nacimiento: <?php e($users['CommonDataUser']['birth']) ?><br />
  Telefono: <?php e($users['CommonDataUser']['phone']) ?><br />
  eMail de contacto: <?php e($users['CommonDataUser']['contact_email']) ?><br />
