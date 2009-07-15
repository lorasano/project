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
		echo $html->meta('icon');
		echo $html->css('generic');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<!-- HOMEPAGE ELEMENTS TOP -->
		<div id="index_content_top">
			<div id="index_headerbar_top">
            <div id="index_headerbar-empty_top"><!-- --></div>
				<div id="index_headerbar-elements_top">               
               <a href="#" id="index_header-idioms_top"><span><img src="img/index_icon-flag-spain_top.png" width="15" height="10" alt="Idioma" />Español</span></a>
               <p class="index_header-element-special_top">|</p>
               <a href="register" id="index_header-register_top"><span><img src="img/index_icon-register_top.png" width="10" height="10" alt="Regístrate" />Regístrate</span></a>
               <p class="index_header-element-special_top">|</p>
               <a href="#" id="index_header-session_top"><span><img src="img/index_icon-login_top.png" width="10" height="10" alt="Inicia sesión" />Iniciar sesión</span></a>                                            
				</div>
			</div>
			<div id="index_menu-logo-and-tip">
				<div id="index_logo"></div>
            <div id="index_tip">
               <div id="index_search-tip-space"><!-- --></div>
               <div id="index_search-tip">                  
                  <div id="index_search-tip-left">
                     <img src="img/index_recommend_top.png" width="12" height="16" alt="Búsqueda recomendada" />
                  </div>
                  <div id="index_search-tip-right">
                     <p>Puedes buscar cosas como: negocio, taller, mp3, trabajo, diseño, etc.</p>
                  </div>
               </div>
				</div>
			</div>
			<div id="index_menu-sections-and-search">
				<div id="index_sections">				   
				   <div id="index_sections-elements">
                  <ul>
                     <li><a href="#" class="index_sections-elements-active"><span>Inicio</span></a></li>
                     <li><a href="#"><span>Buscador</span></a></li>
                     <li><a href="#"><span>Tour</span></a></li>
                     <li><a href="#"><span>Acerca de nosotros</span></a></li>                     
                     <li><a href="#"><span>Contacto</span></a></li>
                  </ul>					
				   </div>					
				</div>
            <div id="index_searcher">
               <form action="" method="post" id="index_form-search" accept-charset="utf-8" > 
                  <div id="index_search-input"><input id="index_searcher-input" type="text" class="text" name="search" value=""/></div>
                  <div id="index_search-btn"><button id="index_searcher-btn" type="submit"></button></div>
               </form>
            </div>
			</div>			
		</div>
		<!-- END HOMEPAGE ELEMENTS TOP -->		
		<div id="content">
			<?php $session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>		
	</div>	
</body>
</html>