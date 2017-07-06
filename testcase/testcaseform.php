<!-- Modal (Add Member) -->
<div class="modal" id="modal-new-tc" tabindex="-1" role="dialog"
	aria-labelledby="modal-add-member-label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="modal-add-member-label">Add New TestCase</h4>
			</div>
			<div class="modal-body">
				<form action="testcase/insertTestcase.php" method="post"
					enctype="multipart/form-data" id="testcase-form">

					<div id="target"></div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Choose Priority</label> <select
								class="chosen form-control"
								data-placeholder="Choose Priority..." style="width: 100%;"
								name="priority" id="priority">
								<option value="3">High</option>
								<option value="2">Medium</option>
								<option value="1">Low</option>
							</select>
						</div>
					</div>
					<input type="hidden" value="insert" id="edit_enable"
						name="form_type"> <input type="hidden" value=0 id="test_val"
						name="test_val">
					<div class="col-lg-6">
						<div class="form-group">
							<label>Choose Type</label> <select class="chosen form-control"
								data-placeholder="Choose Type..." style="width: 100%;"
								name="tc_type" id="tc_type">
								<option value="1">Test Case</option>
								<option value="2">Module</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label>Choose Category</label> <select class="chosen form-control"
							data-placeholder="Choose Category..." style="width: 100%;"
							name="catagory">
							<option value='Settings'>Settings</option>
							<option value='Connectivity'>Connectivity</option>
							<option value='Message'>Message</option>
							<option value='Contacts'>Contacts</option>
							<option value='Video Player'>Video Player</option>
							<option value='Mass Production Checklist'>Mass Production
								Checklist</option>
							<option value='Hangout'>Hangout</option>
							<option value='Google Chrome'>Google Chrome</option>
							<option value='Music Player'>Music Player</option>
							<option value='Calculator'>Calculator</option>
							<option value='Play Store'>Play Store</option>
							<option value='Heating'>Heating</option>
							<option value='FOTA'>FOTA</option>
							<option value='Calender'>Calender</option>
							<option value='Flash Light'>Flash Light</option>
							<option value='Youtube'>Youtube</option>
							<option value='Download'>Download</option>
							<option value='FileManager'>FileManager</option>
							<option value='Camera'>Camera</option>
							<option value='Camcoder'>Camcoder</option>
							<option value='Gallery'>Gallery</option>
							<option value='SIM'>SIM</option>
							<option value='SD Card'>SD Card</option>
							<option value='LTE'>LTE</option>
							<option value='VoLTE'>VoLTE</option>
							<option value='Sensor'>Sensor</option>
							<option value='Clock'>Clock</option>
							<option value='FM Radio'>FM Radio</option>
							<option value='Third Party Apps'>Third Party Apps</option>
							<option value='Stress Test cases'>Stress Test cases</option>

						</select>
					</div>
					<div class="form-group">
						<label>Title:</label> <input class="form-control" name="title"
							type="text" id="title" />
					</div>
					<div class="form-group">
						<label>Precondition:</label>
						<textarea class="form-control" name="precondition"
							id="precondition"></textarea>
					</div>
					<div class="form-group">
						<label>Steps to Reproduce:</label>
						<textarea class="form-control" name="reproduce" id="reproduce"> </textarea>
					</div>
					<div class="form-group">
						<label>Expected Result:</label>
						<textarea class="form-control" name="expected" id="expected"></textarea>
					</div>


					<button type="submit"
						class="btn btn-success margin-top-md center-block"
						id="test_button">Add to Test Cases</button>

				</form>
			</div>
		</div>
	</div>
</div>