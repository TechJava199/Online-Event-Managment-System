<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
   
   <head>
   <link rel="stylesheet" type="text/css" href="css/style2.css"/>
   		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style type="text/css">
	 #nav{
		font-family:"Times New Roman",Georgia, serif;
		
		
		
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
       <div class="w3-container w3-light-grey">
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
				include_once "menu5.php";
			
				?>
				</div>
				<!--end navigation-->
		</div><!--end header row-->
		<br>
				<center><u><h2>Book an Event</h2></u></center>
		<div class="row"><!--content--->
			<!--content-->
			<div class="col-md-12">
				<form action="save7.php" method="post">
				<hr/>
				<div class = "form-group">
				<label for = "name">Bookind Id:-</label>
				<input type = "text" class = "form-control" id = "name" placeholder = "Enter user id" name="uname">
				</div>
				<hr/>
				<div class = "form-group">
				<label>Event Type:-</label>
						<select class="form-control" name="mn">
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
						<select class="form-control" name="ep">
							<option value="all">-select-</option>
							<option value="xyzGround">Xyz Ground  </option>
							

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
			<div class = "form-group">
				<label>Equipment Type:-</label>
						<select class="form-control" id="et" name="et">
							<option value="mike & Dj">Mike & Dj</option>
							<option value="flower wases">Flower wases</option>
							<option value="royal marriage set">Royal marriage set</option>

						</select>

				</div>

				<div class = "radio">
				<label>
				<input type = "radio" value = "veg" name="gen">Veg &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type = "radio" value = "non veg" name="gen">Non veg
				</label>
				</div>
				<div class = "form-group">
				<label>Lunch Type:-</label>
						<select class="form-control" name="lt">
							<option value="normal">Normal</option>
							<option value="deluxe">Deluxe</option>
							<option value="royal">Royal</option>

						</select>

				</div>
				<div class = "form-group">
				<label>Dinner Type:-</label>
						<select class="form-control" name="dt">
							<option value="normal">Normal</option>
							<option value="deluxe">Deluxe</option>
							<option value="royal">Royal</option>

						</select>

				</div>
				<h3><u>Decoration</u></h3>
				<div class = "form-group">
				<label>Lighitings:-</label>
						<select class="form-control" name="lg">
							<option value="normal">Normal</option>
							<option value="deluxe">Deluxe</option>
							<option value="royal">Royal</option>

						</select>

				</div>
				<div class = "form-group">
				<label>Flowers:-</label>
						<select class="form-control" id="fl" name="fl">
							<option value="normal">Normal</option>
							<option value="deluxe">Deluxe</option>
							<option value="royal">Royal</option>

						</select>

				</div>
				<div class = "form-group">
				<label>Seating:-</label>
						<select class="form-control" name="se">
							<option value="chairs">chairs</option>
							<option value="chairs and sofas">chairs and sofas</option>
							<option value="sofa">sofa</option>

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
				include_once "footer1.php";
			
				?>
			
			</div>
			<!--end footer--->
		</div><!--end hotel-->
	  </div><!--end container-->
	  </div>
      
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
      
   </body>
</html>