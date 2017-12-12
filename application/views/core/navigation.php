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

				<?php if(isset($this->menu) && $this->menu == 'item'){ ?>
				<li class="active">
					<a href="<?php echo base_url('item'); ?>"><i class="fa fa-check"></i> Daftar Item</a>
				</li>
				<?php } else { ?>
				<li>
					<a href="<?php echo base_url('item'); ?>"><i class="fa fa-check"></i> Daftar Item</a>
				</li>
				<?php } ?>

				<?php if(isset($this->menu) && $this->menu == 'first'){ ?>
				<li class="active">
					<a href="<?php echo base_url('first'); ?>"><i class="fa fa-eye"></i> Stok Awal</a>
				</li>
				<?php } else { ?>
				<li>
					<a href="<?php echo base_url('first'); ?>"><i class="fa fa-eye"></i> Stok Awal</a>
				</li>
				<?php } ?>

				<?php if(isset($this->menu) && $this->menu == 'in'){ ?>
				<li class="active">
					<a href="<?php echo base_url('in'); ?>"><i class="fa fa-download"></i> Item Diterima</a>
				</li>
				<?php } else { ?>
				<li>
					<a href="<?php echo base_url('in'); ?>"><i class="fa fa-download"></i> Item Diterima</a>
				</li>
				<?php } ?>

				<?php if(isset($this->menu) && $this->menu == 'out'){ ?>
				<li class="active">
					<a href="<?php echo base_url('out'); ?>"><i class="fa fa-upload"></i> Item Dipakai</a>
				</li>
				<?php } else { ?>
				<li>
					<a href="<?php echo base_url('out'); ?>"><i class="fa fa-upload"></i> Item Dipakai</a>
				</li>
				<?php } ?>

				<li>
					<a href="#"><i class="fa fa-gear"></i> Laporan</a>
				</li>
			</ul>
			<?php
				if ($this->session->userdata('login') == true) {
			?>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
				</li>
			</ul>
			<?php
				}
			?>
		</div>
	</div>
</nav>
