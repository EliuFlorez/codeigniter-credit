<div class="header clearfix"></div>
<div class="row">
	<div class="col-lg-12">
		<?php echo form_open('settings/login', array('class' => 'form-horizontal')); ?>
			<?php if(isset($errors)) { ?>
				 <div class="alert alert-danger">
					  Error: <?php echo $errors; ?>
				 </div>
			<?php } ?>
			<div class="form-group">
				<label class="col-md-4 control-label">Nombre de usuario:</label>
				<div class="col-md-6">
					<?php echo form_input(array('name' => 'username', 'id' => 'username', 'placeholder' => '...', 'class' =>'form-control', 'value' => set_value('username'))); ?>
					<?php echo form_error('username'); ?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-4 control-label">Contraseña:</label>
				<div class="col-md-6">
					<?php echo form_password(array('name' => 'password', 'id' => 'password', 'placeholder' => '...', 'class' =>'form-control')); ?>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" id="Save" class="btn btn-primary">Iniciar sesion</button>
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>
<div class="header clearfix"></div>