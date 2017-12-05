<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-6 col-md-offset-3 box">
		<h1 class="text-center">Tambah data</h1>
		<hr>

		<?php echo form_open('item/add_process'); ?>
		<div class="form-group">
			<label>Slug</label>
			<input class="form-control" name="slug" placeholder="contoh: kardus-besar-logo">
		</div>
		<div class="form-group">
			<label>Nama Item</label>
			<input class="form-control" name="nama" placeholder="contoh: Kardus Besar Logo">
		</div>
		<div class="form-group">
			<label>Deskripsi</label>
			<textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi dari item"></textarea>
		</div>
		<div class="form-group">
			<label>Satuan</label>
			<input class="form-control" name="satuan" placeholder="contoh: Pcs">
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<input class="btn btn-block btn-success" type="submit" value="Submit">
				</div>
				<div class="col-md-6">
					<a class="btn btn-block btn-danger" href="<?php echo base_url('item'); ?>">Cancel</a>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>