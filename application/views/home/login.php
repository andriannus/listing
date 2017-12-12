<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-4 col-md-offset-4">
		<div class="box">
			<h1 class="text-center margin-bottom-md">Login Admin</h1>
			<hr>
			<?php echo form_open('login/login_process', 'name="loginForm"'); ?>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" ng-model="username" required="" autofocus>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" ng-model="password" required="">
				</div>
				<div class="form-group">
					<button class="btn btn-block btn-lg btn-primary" type="submit" ng-show="!loginForm.$invalid">Submit</button>
					<button class="btn btn-block btn-lg btn-primary" type="submit" disabled ng-show="loginForm.$invalid">Submit</button>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>