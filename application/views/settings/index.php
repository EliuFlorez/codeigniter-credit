<div class="header clearfix"></div>
<div class="row marketing">
	<div class="col-lg-12">
	<?php echo form_open('settings', array('class' => 'form-horizontal')); ?>
		<input type="hidden" name="id" value="1">
		<?php echo validation_errors('<span class="error">', '</span>'); ?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center" style="background-color:blue"><h4 style="color:white">TIPO PRESTAMO</h4></th>
					<th class="text-center"><h4>MONTO MINIMO</h4></th>
					<th class="text-center"><h4>MONTO MAXIMO</h4></th>
					<th class="text-center"><h4>PLAZO MINIMO (MES)</h4></th>
					<th class="text-center"><h4>PLAZO MAXIMO (MES)</h4></th>
					<th class="text-center"><h4>SEGURO DESGRAVAMEN (MES)</h4></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>CREDISIMPLE</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_1_mmin', 'id' => 'credit_1_mmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_1_mmin', $settings['credit_1_mmin']))); ?>
						<?php echo form_error('credit_1_mmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_1_mmax', 'id' => 'credit_1_mmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_1_mmax', $settings['credit_1_mmax']))); ?>
						<?php echo form_error('credit_1_mmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_1_pmin', 'id' => 'credit_1_pmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_1_pmin', $settings['credit_1_pmin']))); ?>
						<?php echo form_error('credit_1_pmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_1_pmax', 'id' => 'credit_1_pmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_1_pmax', $settings['credit_1_pmax']))); ?>
						<?php echo form_error('credit_1_pmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_1_seguro', 'id' => 'credit_1_seguro', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_1_seguro', $settings['credit_1_seguro']))); ?>
						<?php echo form_error('credit_1_seguro'); ?>
					</td>
				</tr>
				<tr>
					<td>CREDIAGRO A</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_2_mmin', 'id' => 'credit_2_mmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_2_mmin', $settings['credit_2_mmin']))); ?>
						<?php echo form_error('credit_2_mmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_2_mmax', 'id' => 'credit_2_mmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_2_mmax', $settings['credit_2_mmax']))); ?>
						<?php echo form_error('credit_2_mmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_2_pmin', 'id' => 'credit_2_pmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_2_pmin', $settings['credit_2_pmin']))); ?>
						<?php echo form_error('credit_2_pmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_2_pmax', 'id' => 'credit_2_pmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_2_pmax', $settings['credit_2_pmax']))); ?>
						<?php echo form_error('credit_2_pmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_2_seguro', 'id' => 'credit_2_seguro', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_2_seguro', $settings['credit_2_seguro']))); ?>
						<?php echo form_error('credit_2_seguro'); ?>
					</td>
				</tr>
				<tr>
					<td>CREDIAPOYO</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_3_mmin', 'id' => 'credit_3_mmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_3_mmin', $settings['credit_3_mmin']))); ?>
						<?php echo form_error('credit_3_mmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_3_mmax', 'id' => 'credit_3_mmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_3_mmax', $settings['credit_3_mmax']))); ?>
						<?php echo form_error('credit_3_mmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_3_pmin', 'id' => 'credit_3_pmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_3_pmin', $settings['credit_3_pmin']))); ?>
						<?php echo form_error('credit_3_pmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_3_pmax', 'id' => 'credit_3_pmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_3_pmax', $settings['credit_3_pmax']))); ?>
						<?php echo form_error('credit_3_pmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_3_seguro', 'id' => 'credit_3_seguro', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_3_seguro', $settings['credit_3_seguro']))); ?>
						<?php echo form_error('credit_3_seguro'); ?>
					</td>
				</tr>
				<tr>
					<td>CREDITO PREFERENCIAL</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_4_mmin', 'id' => 'credit_4_mmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_4_mmin', $settings['credit_4_mmin']))); ?>
						<?php echo form_error('credit_4_mmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_4_mmax', 'id' => 'credit_4_mmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_4_mmax', $settings['credit_4_mmax']))); ?>
						<?php echo form_error('credit_4_mmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_4_pmin', 'id' => 'credit_4_pmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_4_pmin', $settings['credit_4_pmin']))); ?>
						<?php echo form_error('credit_4_pmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_4_pmax', 'id' => 'credit_4_pmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_4_pmax', $settings['credit_4_pmax']))); ?>
						<?php echo form_error('credit_4_pmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_4_seguro', 'id' => 'credit_4_seguro', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_4_seguro', $settings['credit_4_seguro']))); ?>
						<?php echo form_error('credit_4_seguro'); ?>
					</td>
				</tr>
				<tr>
					<td>CREDITO PRODUCTIVO</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_5_mmin', 'id' => 'credit_5_mmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_5_mmin', $settings['credit_5_mmin']))); ?>
						<?php echo form_error('credit_5_mmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_5_mmax', 'id' => 'credit_5_mmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_5_mmax', $settings['credit_5_mmax']))); ?>
						<?php echo form_error('credit_5_mmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_5_pmin', 'id' => 'credit_5_pmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_5_pmin', $settings['credit_5_pmin']))); ?>
						<?php echo form_error('credit_5_pmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_5_pmax', 'id' => 'credit_5_pmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_5_pmax', $settings['credit_5_pmax']))); ?>
						<?php echo form_error('credit_5_pmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_5_seguro', 'id' => 'credit_5_seguro', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_5_seguro', $settings['credit_5_seguro']))); ?>
						<?php echo form_error('credit_5_seguro'); ?>
					</td>
				</tr>
				<tr>
					<td>SINCO</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_6_mmin', 'id' => 'credit_6_mmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_6_mmin', $settings['credit_6_mmin']))); ?>
						<?php echo form_error('credit_6_mmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_6_mmax', 'id' => 'credit_6_mmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_6_mmax', $settings['credit_6_mmax']))); ?>
						<?php echo form_error('credit_6_mmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_6_pmin', 'id' => 'credit_6_pmin', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_6_pmin', $settings['credit_6_pmin']))); ?>
						<?php echo form_error('credit_6_pmin'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_6_pmax', 'id' => 'credit_6_pmax', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_6_pmax', $settings['credit_6_pmax']))); ?>
						<?php echo form_error('credit_6_pmax'); ?>
					</td>
					<td class="text-right">
						<?php echo form_input(array('name' => 'credit_6_seguro', 'id' => 'credit_6_seguro', 'placeholder' => '0,00', 'class' =>'form-control', 'value' => set_value('credit_6_seguro', $settings['credit_6_seguro']))); ?>
						<?php echo form_error('credit_6_seguro'); ?>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="form-group">
			<div class="col-md-12">
				<button type="submit" id="Save" class="btn btn-primary">Guardar Cambios</button>
				<?php echo anchor('settings/logout', 'Cerrar Sesion', 'btn btn-primary') ?>
			</div>
		</div>
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
				<?php echo anchor('settings/logout', 'Cerrar Sesion', 'btn btn-primary') ?>
			</div>
		</div>
	<?php echo form_close(); ?>
	</div>
</div>
<div class="header clearfix"></div>