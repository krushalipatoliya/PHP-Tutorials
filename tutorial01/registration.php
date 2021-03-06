<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, iitial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
    <title>Registration Form</title>
  </head>
  <body>
	<div class="container">
		<div class="row">  
			<div class="col-md-6 offset-md-3">
				<div class="regform">    
					<h1>Registration Form</h1>
					<form method="post">
					
					<div class="form-group">
					<label>First Name</label>
					<input type="text" class="form-control" name="firstname" placeholder="Enter your first name" required>
					</div>
					
					
					<div class="form-group">
					<label>last Name</label>
					<input type="text" class="form-control" name="lastname" placeholder="Enter your last name" required>
					</div>
					
					<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" placeholder="Enter your Email" required>
					</div>
					
							
					<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" placeholder="Enter your password"required>
					</div>
					
					<div class="form-group"> 
					<label>Confirm Password</label>
					<input type="password" class="form-control" name="confirmpassword" placeholder="Re-enter your password" required>
					</div>
					
						<div class="form-group">
					<label>Date of Birth</label>
					<input type="date" class="form-control" name="dob" required>
					</div>
                                        
                                        <div class="form-group">
					<label>Age</label>
					<input type="text" class="form-control" name="age" placeholder="Enter your age" required>
					</div>
                                        
                                        <div class="form-group">
					<label>City</label>
					<input type="text" class="form-control" name="city" placeholder="Enter your city name" required>
					</div>
					
                                        <div class="form-group">
					<label>State</label>
					<input type="text" class="form-control" name="state" placeholder="Enter your state name" required>
					</div>
					
                                        <div class="form-group">
					<label>Country</label>
					<input type="text" class="form-control" name="country" placeholder="Enter your country name" required>
					</div>
					
					
					<div class="form-group">
					<label>Phone Number</label>
					<input type="number" class="form-control" name="phonenumber" placeholder="Enter your number" required>
					</div>
					
					<fieldset class="form-group">
						<div class="row">
							<legend class="col-form-label col-sm-2 pt-0"> Gender </legend>
							<div class="col-sm-10">
								<div class="form-check">
									<input type="radio" name="gender" value="male">
									<label class="form-check-label">Male</label>
								</div>
								
								<div class="form-check">
									<input type="radio" name="gender" value="female">
									<label class="form-check-label">Female</label>
								</div>
							</div>
						</div>
					</fieldset>
					
					<div class="form-group">
					<label>Designation</label>
					<select class="form-control" name="designation" required>
						<option value="student">Student</option>
						<option value="teacher">Teacher</option>
						<option value="doctor">Doctor</option>
						<option value="engineer">Engineer</option>
						<option value="scientist">Scientist</option>
						<option value="others">Others</option>
					</select>
					</div>
					
					<div class="form-group">
					<label>Address</label>
					<textarea class="form-control" name="address" rows="3" placeholder="Your Address" required></textarea>
					</div>
			
						<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Are you sure?</label>
				</div>
					<button type="submit" class="btn btn-primary" name="register">Submit </button>
					
				</form>
				</div>
			</div>
		</div>
	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
