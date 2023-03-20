<?php include('header.php');?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
				<?php echo anchor("CRUD/Home/create", 'Create', ['class'=>'btn btn-primary']); ?>
		</div>
	</div>
	
<table class="table table-hover">
  <thead>
  <tr>
      <th>CustomerName</th>
      <th>Phone</th>
      <th>Address</th>
      <th>City</th>
      <th>Country</th>
	  <th>Operations</th>

    </tr>
  </thead>
  <tbody>

  <p>Number of records: <?php echo $count; ?></p>
  <?php if(count($records)): ?>
				
				<?php foreach($records as $record){ ?>
								<tr>
									<td scope="col"><?php echo $record['customerName']?></td>
									<td scope="col"><?php echo $record['phone']?></td>
									<td scope="col"><?php echo $record['address']?></td>
									<td scope="col"><?php echo $record['city']?></td>
									<td scope="col"><?php echo $record['country']?></td>
									<td><?php echo anchor("home/edit",'Update', ['class'=>'btn btn-primary']); ?></a></td>
									<td><?php echo anchor("home/delete",'Delete', ['class'=>'btn btn-danger']); ?></a></td>

								</tr>
					<?php } ?> 
					<?php else: ?> 
						<tr>No Records Found!</tr>
					<?php endif; ?> 
   
  </tbody>
</table>
</div>

<?php include('footer.php');?>

