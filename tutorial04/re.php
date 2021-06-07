<!doctype html>
<html>

<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
		  
		  <style>
		     .font{font-family: Poppins; background-color:#454545; color:white;}
		     .font2{color:white; padding-top:10px }
			 .light{color:#999999; }
			 form{text-align:center; }
			 h3{font-size:20px;}
		 </style>
<body>
<?php

	$p=$_GET['p'];
	$i=$_GET['i'];
	$m=$_GET['m'];

	$si=($p*$i*$m)/100;

?>
		<div class="container" >
			<h1 style="text-align: center"  class="font well">Simple Interest</h1>
			<hr>
			<br>
	       <form class="form form-horizontal jumbotron col-md-6" style="margin:0 auto; float:none; background-color:#999999;">
				
					<div class="font2"><h3>Principal : <?php echo ($p);?>  </h3></div>
				
					<div class="font2"><h3>Rate of Interest:<?php echo ($i);?></h3></div>
				
				
					<div class="font2"><h3>No. of Month: <?php echo ($m);?> </h3></div>
				
				<div class="form-group">
					<div class="font2"><h3>Total Amount :<?php echo ($si);?><strong><h3><b><u></u></b></h3></strong></span></h3></div>
				</div>
			</form>
     </div>
</body>
</html>

