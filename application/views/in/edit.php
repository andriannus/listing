<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-6 col-md-offset-3 box">
		<h1 class="text-center">Edit Data Item Diterima</h1>
		<hr>

		<?php echo form_open('in/edit_process'); ?>
		<?php echo form_hidden('id_itemterima', $in->id_itemterima); ?>
		<div class="form-group">
			<label>Tanggal</label>
			<div class="input-group date datepicker" data-provide="datepicker">
				<input type="text" class="form-control" name="tanggal" value="<?php echo $in->tanggal; ?>" readonly>
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Jumlah Item Diterima</label>
			<input class="form-control" name="jumlah" value="<?php echo $in->jumlah; ?>">
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<input class="btn btn-block btn-success" type="submit" value="Submit">
				</div>
				<div class="col-md-6">
					<a class="btn btn-block btn-danger" href="<?php echo base_url('in'); ?>">Cancel</a>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>