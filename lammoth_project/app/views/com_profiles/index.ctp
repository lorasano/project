<?php echo $html->charset('iso-8859-1'); ?> 
Aqui van los datos empresariales
<h2>	<?php e($ComProfiles['ComProfile']['users_id']); ?>	</h2>

  Empresa: <?php e($ComProfiles['ComProfile']['company_name']); ?><br />
  Fax: <?php e($ComProfiles['ComProfile']['fax']); ?>		<br />
  A�o de creacion: <?php e($ComProfiles['ComProfile']['creation_year']); ?><br />
  N�mero de empleados: 	<?php e($ComProfiles['ComProfile']['employee_number']); ?><br />
  CIF: <?php e($ComProfiles['ComProfile']['cif']); ?><br />
  Logo: <?php e($ComProfiles['ComProfile']['logo']); ?><br />
  
