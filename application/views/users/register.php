<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../Assets/style/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../Assets/style/style.css">
		<script src="../assets/script/bootstrap.bundle.min.js"></script>
		<script src="../assets/script/jquery-3.6.3.min.js"></script>
    </head>
    <body>
		<header class="navbar navbar-expand-lg navbar-primary bg-primary px-3 mb-4">
			<a class="navbar-brand navbar-dark" href="<?=base_url();?>users/login">The Chosen Dashboard</a>
        </header>
		<div class="container-lg px-1">
		<?php
		$errors_register = $this->session->flashdata('errors_register');
		$success_register = $this->session->flashdata('success_register');
		?>
			<div class="row mb-3">
				<div class="col-md-6 p-3 jumbotron center border bg-light">
					<h1 class="display-6 fw-bold pb-2">Register</h1>  
					<form action="<?=base_url()?>/users/register_process" method="post">
						<input type="hidden" class="form-label" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>"/>
						<label class="form-label " for="first_name">First Name:</label>
						<input class="form-control" type="text" name="first_name" required/>
						<label class="form-label " for="last_name">Last Name:</label>
						<input class="form-control" type="text" name="last_name" required/>
						<label class="form-label " for="email">Email:</label>
						<input class="form-control" type="email" name="email" required/>
						<label class="form-label " for="password">Password:</label>
						<input class="form-control" type="password" name="password" required/>
						<label class="form-label " for="password2">Confirm Password:</label>
						<input class="form-control" type="password" name="password2" required/>
						<div class="text-danger">
							<?=$errors_register?>
						</div>
						<div class="text-success">
							<?=$success_register?>
						</div>
						<a href="../users/login">Already Registered? Click here</a>
						<input class="center btn btn-success mt-2 right" id="submit" type="submit" value="Register"/>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
	
