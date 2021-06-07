<!doctype html>
<html lang="eng">
<head>
		 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> </link>
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	   <script src="js/bootstrap.min.js"></script>

		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  
		  
		  <style>
		     
			 		  
		     .font{font-family: Poppins; background-color:#000000; }
		     .font2{color:#000000;}
			 .btn{background-color:#3c3c3c;}
			  form{text-align:center;}
			  .btn{background-color:black; }		 
				.char{color:blue;}
		  </style>
</head>
<body>
		<div class="container">
			<div class="row">
				<h2><center>Simple Interest</center></h2>
			<br>
			<form class="form-horizontal  jumbotron col-md-12" id="clientdata" method="GET" action="re.php" style="margin:0 auto; float:none;">
				<div class="form-group">
					<label class="col-md-3 control-label font2">Principal :</label>
					<div class="col-md-9">
					<input type="number" min="1" class="form-control col-md-9"  name="p"  />
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label font2">Rate of Interest :</label>
					<div class="col-md-9">
						<input type="floatvalue" min="0" class="form-control col-md-9" name="i" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label font2">No of Month :</label>
					<div class="col-md-9">
					<input type="number" min="0" class="form-control col-md-9"  maxlength="10" name="m"  />
					</div>
				</div>
					<button type="submit" class="btn btn-primary"  style="margin-left:0%"><span class="char" name="btncal"></span>Submit</button>
			</form>
		</div>
</body>

