<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<?php echo form_open('Crudapp/update_student',['class'=>'jumbotron']); ?>
				<?php foreach($student_info as $row): ?>
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<div class="form-group">
					<label for="Name">Name:</label>
					<input type="text" name="name" placeholder="Enter Name Here" class="form-control" value="<?php echo $row['name']; ?>">
				</div>
				<div class="form-group">
					<label for="Contact">Contact:</label>
					<input type="text" name="contact" placeholder="Enter Contact Number Here" class="form-control" value="<?php echo $row['contact']; ?>">
				</div>
				<br>
				<div class="form-group">
							<input type="submit" name="update" value="Update Student" class="btn btn-success form-control">
				</div>
				<?php endforeach; ?>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>