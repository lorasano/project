<?php
/* SVN FILE: $Id: default.ctp 7945 2008-12-19 02:16:01Z gwoo $ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision: 7945 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2008-12-18 18:16:01 -0800 (Thu, 18 Dec 2008) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset('ISO-8859-1'); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $javascript->link('prototype');
		echo $scripts_for_layout;
		echo $html->meta('icon');
		echo $html->css('interface');
	?>
</head>
<body>
   <body>
		<div id="container">
			<!-- PROFILE INTERFACE MENU -->
			<div id="top_header">
				<div id="top_header_center">
					<div id="logo"></div>
					<div id="header_elements_top">
						<ul>
							<li><a href="#" class="head_special-img_icon_link"><span>Ayuda</span></a></li>
							<li><a href="#" class="head_special_icon_link"><span>Cerrar sesión</span></a></li>
							<li><a href="#" class="head_normal_icon_link"><?php echo ($html->image('user_connected.png', array('width'=>'12', 'height'=>'25', 'alt'=>'Usuario')));?><span>Nombre de usuario</span></a></li>	
							<li><a href="#" class="head_normal_icon_link"><img src="img/home.png" width="12" height="25" alt="Inicio" /><span>Inicio</span></a></li>							
						</ul>
					</div>
				</div>				
			</div>
			<div id="bar_sections_container">
				<div id="bar_sections_container_center">
					<div id="bar_sections_top_position">
					<ul>
						<li><a href="#"><span><img src="img/dash.png" width="16" height="16"  align="top" alt="Dashboard" />Dashboard</span></a></li>
						<li><a href="#" class="tab_section_active"><span><img src="img/profile_active2.png" width="16" height="16" align="top" alt="My Profile" />Mi perfil</span></a></li>
						<li><a href="#"><span><img src="img/mail.png" width="16" height="16" align="top" alt="Mails" />Mensajes</span></a></li>
						<li><a href="#"><span><img src="img/group.png" width="16" height="16" align="top" alt="Contacts" />Contactos</span></a></li>
						<li><a href="#"><span><img src="img/tool.png" width="16" height="16" align="top" alt="Tools" />Herramientas</span></a></li>
					</ul>
					</div>
					<div id="interface_searcher">
						<form action="" method="post" id="form-search-interface" accept-charset="utf-8" >
							<div id="interface-init-bg"></div>
							<div id="interface_search-input"><input id="interface_searcher-input" type="text" class="text" name="search" value=""/></div>
							<div id="interface_search-bar-btn"><button id="interface_searcher-btn" type="submit"></button></div>							
                     <!--<div class="clear"></div>-->
						</form>
					</div>					
				</div>
			</div>
			<div id="bar_subsections_container">
				<div id="bar_subsections_container_center">
					<ul>
						<li><?php echo $ajax->link($html->tag('span', 'Información personal', null), array( 'controller' => 'common_data_users', 'action' => 'index'), /*array('class' => 'tab_subsection_active'), */array( 'update' => 'content_data'), null, false); ?></li>
						<li><?php echo $ajax->link($html->tag('span', 'Información profesional', null), array( 'controller' => 'com_profiles', 'action' => 'index'), array( 'update' => 'content_data'), null, false); ?></li>
						<li><a href="#"><span>Configuraciones</span></a></li>						
					</ul>
				</div>
			</div>
			<!-- END PROFILE INTERFACE MENU -->
			<div id="content_data">
				<?php $session->flash(); ?>
				<?php echo $content_for_layout; ?>
			</div>
		</div>			
   </body>
</html>
