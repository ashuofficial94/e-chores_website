<section class="modal fade" id="feedback_form">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4>Feedback and Complaint</h4>
			</div>
			<div class="modal-body">
				<form action="../user/send_feedback.php" method="POST">
					<div class="form-group">
						<label>TO (Company's ID)</label>
						<select name="compid" class="form-control" required>
						<?php 
							$length = count($_SESSION['company_list']);
							for($i=0; $i<$length; $i++) {
						?>
						<option value=<?php echo $_SESSION['company_list'][$i][0]?>><?php echo $_SESSION['company_list'][$i][0]?></option>
						<?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label>FROM (User ID)</label>
						<input type="text" value='@<?php echo $_SESSION['user_info'][0]?>' name="userid" class="form-control" disabled>
					</div>

					<div class="form-group">
						<label>Subject</label>
						<input type="text" name="subject" class="form-control" required>
					</div>

					<div class="form-group">
						<label>Feedbak</label>
						<textarea name="message" class="form-control" rows="5"></textarea>
					</div>

					<button class="btn btn-block btn-success" type="submit">Send Feedback</button>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-default btn-default" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</section>