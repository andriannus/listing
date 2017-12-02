<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-6 col-md-offset-3 box">
		<h1 class="text-center">Tambah Data Item Dipakai</h1>
		<hr>

		<?php echo form_open('out/add_process'); ?>
		<div class="form-group">
			<label>Pilih Item</label>
			<select name="id_item" class="form-control">
				<?php foreach($query as $item): ?>
					<option value="<?php echo $item['id_item']; ?>"><?php echo $item['nama']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label>Tanggal</label>
			<div class="input-group date datepicker" data-provide="datepicker">
				<input type="text" class="form-control" name="tanggal" readonly>
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Jumlah Item Dipakai</label>
			<input class="form-control" name="jumlah">
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<input class="btn btn-block btn-success" type="submit" value="Submit">
				</div>
				<div class="col-md-6">
					<a class="btn btn-block btn-danger" href="<?php echo base_url('out'); ?>">Cancel</a>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>