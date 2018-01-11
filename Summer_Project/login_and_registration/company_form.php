<section class="modal fade" id="company_form">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Company Registration</h4>
			</div>
			<div class="modal-body">
				<form action='../login_and_registration/company_registration.php' method='post'>

					<div class="form-group">
						<label>Company Name: </label>
						<input class="form-control" name="company_name" type="text" placeholder="Enter Company Name" required>
					</div>

					<div class="form-group">
						<label>Company ID:</label>
						<input class="form-control" name="company_id" type="text" placeholder="Enter Company ID" required>
					</div>

					<div class="form-group">
						<label>E-mail</label>
						<input class="form-control" name="company_email" type="email" placeholder="Enter E-mail" required>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input class="form-control" name="password" type="password" placeholder="Enter Password" required>
					</div>

					<div class="form-group">
						<label>Area of Work</label>
						<input class="form-control" name="areaofwork" type="text" placeholder="Enter Area Of Work" required>
					</div>

					<div class="form-group">
						<label>Contact No.</label>
						<input class="form-control" name="contactno" type="text" placeholder="Enter Contact No." required>
					</div>

					<div class="form-group">
		              <label>Service Provided as:</label>:
		              <select name="jobid" class="form-control" required>
		                <option value="OfficeBoy">Office Boy</option>
		                <option value="Guard">Guard</option>
		                <option value="Caretaker">Caretaker</option>
		              </select>
		            </div>

					<div class="form-group">
						<label>Owner Name</label>
						<input class="form-control" name="owner_name" type="text" placeholder="Enter Owner Name" required>
					</div>

					<div class="form-group">
						<label>Address</label>
						<input class="form-control" name="address" type="text" placeholder="Enter Address of Company" required>
					</div>

					<input type="checkbox" name="accept_terms" required>
					<label>I agree to the <a href="#0">Terms</a></label>
					<button type="submit" class="btn btn-default btn-primary btn-block">Create Account</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default btn-default" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</section>