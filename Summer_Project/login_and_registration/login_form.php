<section class="modal fade" id="login">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4> Sign in</h4>
			</div>
			<div class="modal-body">
				<form action='../login_and_registration/login.php' method="POST">
					<div class="form-group">
						<label>UserID/CompanyID</label>
						<input type="text" name="login_username" class="form-control" placeholder="Enter UserID/CompanyID" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="login_password" class="form-control" placeholder="Enter password" required>
					</div>
					<div class="checkbox">
						<label><input type="checkbox" value="" checked>Remember me</label>
					</div>
					<input type="hidden" name="form_name" value="login_form">
					<button type="submit" class="btn btn-default btn-success btn-block">Login</button>
				</form>
			</div>

			<div class="modal-footer">
				<button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal">Cancel</button>
				<p><a href="#">Forgot Password?</a></p>
			</div>
		</div>
	</div>
</section>