<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
	<div class="container">

		<div class="row">
			<h2 class="col-12 text-center">Form Validation</h2> <br><br><br><br><br><br>
				<div class="col-3"></div>
			<div class="col-6">

			<!--Function to display error-->
			<!-- <?php echo validation_errors("<div class='alert alert-danger'>'","</div>"); ?> -->

				<form method="post" action="">
				<div class="form-group">
				<label for="exampleInputEmail1"> Email address </label>

				<?php echo form_error('email','<div class="alert alert-danger">','</div>') ?>

				<input name="email" type="text" value="<?php echo set_value('email') ?>"  class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>

				<div class="form-group">
				<label for="name"> Name </label>
				<?php echo form_error('name','<div class="alert alert-danger">','</div>') ?>
				<input name="name" type="text" value="<?php echo set_value('name') ?>" class="form-control" id="name" placeholder="Enter Name">
				</div>

				<div class="form-group">
				<label for="age"> Age </label>
				<?php echo form_error('age','<div class="alert alert-danger">','</div>') ?>
				<input name="age" type="text" value="<?php echo set_value('age') ?>" class="form-control" id="age" placeholder="Enter Age">
				</div>
		
				<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<?php echo form_error('password','<div class="alert alert-danger">','</div>') ?>
				<input name="password" type="password" value="<?php echo set_value('password') ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>

				<button type="submit" class="btn btn-primary">Submit </button>
				</form>


			</div>
		</div>

	</div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1c1HTMGa3JDZwrnQq4sF86dIHNDz0W1"
	crossorigin="anonymous"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
	crossorigin="anonymous"></script>
</body>
</html>
