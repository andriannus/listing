<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="row">
		<?php foreach($query as $item): ?>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php echo $item['nama']; ?>
					</div>
					<div class="panel-footer">
						<a href="<?php echo base_url('home/view/'.$item['id_item']); ?>">Lihat</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>