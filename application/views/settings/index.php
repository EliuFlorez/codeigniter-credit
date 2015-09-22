<div class="header clearfix"></div>
<div class="row marketing">
	<div class="col-lg-12">
	<?php echo form_open('settings', array('class' => 'form-horizontal')); ?>
		<input type="hidden" name="id" value="1">
		<?php echo validation_errors('<span class="error">', '</span>'); ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center" style="background-color:blue"><h4 style="color:white">SUBCALIFICACION CONTABLE</h4></th>
					<th class="text-center"><h4>MONTO MINIMO</h4></th>
					<th class="text-center"><h4>MONTO MAXIMO</h4></th>
					<th class="text-center"><h4>MONTO EFECTIVO</h4></th>
					<th class="text-center"><h4>TASA NOMINA</h4></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>MINORISTA</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'base_min', 'id' => 'base_min', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('base_min', $settings['base_min']))); ?>
						<?php echo form_error('base_min'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'base_max', 'id' => 'base_max', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('base_max', $settings['base_max']))); ?>
						<?php echo form_error('base_max'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'base_efectiva', 'id' => 'base_efectiva', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('base_efectiva', $settings['base_efectiva']))); ?>
						<?php echo form_error('base_efectiva'); ?>
					</td>
					<td class="text-right" style="background-color:yellow">
						<?php echo form_input(array('name' => 'base_nomina', 'id' => 'base_nomina', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('base_nomina', $settings['base_nomina']))); ?>
						<?php echo form_error('base_nomina'); ?>
					</td>
				</tr>
				<tr>
					<td>ACUMULACION SIMPLE</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'simple_min', 'id' => 'simple_min', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('simple_min', $settings['simple_min']))); ?>
						<?php echo form_error('simple_min'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'simple_max', 'id' => 'simple_max', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('simple_max', $settings['simple_max']))); ?>
						<?php echo form_error('simple_max'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'simple_efectiva', 'id' => 'simple_efectiva', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('simple_efectiva', $settings['simple_efectiva']))); ?>
						<?php echo form_error('simple_efectiva'); ?>
					</td>
					<td class="text-right" style="background-color:yellow">
						<?php echo form_input(array('name' => 'simple_nomina', 'id' => 'simple_nomina', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('simple_nomina', $settings['simple_nomina']))); ?>
						<?php echo form_error('simple_nomina'); ?>
					</td>
				</tr>
				<tr>
					<td>ACUMULACION AMPLIADA</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'ampliada_min', 'id' => 'ampliada_min', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('ampliada_min', $settings['ampliada_min']))); ?>
						<?php echo form_error('ampliada_min'); ?>
					</td>
					<td class="text-center">EN ADELANTE</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'ampliada_efectiva', 'id' => 'ampliada_efectiva', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('ampliada_efectiva', $settings['ampliada_efectiva']))); ?>
						<?php echo form_error('ampliada_efectiva'); ?>
					</td>
					<td class="text-right" style="background-color:yellow">
						<?php echo form_input(array('name' => 'ampliada_nomina', 'id' => 'ampliada_efectivo', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('ampliada_nomina', $settings['ampliada_nomina']))); ?>
						<?php echo form_error('ampliada_nomina'); ?>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="form-group">
			<div class="col-md-12">
				<button type="submit" id="Save" class="btn btn-primary">Guardar Cambios</button>
			</div>
		</div>
	<?php echo form_close(); ?>
	</div>
</div>
<div class="header clearfix"></div>