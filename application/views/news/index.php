<div class="header clearfix"></div>
<div class="row marketing">
	<div class="col-lg-8">
		<?php echo form_open('credits', array('class' => 'form-horizontal')); ?>
			<p>Valores referenciales, las tasas, montos y plazos pueden variar sin previo aviso.</p>
			
			<div class="form-group">
				<label class="col-md-4 control-label">Tipo de Crédito:</label>
				<div class="col-md-6">
					<select class="form-control" name="type">
						<option value="1" <?php echo set_select('type', '1', true); ?>>Consumo</option>
						<option value="2" <?php echo set_select('type', '2'); ?>>MicroCrédito</option>
						<option value="3" <?php echo set_select('type', '3'); ?>>Vivienda</option>
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
				<label class="col-md-4 control-label">Meses de Plazo:</label>
				<div class="col-md-6">
					<?php echo form_input(array('name' => 'plazo', 'id' => 'plazo', 'placeholder' => '0', 'class' =>'form-control', 'value' => set_value('plazo'))); ?>
					<?php echo form_error('plazo'); ?>
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
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" id="Save" class="btn btn-primary">Calcular</button>
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>
	
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">El Monto Minimno y Maximo</div>
			<div class="panel-body">
				<h4>El monto está en el rango:</h4>
				<h4>de $ 500,00 a $ 1.000,00</h4>
				<h4>de $ 1.000,00 a $ 1.000.000,00</h4>
			</div>
		</div>
	</div>

	<div class="col-lg-12">
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
</div>
<div class="header clearfix"></div>