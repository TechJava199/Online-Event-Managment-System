<!DOCTYPE html>
<html lang = "en">
   
   <head>
   <link rel="stylesheet" type="text/css" href="css/style.css"/>
  <style type="text/css">
	body {
    background-image:url(grass.jpg);
	background-size:cover;
	font-family:verdana;
	font-size:10px;
	margin:0;
	line-height:14px;
	background-repeat:no-repeat;
    }
	h1{
	color:gray;
	}
	
	</style>
 
      <meta charset = "utf-8">
      <meta http-equiv = "X-UA-Compatible" content = "IE = edge">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      
      <title>Bootstrap 101 Template</title>
      
      <!-- Bootstrap -->
      <link href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel = "stylesheet">
      
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      
      <!--[if lt IE 9]>
      <script src = "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src = "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      
   </head>
   
   <body>
      
	  <div class="container"><!--start container-->
		<div class="row"><!--start first row-->
			<!--start header-->
			<div class="col-md-12">
			<?php
			include_once "header.php";
			
			?>
			</div>
			<!--end header--->
			
		</div><!--end first row--->
		<div class="row"><!--header row-->
			<!--navigation-->
				<div class="col-md-12">
				<?php
				include_once "menu4.php";
			
				?>
				</div>
				<!--end navigation-->
		</div><!--end header row-->
		<br>
				<center><u><h2>Details</h2></u></center>
		<div class="row"><!--content--->
			<!--content-->
			<div class="col-md-12">
				<form action="save6.php" method="post">
				<hr/>
				<div class = "form-group">
				<label for = "name">Bookind Id:-</label>
				<input type = "text" class = "form-control" id = "name" placeholder = "Enter user id" name="uname">
				</div>
				<hr/>
				<div class = "form-group">
				<label>Event Type:-</label>
						<select class="form-control" id="mn">
							<option value="all">All</option>
							<option value="marriage">Marriage</option>
							<option value="family function">Family Function</option>
							<option value="birthday party">Birthday party</option>
							<option value="anniversary party">Anniversary Party</option>
							<option value="farewell party">Farewell party</option>
							<option value="college events">College events</option>

						</select>

				</div>
				<hr/>
				 <div class = "form-group">
				<label>Event Place:-</label>
						<select class="form-control" id="ep">
							<option value="all">-select-</option>
							<option value="marriage">Xyz Ground  </option>
							

						</select>

				</div>
				<hr/>
				<div class = "form-group">
				<label for = "name">No Of Guests</label>
				<input type = "text" class = "form-control" id = "name" name="ph">
				</div>
				<hr/>
				<div class = "form-group">
				<label for = "name">Date</label>
				<input type = "text" class = "form-control" id = "name" name="em">
				</div>
				<hr/>
				<div class = "checkbox">
				<label for = "name">Equipment:-</label><br>
				<label><input type = "checkbox">Dj</label>
				<label><input type = "checkbox">stage</label>
				<label><input type = "checkbox">Mike And Speakers</label>
				</div>
				<div class = "checkbox">
				<label for = "name">Food:-</label><br>
				<label><input type = "checkbox">Break Fast</label>
				<label><input type = "checkbox">Lunch</label>
				<label><input type = "checkbox">Tea & Snacks</label>
				<label><input type = "checkbox">Dinner</label>
				</div>
				<div class = "radio">
				<label>
				<input type = "radio" value = "veg" name="gen">Veg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "radio" value = "non veg" name="gen">Non veg
				</label>
				</div>
				<div class = "form-group">
				<label>Lunch Type:-</label>
						<select class="form-control" id="Lt">
							<option value="normal">Normal</option>
							<option value="deluxe">Deluxe</option>
							<option value="royal">Royal</option>

						</select>

				</div>
				<div class = "form-group">
				<label>Dinner Type:-</label>
						<select class="form-control" id="dt">
							<option value="normal">Normal</option>
							<option value="deluxe">Deluxe</option>
							<option value="royal">Royal</option>

						</select>

				</div>
				<h3><u>Decoration</u></h3>
				<div class = "form-group">
				<label>Lighitings:-</label>
						<select class="form-control" id="lg">
							<option value="normal">Normal</option>
							<option value="deluxe">Deluxe</option>
							<option value="royal">Royal</option>

						</select>

				</div>
				<div class = "form-group">
				<label>Flowers:-</label>
						<select class="form-control" id="fl">
							<option value="normal">Normal</option>
							<option value="deluxe">Deluxe</option>
							<option value="royal">Royal</option>

						</select>

				</div>
				<div class = "form-group">
				<label>Seating:-</label>
						<select class="form-control" id="se">
							<option value="normal">chairs</option>
							<option value="deluxe">chairs and sofas</option>
							<option value="royal">sofa</option>

						</select>

				</div>
				<div class="form-group">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" class="btn btn-default" value="Submit">
					</div>

				
				</form>
				
				
			</div>
			<!--end content--->
		</div><!--end content row--->
		<div class="row"><!--start footer-->
			<!--start footer--->
			<div class="col-md-12">
				<?php
				include_once "footer.php";
			
				?>
			
			</div>
			<!--end footer--->
		</div><!--end hotel-->
	  </div><!--end container-->
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      
   </body>
</html>