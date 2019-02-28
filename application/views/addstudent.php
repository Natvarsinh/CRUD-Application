<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<?php echo form_open('Crudapp/insert_student',['class'=>'jumbotron']); ?>
				<div class="form-group">
					<label for="Name">Name:</label>
					<input type="text" name="name" placeholder="Enter Name Here" class="form-control">
				</div>
				<div class="form-group">
					<label for="Contact">Contact:</label>
					<input type="text" name="contact" placeholder="Enter Contact Number Here" class="form-control">
				</div>
				<br>
				<div class="form-group">
					<div class="btn-group btn-group-justified">
						<div class="btn-group">
							<input type="submit" name="add" value="Add Student" class="btn btn-success btn-group">
						</div>
						<div class="btn-group">
							<input type="reset" value="reset" class="btn btn-danger btn-group">
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>