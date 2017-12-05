<div class="container box">
	<h1><?php echo $item->nama; ?></h1>

	<form class="form-inline" method="get" action="<?php echo base_url('home/view/'.$id); ?>">
		<div class="form-group">
			<select name="bulan" class="form-control">
				<option disabled selected>Pilih Bulan</option>
				<option value="1" <?php if(isset($bulan) && $bulan == 1){ ?> selected <?php } ?>>Januari</option>
				<option value="2" <?php if(isset($bulan) && $bulan == 2){ ?> selected <?php } ?>>Februari</option>
				<option value="3" <?php if(isset($bulan) && $bulan == 3){ ?> selected <?php } ?>>Maret</option>
				<option value="4" <?php if(isset($bulan) && $bulan == 4){ ?> selected <?php } ?>>April</option>
				<option value="5" <?php if(isset($bulan) && $bulan == 5){ ?> selected <?php } ?>>Mei</option>
				<option value="6" <?php if(isset($bulan) && $bulan == 6){ ?> selected <?php } ?>>Juni</option>
				<option value="7" <?php if(isset($bulan) && $bulan == 7){ ?> selected <?php } ?>>Juli</option>
				<option value="8" <?php if(isset($bulan) && $bulan == 8){ ?> selected <?php } ?>>Agustus</option>
				<option value="9" <?php if(isset($bulan) && $bulan == 9){ ?> selected <?php } ?>>September</option>
				<option value="10" <?php if(isset($bulan) && $bulan == 10){ ?> selected <?php } ?>>Oktober</option>
				<option value="11" <?php if(isset($bulan) && $bulan == 11){ ?> selected <?php } ?>>November</option>
				<option value="12" <?php if(isset($bulan) && $bulan == 12){ ?> selected <?php } ?>>Desember</option>
			</select>
		</div>
		<div class="form-group">
			<input class="form-control" type="text" name="tahun" placeholder="Tahun" size="5"
				<?php if(isset($tahun)){ ?> value="<?php echo $tahun; } ?>"
			>
		</div>
		<button type="submit" class="btn btn-primary">Pilih</button>
		<a class="btn btn-danger" href="<?php echo base_url('home/view/'.$id); ?>">Reset</a>
	<?php echo form_close(); ?>

	<hr>

	<?php
		if(empty($query)){
	?>

	<div class="text-center">
		<p>
			<i class="fa fa-search fa-5x"></i>
		</p>
		<span>Tidak ada data</span>
	</div>

	<?php
		} else {
	?>

	<table class="table table-striped">
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
		}
	?>
		</tbody>
	</table>
</div>