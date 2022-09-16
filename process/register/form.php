<?php
	include('../include/header_cdn.php');	
?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<form action="../process/register/register_process.php" method="post">
				<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" class="form-control">
				</div>
				
				<div class="form-group">
				<label for="password">Password</label>
				<input type="text" name="password" id="password" class="form-control">
				</div>
				<button type="submit" class="btn btn-success">Submit</button>
				</form>
		</div>
	</div>
</div>