<div class="container">
	<h1>Daftar Item Diterima</h1>

	<a class="btn btn-default" href="<?php echo base_url('in/add'); ?>">Tambah Data</a>
	<br><br>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th class="text-center">No.</th>
				<th class="text-center">Nama Barang</th>
				<th class="text-center">Deskripsi</th>
				<th class="text-center">Satuan</th>
				<th class="text-center">Stok Awal</th>
				<th class="text-center">Terima</th>
				<th class="text-center">Total</th>
				<th class="text-center">Pemakaian</th>
				<th class="text-center">Stok Akhir</th>
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
				<td><?php echo $item['deskripsi']; ?></td>
				<td><?php echo $item['satuan']; ?></td>
				<td><?php echo $item['jumlah_stokawal']; ?></td>
				<td><?php echo $item['jumlah_terima']; ?></td>
				<td><?php echo $item['jumlah_stokawal'] + $item['jumlah_terima']; ?></td>
				<td><?php echo $item['jumlah_pakai']; ?></td>
				<td><?php echo $item['jumlah_stokawal'] + $item['jumlah_terima'] - $item['jumlah_pakai']; ?></td>
			</tr>
			<?php
				$no++;
				endforeach;
			?>
		</tbody>
	</table>
</div>