<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-6 col-md-offset-3 box">
		<h1 class="text-center">Tambah Data Item Stok Awal</h1>
		<hr>

		<?php echo form_open('first/add_process', 'name="addFirstItem"'); ?>
		<div class="form-group">
			<label>Pilih Item</label>
			<select name="id_item" class="form-control" ng-model="item" required>
				<?php foreach($query as $item): ?>
					<option value="<?php echo $item['id_item']; ?>"><?php echo $item['nama']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label>Tanggal</label>
			<div class="input-group date datepicker" data-provide="datepicker">
				<input type="text" class="form-control" name="tanggal" ng-model="tanggal" required readonly>
				<div class="input-group-addon">
					<i class="fa fa-calendar"></i>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Jumlah Stok Awal</label>
			<input type="number" class="form-control" name="jumlah" ng-model="jumlah" required>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<button class="btn btn-block btn-success" type="submit" ng-show="!addFirstItem.$invalid">Submit</button>
					<button class="btn btn-block btn-success no-margin-top" type="submit" ng-show="addFirstItem.$invalid" disabled>Submit</button>
				</div>
				<div class="col-md-6">
					<a class="btn btn-block btn-danger" href="<?php echo base_url('first'); ?>">Cancel</a>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>