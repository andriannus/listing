<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#dropdown-nav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url('home'); ?>">Administrator</a>
		</div>

		<div class="collapse navbar-collapse" id="dropdown-nav">
			<ul class="nav navbar-nav">
				<li>
					<a href="<?php echo base_url('item'); ?>"><i class="fa fa-check"></i> Daftar Item</a>
				</li>
				<li>
					<a href="<?php echo base_url('first'); ?>"><i class="fa fa-eye"></i> Stok Awal</a>
				</li>
				<li>
					<a href="<?php echo base_url('in'); ?>"><i class="fa fa-download"></i> Item Diterima</a>
				</li>
				<li>
					<a href="<?php echo base_url('out'); ?>"><i class="fa fa-upload"></i> Item Dipakai</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-gear"></i> Laporan</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#"><i class="fa fa-sign-out"></i> Logout</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
