
<div class="header clearfix">
	<nav>
		<ul class="nav nav-pills pull-right">
			<li role="presentation" class="active"><a href="#">Simulador</a></li>
			<li role="presentation"><a href="#">Setting</a></li>
			<li role="presentation"><a href="#">Contact</a></li>
		</ul>
	</nav>
	<h3 class="text-muted">Simulador de Créditos</h3>
</div>

<div class="row marketing">
	<div class="col-lg-8">
		<?php echo form_open('news', array('class' => 'form-horizontal')); ?>
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
					<?php echo form_input(array('name' => 'month', 'id' => 'month', 'placeholder' => '0', 'class' =>'form-control', 'value' => set_value('month'))); ?>
					<?php echo form_error('month'); ?>
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
				<h4>de $ 500,00 a $ 1.000,00</h4>
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
				<tr>
					<td>1</td>
					<td class="text-right">17/09/2015</td>
					<td class="text-right">1.896,00</td>
					<td class="text-right">103,95</td>
					<td class="text-right">29,9</td>
					<td class="text-right">4,17</td>
					<td class="text-right">133,00</td>
				</tr>
				<tr>
					<td>2</td>
					<td class="text-right">17/09/2015</td>
					<td class="text-right">1.896,00</td>
					<td class="text-right">103,95</td>
					<td class="text-right">29,9</td>
					<td class="text-right">4,17</td>
					<td class="text-right">133,00</td>
				</tr>
				<tr>
					<td>3</td>
					<td class="text-right">17/09/2015</td>
					<td class="text-right">1.896,00</td>
					<td class="text-right">103,95</td>
					<td class="text-right">29,9</td>
					<td class="text-right">4,17</td>
					<td class="text-right">133,00</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th style="border:0"></th>
					<td></td>
					<td></td>
					<td class="text-right"><strong>Sub Total : 2000</strong></td>
					<td class="text-right"><strong>Sub Total : 2000</strong></td>
					<td class="text-right"><strong>Sub Total : 2000</strong></td>
					<td class="text-right"><strong>Sub Total : 2000</strong></td>
				</tr>
			</tfoot>
		</table>
	</div>

	<div class="col-lg-12">
	  <h4>Subheading</h4>
	  <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

	  <h4>Subheading</h4>
	  <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

	  <h4>Subheading</h4>
	  <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
	</div>
</div>