<?php 
session_start(); 
if(!isset($_SESSION['username'])) 
{ header("location:login.php"); 
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Information Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script>
	   $("document").ready(function(){
            	$("a.delete").click(function(){
            		$(this).parents("tr").fadeOut(3000);
;
            	});
            });
  </script>
</head>
<body>

<center>
<div class="container"><br>
<br>
  <h1><b>Information Table</b></h1>
   <hr><hr> 
   <br> 
   <div class="table-title">
					<div class="row">
					<div class="col-sm-15">
							<button type="button" class="btn btn-dark add-new" >Insert</button>
							<a class="btn btn-primary add-new text-right" href="logout.php">Logout</a>
						
						</div>
					</div>
				</div>
   <br>
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
		<th>DOB</th>
        <th>City</th>
		<th>Phonenumber</th>
        <th>Gender</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Diya</td>
        <td>Patel</td>
        <td>DP12@gmail.com</td>
		<td>12/3/2000</td>
        <td>Rajkot</td>
        <td>9586321456</td>
		<td>Female</td>
		<td> <a href="#" data-toggle="tooltip" data-placement="Edit" title="Edit"><i class='fas fa-edit' style='font-size:26px;color:white'></i></a> 
		     <a href="#" data-toggle="tooltip" data-placement="Delete" title="Delete" class="delete"><i class='fas fa-trash-alt' style='font-size:26px;color:white'></i></a>
		</td>
      </tr>
      <tr>
        <td>Vraj</td>
        <td>Vala</td>
        <td>v23@gmail.com</td>
	<td>04/11/2001</td>
        <td>Surat</td>
        <td>6548063489</td>
	<td>Male</td>
	<td> <a href="#" data-toggle="tooltip" data-placement="Edit" title="Edit"><i class='fas fa-edit' style='font-size:26px;color:white'></i></a> 
		    <a href="#" data-toggle="tooltip" data-placement="Delete" title="Delete" class="delete"><i class='fas fa-trash-alt' style='font-size:26px;color:white'></i></a>
	</td>
      </tr>
	  <tr>
        <td>July</td>
        <td>Dave</td>
        <td>jd4@gmail.com</td>
		<td>18/06/2001</td>
        <td>Mumbai</td>
        <td>9094787099</td>
		<td>Femail</td>
		<td> <a href="#" data-toggle="tooltip" data-placement="Edit" title="Edit"><i class='fas fa-edit' style='font-size:26px;color:white'></i></a> 
		     <a href="#" data-toggle="tooltip" data-placement="Delete" title="Delete" class="delete"><i class='fas fa-trash-alt' style='font-size:26px;color:white'></i></a>
		</td>
      </tr>
    </tbody>
    
  </table>
</div>
</center>
</body>
</html>

