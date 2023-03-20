<?php include('header.php');?>


	<div class="container">
		
	<?php echo form_open('Home/save',['class'=>'form-horizontal', 'method'=>'post']); ?> 
		<fieldset>
			<div class="container"></div>
				<legend>Create Customer</legend>
					<div class="row">
						<div class="col-lg-6">

							<div class="form-group">
								<label for="inputEmail" class="col-lg-4 control-label">Email Address</label>
								<div class="col-lg-8">
									
									<?php echo form_input(['name'=>'customerName','class'=>'form-control', 'placeholder'=>'Customer Name','value'=>set_value('customerName')]); ?>	
								</div>
							</div>	
						</div>	
					

						<div class="col-lg-6">

						</div>
					</div>


					<div class="row">
						<div class="col-lg-6">

							<div class="form-group">
								<label for="inputEmail" class="col-lg-4 control-label">Phone</label>
								<div class="col-lg-8">
									
									<?php echo form_input(['name'=>'phone','class'=>'form-control', 'placeholder'=>'Phone','value'=>set_value('phone')]); ?>	
								</div>
							</div>	
						</div>	
					

						<div class="col-lg-6">

						</div>
					</div>


					<div class="row">
						<div class="col-lg-6">

							<div class="form-group">
								<label for="inputEmail" class="col-lg-4 control-label">Address</label>
								<div class="col-lg-8">
									
									<?php echo form_input(['name'=>'address','class'=>'form-control', 'placeholder'=>'Address','value'=>set_value('address')]); ?>	
								</div>
							</div>	
						</div>	
					

						<div class="col-lg-6">

						</div>
					</div>


					<div class="row">
						<div class="col-lg-6">

							<div class="form-group">
								<label for="inputEmail" class="col-lg-4 control-label">City</label>
								<div class="col-lg-8">
									
									<?php echo form_input(['name'=>'city','class'=>'form-control', 'placeholder'=>'City','value'=>set_value('city')]); ?>	
								</div>
							</div>	
						</div>	
					

						<div class="col-lg-6">

						</div>
					</div>


					
					<div class="row">
						<div class="col-lg-6">

							<div class="form-group">
								<label for="inputEmail" class="col-lg-4 control-label">Country</label>
								<div class="col-lg-8">
									
								<?php echo form_input(['name'=>'country','class'=>'form-control', 'placeholder'=>'Country','value'=>set_value('country')]); ?>	

								</div>
							</div>	
						</div>	
					

						<div class="col-lg-6">

						</div>
					</div>





			<div class="form-group">
				<div class="col-lg-10 col-lg-offset-2">
					
					<?php echo form_submit(['value'=>'Submit', 'class'=>'btn btn-primary']); ?> 
					

					<?php echo form_submit(['value'=>'Reset', 'class'=>'btn btn-default']); ?> 

					
					
				</div>
			</div>
		</fieldset>
		<?php echo form_close(); ?>
	</div>
	
<?php include('footer.php');?>
