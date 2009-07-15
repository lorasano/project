<?php echo $html->charset('iso-8859-1')?> 
Aqui van los datos personales
<h2>	<?php e($CommonDataUsers['CommonDataUser']['users_id']); ?>	</h2>


<?php e($CommonDataUsers['CommonDataUser']['firstname']);
    e($CommonDataUsers['CommonDataUser']['lastname']); ?>	
  
  Direccion: <?php e($CommonDataUsers['CommonDataUser']['address']); ?><br />
  Ciudad: 	<?php e($CommonDataUsers['CommonDataUser']['city']); ?><br />
  Pais: <?php e($CommonDataUsers['CommonDataUser']['country']); ?><br />
  Fecha de Nacimiento: <?php e($CommonDataUsers['CommonDataUser']['birth']); ?><br />
  Telefono: <?php e($CommonDataUsers['CommonDataUser']['phone']); ?><br />
  eMail de contacto: <?php e($CommonDataUsers['CommonDataUser']['contact_email']); ?><br />
