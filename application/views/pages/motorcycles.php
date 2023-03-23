<!DOCTYPE html>

<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Displacement</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($motorcycles as $motorcycle): ?>
            <tr>
                <td><?php echo $motorcycle["mc_id"]; ?></td>
                <td><?php echo $motorcycle["mc_brand"]; ?></td>
                <td><?php echo $motorcycle["mc_model"]; ?></td>
                <td><?php echo $motorcycle["mc_displacement"]; ?></td>
				<td>
					<a href="<?php echo('/CI3/Motorcycles/edit/'. $motorcycle['mc_id']); ?>">Edit</a>
					<a href="<?php echo('/CI3/Motorcycles/delete/'. $motorcycle['mc_id']); ?>">Delete</a>

				</td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
