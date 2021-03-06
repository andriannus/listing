<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container box">
	<h1>Daftar Item Stok Awal</h1>

	<a class="btn btn-default" href="<?php echo base_url('first/add'); ?>">Tambah Data</a>
	
	<hr>

	<?php if($jumlah == 0){ ?>

	<div class="text-center">
		<p>
			<i class="fa fa-search fa-5x"></i>
		</p>
		<span>Tidak ada data</span>
	</div>

	<?php } else { ?>

	<table class="table table-striped">
		<thead>
			<tr>
				<th class="text-center">No.</th>
				<th class="text-center">Nama Barang</th>
				<th class="text-center">Tanggal Stok Awal</th>
				<th class="text-center">Jumlah</th>
				<th class="text-center">Aksi</th>
			</tr>
		</thead>
		<tbody class="text-center">
			<?php
				$no = 1;
				foreach($query as $item): 
			?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $item['nama']; ?></td>
				<td><?php echo date('d F Y', strtotime($item['tanggal'])); ?></td>
				<td><?php echo $item['jumlah']; ?></td>
				<td>
					<a class="btn btn-sm btn-warning" href="<?php echo base_url('first/edit/'.$item['id_stokawal']); ?>"><i class="fa fa-pencil"></i></a>
					<a class="btn btn-sm btn-danger" href="<?php echo base_url('first/delete/'.$item['id_stokawal']); ?>"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			<?php
				$no++;
				endforeach;
			?>
		</tbody>
	</table>
	
	<?php } ?>
</div>