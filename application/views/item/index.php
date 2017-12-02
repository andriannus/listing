<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<h1>Daftar Item</h1>

	<a class="btn btn-default" href="<?php echo base_url('item/add'); ?>">Tambah Data</a>
	<br><br>

	<table class="table table-bordered">
		<thead>
			<th class="text-center" width="5%">No.</th>
			<th class="text-center" width="30%">Nama Item</th>
			<th class="text-center" width="10%">Satuan</th>
			<th class="text-center" width="45%">Deskripsi</th>
			<th class="text-center" width="10%">Aksi</th>
		</thead>
		<tbody class="text-center">
		<?php
			$no = 1; 
			foreach($query as $item): ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $item['nama']; ?></td>
				<td><?php echo $item['satuan']; ?></td>
				<td><?php echo $item['deskripsi']; ?></td>
				<td>
					<a class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
					<a class="btn btn-sm btn-danger" href="<?php echo base_url('item/delete/'.$item['id_item']); ?>"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
		<?php 
			$no++;
			endforeach;
		?>
		</tbody>
	</table>
</div>