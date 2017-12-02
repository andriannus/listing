<div class="container">
	<h1>Daftar Item Diterima</h1>

	<a class="btn btn-default" href="<?php echo base_url('in/add'); ?>">Tambah Data</a>
	<br><br>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th class="text-center">No.</th>
				<th class="text-center">Nama Barang</th>
				<th class="text-center">Tanggal Item Diterima</th>
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
				<td><?php echo $item['tanggal']; ?></td>
				<td><?php echo $item['jumlah']; ?></td>
				<td>
					<a class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
					<a class="btn btn-sm btn-danger" href="<?php echo base_url('in/delete/'.$item['id_itemterima']); ?>"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			<?php
				$no++;
				endforeach;
			?>
		</tbody>
	</table>
</div>