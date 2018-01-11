<section class="modal fade" id="user_form">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>User Registration</h4>
			</div>
			<div class="modal-body">
				<form action='../login_and_registration/user_registration.php' method='post'>

					<div class="form-group">
						<label>Full Name</label>
						<input class="form-control" name="user_name" type="text" placeholder="Enter Full Name" required>
					</div>

					<div class="form-group">
						<label>User ID</label>
						<input class="form-control" name="user_id" type="text" placeholder="Enter User ID" required>
					</div>

					<div class="form-group">
						<label>E-mail</label>
						<input class="form-control" name="user_email" type="email" placeholder="Enter E-mail" required>
					</div>

					<div class="form-group">
						<label>Password</label>
						<input class="form-control" name="password" type="password" placeholder="Enter Password" required>
					</div>
					
					<div class="form-group">
						<label>Address</label>
						<input class="form-control" name="address" type="text" placeholder="Enter Address of Company" required>
					</div>

					<div class="form-group">
						<label>Contact No.</label>
						<input class="form-control" name="contactno" type="text" placeholder="Enter Contact No." required>
					</div>

					<div class="form-group">
						<table>
						<tr>
						<td width="100px"><label>Gender</label></td>
					    <td width="100px"><input type="radio" name="gender" value="male" required> Male</td>
					    <td><input type="radio" name="gender" value="female" required> Female</td>
					    </tr>
					    </table>
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