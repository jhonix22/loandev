<div class="profile-content">
	<div class="col-md-12">
		<div class="app-content-header">
			<h1 class="application-label">Registration Form</h1>
		</div>
		<div class="app-form-container">
			<h1 class="orange-label">Personal Information</h1>
			<div class="app-form-details">
				<div class="col-md-6">
					<form method="POST" action="templates/register/process.php" enctype="multipart/form-data">
					  <div class="form-group">
						<label for="username">Username:</label>
						<input type="text" class="form-control" id="username" name="username">
					  </div>
					  <div class="form-group">
						<label for="pwd">Password:</label>
						<input type="password" class="form-control" id="pwd" name="password">
					  </div>
					  <div class="form-group">
						<label for="cpass">Confirm Password:</label>
						<input type="password" class="form-control" id="cpass">
						<i class="hide errorpass">Password matched error!</i>
					  </div>
					  <div class="form-group">
						<label for="fname">Fullname:</label>
						<input type="text" class="form-control" id="fname" name="fullname">
					  </div>
					  <div class="form-group">
						<label for="gender">Gender:</label>
						<select class="form-control" id="gender" name="gender">
							<option>Male</option>
							<option>Female</option>
						</select>
					  </div>
					  <div class="form-group">
						<label for="address">Address:</label>
						<input type="text" class="form-control" id="address" name="address">
					  </div>
					  <div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email">
					  </div>
					  <div class="form-group">
						<label for="dob">Date of Birth:</label>
						<input type="date" class="form-control" id="dob" name="dob">
					  </div>
					  <div class="form-group">
						<label for="spouse">Spouse Full Name:</label>
						<input type="text" class="form-control" id="spouse" name="spouse">
					  </div>
					  <div class="form-group">
						<label>Profile Image:</label>
						<div class="input-group">
							<span class="input-group-btn">
								<span class="btn btn-default btn-file">
									Browse… <input type="file" id="imgInp" name="file">
								</span>
							</span>
							<input type="text" class="form-control" readonly name="pp">
						</div>
						<img id='img-upload'/>
					 </div>
					  <input type="submit" class="btn btn-warning submit-reg" name="submit" value="Submit" disabled/>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>