<h2><?php echo $title; ?></h2>

<?php foreach ($settings as $settings_item): ?>

	<div class="main">
		<?php echo $settings_item['valor']; ?>
	</div>
	<p><a href="<?php echo site_url('settings/'.$settings_item['id']); ?>">View</a></p>

<?php endforeach; ?>