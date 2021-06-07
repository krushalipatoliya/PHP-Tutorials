<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Month Calender</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cossssde.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<style>
			#kkk {
					background-color:#000000;
				 position: fixed;
				 top:50%;
				left:50%;
				margin-top: -150px;
				margin-left: -100px;
			}
		</style>
    </head>
    <body>
	<font color="white">
        <center><div id="all">
            <div id="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <!-- breadcrumb-->
                            <nav aria-label="breadcrumb"> </nav>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="well" id="kkk">
                                <div class="box" style="margin:center">
                                    <center><h1>Enter Month Number </h1></center>
                                    <hr>
										<form action="result.php">
											<form action="result.php" method="post" >
											<div  class="form-group">
                                            <center><label for="Principal">Month No:</label></center>
                                            <center>
                                                <select id="month" name="month" placeholder="Enter A Month Number"  class="form-control" required>
                                            </center>
                                            <center><option >Enter A Month Number</option></center>
                                            <option value="1"> Month No. 1 </option>
                                            <option value="2"> Month No. 2 </option>
                                            <option value="3"> Month No. 3 </option>
                                            <option value="4"> Month No. 4 </option>
                                            <option value="5"> Month No. 5 </option>
                                            <option value="6"> Month No. 6 </option>
                                            <option value="7"> Month No. 7 </option>
                                            <option value="8"> Month No. 8 </option>
                                            <option value="9"> Month No. 9 </option>
                                            <option value="10">Month No. 10</option>
                                            <option value="11">Month No. 11</option>
                                            <option value="12">Month No. 12</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="text-left ">
                                <center><button type="submit"  class="btn btn-warning">Submit</button></center>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
		</center>
    </font>
	</body>
</html>
