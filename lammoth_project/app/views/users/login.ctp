<!-- BAR LIMIT TOP -->
<div id="bar-limit-top"><!-- --></div>
<div class="content">
<h1 class="common_title">Inicia Sesi�n en Negofeed</h1>
<?php	if ($session->check('Message.auth')) 	$session->flash('auth');?>
<?php if($form->isFieldError('User.email')) e($form->error('User.email', null, array('class' => 'message'))); ?>
<?php if($form->isFieldError('User.password')) e($form->error('User.password', null, array('class' => 'message'))); ?>
<div class="default_form">
   <br />
   <?php echo $form->create('User', array('url' => array('controller' => 'users', 'action' => 'login'))); ?>
      <div class="default-form-elements">
         <div class="default-form-elem-label"><label for="UserEmail" ><span>Tu email</span></label></div>
         <div class="default-form-elem-input"><?php echo $form->input('User.email', array( 'label' => false)); ?></div>
      </div>
      <div class="default-form-elements">
         <div class="default-form-elem-label"><label for="UserPassword"><span>Tu contrase�a</span></label></div>
         <div class="default-form-elem-input"><?php echo $form->input('User.password', array( 'label' => false)); ?></div>
      </div>
      <div id="default-form_button">
         <br />
			<button id="default-form_btn" type="submit">
				<span id="default-form_btn-span_left">
					<span id="default-form_btn-span_right">Iniciar</span>
				</span>
			</button>
		</div>
   <?php echo $form->end(); ?>
</div>
<div id="register-form-panel-info">
   <div class="register-form-info">
      <div class="register-form-info-border-top-left">
         <div class="register-form-info-border-top-right">
            <div class="register-form-info-border-bottom-left">
               <div class="register-form-info-border-bottom-right">
                  <h2>Disfruta ahora de Negofeed</h2>
                  <p>Hazte miembro de Negofeed, �es muy f�cil!, solo tienes que introducir tu direcci�n de email y una contrase�a para tu cuenta. Una
                  vez que te hayas registrado pertenecer�s a la red de Negofeed. Podr�s personalizar tu perfil a tu gusto, comprar, vender o solicitar
                  productos, compartir experiencias con los dem�s miembros de Negofeed, buscar empleo, gestionar tus facturas, etc.
                  <br /><br />
                  Por favor lee nuestra <a href="#">pol�tica de privacidad</a> para conocer como Negofeed gestiona sus datos. Si tiene alg�n problema o el proceso de
                  registro presenta alg�n problema, por favor <a href="#">contacte con nosotros</a>.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br />
   <div class="register-form-info">
      <div class="register-form-info-sub-border-top-left">
         <div class="register-form-info-sub-border-top-right">
            <div class="register-form-info-sub-border-bottom-left">
               <div class="register-form-info-sub-border-bottom-right">              
                  <p><a href="#">�Olvidaste la contrase�a?</a></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>