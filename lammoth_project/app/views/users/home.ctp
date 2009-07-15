<?php
if (empty($users)): ?>
	<p> No existen usuarios </p>
<?php else:?>
<!-- CENTRAL BANNER -->
	<div id="index_banner-bg-top"></div>
	<div id="index_banner_content">
		<div id="index_banner_content_all">
         <div id="index_banner_center">               
            <div id="index_banner-whatis">
					<img src="img/banner_left.png" width="513" height="191" alt="Negofeed es una aplicación web que le permite realizar negocios en internet de forma rápida y sencilla" />                  
               <div id="index_banner-buttons">
						<div id="index_banner-button-register">
                     <div class="index_banner-button-align">
                        <a href="register"><span>Regístrate</span></a>
                     </div>
                  </div>
                  <div id="index_banner-button-login">
                     <div class="index_banner-button-align">
                        <a href="#"><span>Inicia sesión</span></a>
                     </div> 
                  </div>
               </div>   
            </div>
            <div id="index_banner-tips">
					<img src="img/banner_right.png" width="387" height="240" alt="Haz crecer las ventas de tu negocio, aumente su presencia en Internet, crea tu propia lista de contactos y negocia con ellos, Busca todo lo que necesites, productos, empresas, personas, etc" />                     
            </div> 
         </div>
			<div class="clear"></div>
		</div>
	</div>
   <div id="index_subbanner_center"></div>
	<!-- END CENTRAL BANNER -->
	<div class="content">
	<div id="index_container_last-users">
		<div class="index_elem_container_border_top-left">
		   <div class="index_elem_container_border_top-right">
				<div class="index_elem_container_border_bottom-left">
					<div class="index_elem_container_border_bottom-right">
						<h1>Últimos usuarios registrados</h1>
						<?php foreach ($users as $user) :?>
							<div class="index_elements_last-user">
								<div class="index_last-user-det-horiz-top">
									<div class="index_last-user-det-horiz-bottom">
										<div class="index_last-user-det-vert-left">
											<div class="index_last-user-det-vert-right">
												<div class="index_last-user-detail_border_top-left">
													<div class="index_last-user-detail_border_top-right">
														<div class="index_last-user-detail_border_bottom-left">
															<div class="index_last-user-detail_border_bottom-right">
																<div class="index_last-users-data">
																	<div class="index_last-users-photo"><?php echo $user['CommonDataUser']['photo'];	?></div>
																	<div class="index_last-users-data">
																		<div class="index_last-users-username">
																			<?php
																				if (empty($user['CommonDataUser']['firstname'])) {
																					echo $ajax->link('empty', array( 'controller' => 'users', 'action' => 'prueba'), array( 'update' => 'pruebas') );
																				}
																				else {
																					echo $user['CommonDataUser']['firstname'];
																				}
																			?>
																			</div>		
																		<div class="index_last-users-creation"><?php echo $user['User']['created']; ?></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="pruebas">
	</div>
	</div>
<?php endif; ?>