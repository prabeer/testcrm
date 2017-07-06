<!-- Modal (Add Member) -->
<div class="modal" id="modal-add-member" tabindex="-1" role="dialog"
	aria-labelledby="modal-add-member-label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="modal-add-member-label">Add Bug(s)</h4>
			</div>
			<div class="modal-body">
				<form action="insertBug.php" method="post"
					enctype="multipart/form-data">
					<input type="hidden" name="project_id"
						value="<?php echo xssafe($_GET['a']);?>" />
					<div class="col-lg-6">
						<div class="form-group">
							<label>Choose Priority</label> <select
								class="chosen form-control"
								data-placeholder="Choose Priority..." style="width: 100%;"
								name="priority">
								<option value="">Please Select</option>
								<option value="3">High</option>
								<option value="2">Medium</option>
								<option value="1">Low</option>
							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Choose Frequency</label> <select
								class="chosen form-control"
								data-placeholder="Choose Frequency..." style="width: 100%;"
								name="frequency">
								<option value="">Please Select</option>
								<option value="3">Always</option>
								<option value="2">Occasionally</option>
								<option value="1">Once</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label>Title:</label> <input class="form-control" name="title"
							type="text" />
					</div>
					<div class="form-group">
						<label>Precondition:</label>
						<textarea class="form-control" name="precondition"></textarea>
					</div>
					<div class="form-group">
						<label>Steps to Reproduce:</label>
						<textarea class="form-control" name="reproduce"></textarea>
					</div>
					<div class="form-group">
						<label>Expected Result:</label>
						<textarea class="form-control" name="expected"></textarea>
					</div>
					<div class="form-group">
						<label>Comments:</label>
						<textarea class="form-control" name="comment"></textarea>
					</div>

					<button type="submit"
						class="btn btn-success margin-top-md center-block"
						 >Add to project</button>

				</form>
			</div>
		</div>
	</div>
</div>