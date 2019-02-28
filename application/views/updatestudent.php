<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			<table class="table table-bordered">
				<thead>
					<tr class="bg-primary">
						<th>#</th>
						<th>Name</th>
						<th>Contact</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; if(count($student_data)): ?>
						<?php foreach ($student_data as $record): ?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo $record['name']; ?></td>
								<td><?php echo $record['contact']; ?></td>
								<td><?php echo anchor("Crudapp/edit_student/{$record['id']}",'UPDATE',['class'=>'btn btn-success']); ?></td>
							</tr>
						<?php endforeach; ?>
					<?php else: ?>
						<tr>
							<td colspan="4" class="text-danger text-center">No Records Found!</td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>