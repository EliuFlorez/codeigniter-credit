<div class="header clearfix"></div>
<script type="text/javascript">
	$(document).ready(function() {
		$("#credit-1").show();
		$(".credit").change(function() {
			$(this).find("option:selected").each(function() {
				var value = $(this).attr("value");
				$(".box").hide();
				$("#credit-"+value).show();
			});
		}).change();
	});
</script>
<div class="row marketing">
	<div class="col-lg-8">
		<?php echo form_open('credits', array('class' => 'form-horizontal')); ?>
			<p>Valores referenciales, las tasas, montos y plazos pueden variar sin previo aviso.</p>
			<?php $errors = $this->session->flashdata('error'); ?>
			<?php if(!empty($errors)) { ?>
				 <div class="alert alert-danger">
					  Error: <?php echo $errors; ?>
				 </div>
			<?php } ?>
			<div class="form-group">
				<label class="col-md-4 control-label">Tipo de Crédito:</label>
				<div class="col-md-6">
					<select class="credit form-control" name="type">
						<option value="1" <?php echo set_select('type', '1', true); ?>>CREDISIMPLE</option>
						<option value="2" <?php echo set_select('type', '2'); ?>>CREDIAGRO A</option>
						<option value="3" <?php echo set_select('type', '3'); ?>>CREDIAPOYO</option>
						<option value="4" <?php echo set_select('type', '4'); ?>>CREDITO PREFERENCIAL</option>
						<option value="5" <?php echo set_select('type', '5'); ?>>CREDITO PRODUCTIVO</option>
						<option value="6" <?php echo set_select('type', '6'); ?>>SINCO</option>
					</select>
					<?php echo form_error('type'); ?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-4 control-label">Monto a solicitar USD$:</label>
				<div class="col-md-6">
					<?php echo form_input(array('name' => 'value', 'id' => 'value', 'placeholder' => '00.00', 'class' =>'form-control', 'value' => set_value('value'))); ?>
					<?php echo form_error('value'); ?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-4 control-label">Plazo:</label>
				<div class="col-md-6">
					<?php echo form_input(array('name' => 'plazo', 'id' => 'plazo', 'placeholder' => '0', 'class' =>'form-control', 'value' => set_value('plazo'))); ?>
					<?php echo form_error('plazo'); ?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-4 control-label">Dias de pago:</label>
				<div class="col-md-6">
					<?php echo form_input(array('name' => 'dia', 'id' => 'dia', 'placeholder' => '0', 'class' =>'form-control', 'value' => set_value('dia'))); ?>
					<?php echo form_error('dia'); ?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-4 control-label">Tipo Tabla Amortización:</label>
				<div class="col-md-6">
					<select class="form-control" name="amort">
						<option value="1" <?php echo set_select('amort', '1', true); ?>>FRANCESA</option>
						<option value="2" <?php echo set_select('amort', '2'); ?>>ALEMANA</option>
					</select>
					<?php echo form_error('amort'); ?>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-4 control-label">Periodo de Pago:</label>
				<div class="col-md-6">
					<select class="form-control" name="periodo">
						<option value="52" <?php echo set_select('periodo', '52'); ?>>Semanal</option>
						<option value="24" <?php echo set_select('periodo', '24'); ?>>Quincenal</option>
						<option value="12" <?php echo set_select('periodo', '12'); ?>>Mensual</option>
						<option value="6" <?php echo set_select('periodo', '6'); ?>>Bimestral</option>
						<option value="4" <?php echo set_select('periodo', '4'); ?>>Trimestral</option>
						<option value="3" <?php echo set_select('periodo', '3'); ?>>Cuatrimestral</option>
						<option value="2" <?php echo set_select('periodo', '2'); ?>>Semestral</option>
						<option value="1" <?php echo set_select('periodo', '1'); ?>>Anual</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" id="Save" class="btn btn-primary">Calcular</button>
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>
	
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">El Monto Minimno y Maximo</div>
			<div class="panel-body box" id="credit-1">
				<h4>El monto está en el rango:</h4>
				<h4>de $ <?php echo $credits['credit_1_mmin']; ?>,00 a $ <?php echo $credits['credit_1_mmax']; ?>,00</h4>
				<h4>Plazo desde <?php echo $credits['credit_1_pmin']; ?> a <?php echo $credits['credit_1_pmax']; ?> mes</h4>
			</div>
			<div class="panel-body box" id="credit-2">
				<h4>El monto está en el rango:</h4>
				<h4>de $ <?php echo $credits['credit_2_mmin']; ?>,00 a $ <?php echo $credits['credit_2_mmax']; ?>,00</h4>
				<h4>Plazo desde <?php echo $credits['credit_2_pmin']; ?> a <?php echo $credits['credit_2_pmax']; ?> mes</h4>
			</div>
			<div class="panel-body box" id="credit-3">
				<h4>El monto está en el rango:</h4>
				<h4>de $ <?php echo $credits['credit_3_mmin']; ?>,00 a $ <?php echo $credits['credit_3_mmax']; ?>,00</h4>
				<h4>Plazo desde <?php echo $credits['credit_3_pmin']; ?> a <?php echo $credits['credit_3_pmax']; ?> mes</h4>
			</div>
			<div class="panel-body box" id="credit-4">
				<h4>El monto está en el rango:</h4>
				<h4>de $ <?php echo $credits['credit_4_mmin']; ?>,00 a $ <?php echo $credits['credit_4_mmax']; ?>,00</h4>
				<h4>Plazo desde <?php echo $credits['credit_4_pmin']; ?> a <?php echo $credits['credit_4_pmax']; ?> mes</h4>
			</div>
			<div class="panel-body box" id="credit-5">
				<h4>El monto está en el rango:</h4>
				<h4>de $ <?php echo $credits['credit_5_mmin']; ?>,00 a $ <?php echo $credits['credit_5_mmax']; ?>,00</h4>
				<h4>Plazo desde <?php echo $credits['credit_5_pmin']; ?> a <?php echo $credits['credit_5_pmax']; ?> mes</h4>
			</div>
			<div class="panel-body box" id="credit-6">
				<h4>El monto está en el rango:</h4>
				<h4>de $ <?php echo $credits['credit_6_mmin']; ?>,00 a $ <?php echo $credits['credit_6_mmax']; ?>,00</h4>
				<h4>Plazo desde <?php echo $credits['credit_6_pmin']; ?> a <?php echo $credits['credit_6_pmax']; ?> mes</h4>
			</div>
		</div>
	</div>

	<div class="col-lg-8">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th><h4>Cuota</h4></th>
					<th><h4>Fecha de Pago</h4></th>
					<th><h4>Saldo Capital</h4></th>
					<th><h4>Capital</h4></th>
					<th><h4>Interes</h4></th>
					<th><h4>Seguro Desgravamen</h4></th>
					<th><h4>Cuota</h4></th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($datas as $data) { ?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td class="text-right"><?php echo $data['fecha']; ?></td>
						<td class="text-right">$ <?php echo $data['saldo']; ?></td>
						<td class="text-right">$ <?php echo $data['capital']; ?></td>
						<td class="text-right">$ <?php echo $data['intere']; ?></td>
						<td class="text-right">$ <?php echo $data['seguro']; ?></td>
						<td class="text-right">$ <?php echo $data['cuota']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
			<tfoot>
				<tr>
					<th style="border:0"></th>
					<td></td>
					<td class="text-right"><strong>Total</strong></td>
					<td class="text-right"><strong>$ <?php echo $totalCapital; ?></strong></td>
					<td class="text-right"><strong>$ <?php echo $totalIntere; ?></strong></td>
					<td class="text-right"><strong>$ <?php echo $totalSeguro; ?></strong></td>
					<td class="text-right"><strong>$ <?php echo $totalCuota; ?></strong></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="col-lg-4">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th><h4>Dias Transcurridos</h4></th>
					<th><h4>Fecha sin adjuste</h4></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($datas as $data) { ?>
					<tr>
						<td class="text-right"><?php echo $data['days']; ?></td>
						<td class="text-right"><?php echo $data['fecha']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<div class="header clearfix"></div>