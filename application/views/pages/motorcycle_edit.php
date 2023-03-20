<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>
		<h1> </h1>
		<form action="/CI3/motorcycles/verifyEdit/" <?php echo $this->uri->segment(3);?> method="post">
			<?php extract($motorcycles); ?> 
			Brand: <input type="text" name="brand" value="<?php echo $mc_brand;?>"><br/>
			Model: <input type="text" name="model" value="<?php echo $mc_model;?>"><br/>
			Displacement: <input type="number" name="displacement" value="<?php echo $mc_displacement; ?>"><br/>
			<input type="submit" value="Update">
		</form>
	</body>
</html>
