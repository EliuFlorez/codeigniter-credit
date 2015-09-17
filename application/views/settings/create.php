<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('settings/create'); ?>

    <label for="title">Valor</label>
    <input type="input" name="valor" /><br />

    <input type="submit" name="submit" value="Create" />
</form>