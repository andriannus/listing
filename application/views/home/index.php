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
						<a class="" href="#">Lihat</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>