<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-6 col-md-offset-3 box">
		<h1 class="text-center">Tambah data</h1>
		<hr>

		<?php echo form_open('item/edit_process'); ?>
		<?php echo form_hidden('id_item', $query->id_item); ?>
		<div class="form-group">
			<label>Slug</label>
			<p><?php echo $query->slug; ?></p>
		</div>
		<div class="form-group">
			<label>Nama Item</label>
			<input class="form-control" name="nama" placeholder="contoh: Kardus Besar Logo" value="<?php echo $query->nama; ?>">
		</div>
		<div class="form-group">
			<label>Deskripsi</label>
			<textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi dari item"><?php echo $query->deskripsi; ?></textarea>
		</div>
		<div class="form-group">
			<label>Satuan</label>
			<input class="form-control" name="satuan" placeholder="contoh: Pcs" value="<?php echo $query->satuan; ?>">
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