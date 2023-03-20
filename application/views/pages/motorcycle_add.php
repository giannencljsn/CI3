<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>

		<?php echo validation_errors(); ?>
			<form action="/CI3/Motorcycles/add" method="post">
				Brand: <input type="text" name="brand"><br/>
				Model: <input type="text" name="model"><br/>
				Displacement: <input type="number" name="displacement"><br/>
				<input type="submit" value="Add">
			</form>

</body>
</html>
