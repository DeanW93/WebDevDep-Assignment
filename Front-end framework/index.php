<?php
require 'connect.php';
?>

<!DOCTYPE html>

<html>
	<head>

		<title>GameGo.com</title>

		<!-- BootStrap Stylesheet -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- JS used for modal -->
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  		<!-- JQuery -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

	</head>


	<body class="bg-success">

		<!-- Jumbotron Banner -->
		<div class="row jumbotron bg-light text-dark ml-3 mr-3 mt-3 rounded">
			<div class="col">
				<h1>
					<strong>
						Game<span class="text-success">Go</span>
					</strong>
				</h1>
				<p>Official Website of Dean Whelan and Maciek Shipshinsky</p>
			</div>
			
		</div>

		<!-- NavBar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light ml-3 mr-3 mt-3 rounded">
  			<a class="navbar-brand" href="#">
  				<img class="mr-3" src="images/gamepad-icon.jpg" width="30" height="30" alt="Pad"> GameGo
  			</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   				<span class="navbar-toggler-icon"></span>
  			</button>

  			<!-- Drop down menus -->
	  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
	   			<ul class="navbar-nav mr-auto">

	    			<li class="nav-item active">
	        			<a class="nav-link text-success ml-3 mr-3" href="#">Home <span class="sr-only">(current)</span></a>
	      			</li>

	      			<li class="nav-item dropdown">
	        			<a class="nav-link text-success dropdown-toggle ml-3 mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          				Platform
	        			</a>
	        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        	<a class="dropdown-item" href="#">PC</a>
				        	<a class="dropdown-item" href="#">Playstation 4</a>
				        	<a class="dropdown-item" href="#">Xbox 1</a>
				        	<a class="dropdown-item" href="#">PS3/PS2</a>
				        	<a class="dropdown-item" href="#">Xbox360/Xbox</a>
				        	<a class="dropdown-item" href="#">Mobile</a>

				        	<div class="dropdown-divider"></div>
				        	<a class="dropdown-item" href="#">Browse by Platform</a>
				        </div>
	      			</li>

	      			<li class="nav-item dropdown">
	        			<a class="nav-link text-success dropdown-toggle ml-3 mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          				Genre
	        			</a>
	        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        	<a class="dropdown-item" href="#">Action/Adventure</a>
				        	<a class="dropdown-item" href="#">First Person Shooter</a>
				        	<a class="dropdown-item" href="#">Role Playing Games</a>
				        	<a class="dropdown-item" href="#">Strategy</a>
				        	<a class="dropdown-item" href="#">Simulation</a>
				        	<a class="dropdown-item" href="#">Puzzle Games</a>
				        	<a class="dropdown-item" href="#">VR Ready</a>

				        	<div class="dropdown-divider"></div>
				        	<a class="dropdown-item" href="#">Browse by Genre</a>
				        </div>
	      			</li>

	      			<li class="nav-item dropdown">
	        			<a class="nav-link text-success dropdown-toggle ml-3 mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          				Price Range
	        			</a>
	        			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        	<a class="dropdown-item" href="#">€5 - €10</a>
				        	<a class="dropdown-item" href="#">€10 - €20</a>
				        	<a class="dropdown-item" href="#">€20 - €40</a>
				        	<a class="dropdown-item" href="#">€40 - €60</a>
				        	<a class="dropdown-item" href="#">€60+ </a>
				        	<div class="dropdown-divider"></div>
				        	<a class="dropdown-item" href="#">Browse by price</a>
				        </div>
	      			</li>
	    		</ul>



	    		<!-- Search Form -->
	    		<form class="form-inline my-2 my-lg-6">
	    			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	    			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    		</form>
			</div>
		</nav>


		<div class="container">
   <br />
   <h2 align="center">Ajax Live Data Search using Jquery PHP MySql</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
   </div>
   <br />
  </div>
    <h3 class="text-center text-light bg-info p-2"> Example to try to get this advance search 
    </h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 ">
                <h5> Filter Product </h5>
                <hr>
                <h6 class="text-info"> Select Brand</h6>
                <ul class="list-group">
                    <?php
                    $sql="SELECT DISTINCT brand from product order by brand";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc()) {
                ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= 
                                   $row['brand']; ?>" id="brand"><?= $row['brand']; ?>
                    </li>
                    <?php } ?>
                </ul>

                <h6 class="text-info"> Select Product</h6>
                <ul class="list-group">
                    <?php
                    $sql="SELECT DISTINCT product from product order by product";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc()) {
                ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= 
                                   $row['product']; ?>" id="product"><?= $row['product']; ?>
                    </li>
                    <?php } ?>
                </ul>

                <h6 class="text-info"> Select Size</h6>
                <ul class="list-group">
                    <?php
                    $sql="SELECT DISTINCT size from product order by size";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc()) {
                ?>
                    <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check" value="<?= 
                                   $row['size']; ?>" id="size"><?= $row['size']; ?>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-lg-9">
                <h5 class="text-center" id="textChange"> All Products </h5>
                <hr>
                <div class="text-center">
                    <img src="images/loader.gif" id="loader" width="200" style="display:none;">
                </div>
                <div class="row" id="result">
                    <?php
                        $sql="select * from product";
                        $result=$conn->query($sql);
                        while($row=$result->fetch_assoc()){
                    ?>
                    <div class="col-md-3 mb-2">
                        <div class="card-deck">
                            <div class="card border-secondary">
                                <img src="images/<?= $row['Image']; ?>" class="card-img-top" width="100" height="200">
                                <div class="card-img-overlay">
                                    <h6 style="margin-top:175px;" class="text-light bg-info text-center rounded p-1">
                                        <?= $row['Product']; ?>
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title text-danger"> Price : 999 </h4>
                                    <p>
                                        Brand: <?= $row['Brand']; ?><br>
                                        Size: <?= $row['Size']; ?><br>
                                        Name: <?= $row['Product']; ?><br>
                                    </p>
                                    <a href="#" class="btn btn-success btn-block"> Add to Cart </a>

                                </div>
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
		
	</body>


</html>