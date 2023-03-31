<!DOCTYPE html>
<html>
<head>
    <title>Single Page App</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/materialize/css/materialize.min.css'); ?>"  media="screen,projection">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.6.4.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/materialize/js/materialize.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/dataTables/datatables.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/datatable-materialize.js'); ?>"></script>
</head>
<body>
   <div class="container">
	<section class="section">
		<h4>Single Page Motorcycle Listing</h4>
		<div class="row">
			<div class="col s12">
				<table id="motorcycle-table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Brand</th>
							<th>Model</th>
							<th>Displacement</th>

						</tr>
					</thead>
				</table>
			</div>
		</div>
	</section>
   </div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#motorcycle-table").DataTable({
				"ajax": {
					"url": "<?php echo base_url('motorcyclesapi');?>",
					"dataSrc": "data"
				},

				"columns": [
					{"data": "mc_id"},
					{"data": "mc_brand"},
					{"data": "mc_model"},
					{"data": "mc_displacement"}
				]
			});
		});
	</script>
    
</body>
</html>
