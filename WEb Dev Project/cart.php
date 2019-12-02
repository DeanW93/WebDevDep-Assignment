<?php
    session_start();
    $username = $_SESSION['username'];
    if($username == '')
    {
      header("Location: index.php");
    }
    ini_set( "display_errors", 0); 
  
?>

<?php
require 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no">
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>


<body>

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
	        			<a class="nav-link text-success ml-3 mr-3"  href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                      
                    <li class="nav-item active">
	        			<a class="nav-link text-success ml-3 mr-3" id="acc" >MyAccount <span class="sr-only">(current)</span></a>
                    </li>
                      
                    <li class="nav-item active">
	        			<a class="nav-link text-success ml-3 mr-3" id="shopp" >Shopping cart <span class="sr-only">(current)</span></a>
	      			</li>
                         
                    <li class="nav-item active">
                        <button type="button" class="btn btn-success btn-sm  mr-4 ml-4 border border-light" onclick="document.getElementById('id01').style.display='block'">Login</button>
                    </li>

                    <li class="nav-item active">
                        <button type="button" class="btn btn-success btn-sm  mr-4 ml-4 border border-light" onclick="document.getElementById('id02').style.display='block'">Create Account</button>
                    </li>
                    
                    <li class="nav-item active">
                        <button type="button"  class="btn btn-danger btn-sm mr-4 ml-4 border border-light" style="width:235px;" id="logout"> Log Out </button>
                    </li>

        </nav>

<div class="container">

            <div class="col-lg-9">
                <h5 class="text-center text-info display-3" id="textChange"><strong> My Cart </strong></h5>
                <hr>
                <div class="text-center">
                    <img src="images/loader.gif" id="loader" width="200" style="display:none;">
                </div>
                <div class="row" id="result">
                    <?php
                        $sql="select * from $username";
                        $result=$conn->query($sql);
                        if(mysqli_num_rows($result) > 0)
                        {
                        while($row=$result->fetch_assoc()){
                    ?>
                    <div class="col-md-3 mb-2">
                        <div class="card-deck">
                            <div class="card border-secondary">-
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

                                </div>
                            </div>
                        </div>
                        <button type="button" name="add_to_cart" class="btn btn-success btn-block border border-white mr-4" id="<?= $row['ID']; ?>"> Delete </button>
                    </div>
                        <?php }}else{

                            echo " Cart is Empty!!";
                        } ?>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click', 'button[name="add_to_cart"]', function(){  
                
                
                var product_id = $(this).attr("id")
            alert("Added to cart!");
            $.ajax({
                url:'delete.php',
                method: 'POST',
                
                data:{product_id:product_id},
                success:function(response){
                    alert(response);
              

                }
            });
            location.reload(); 
      });
        

        // when checkbox click do the following 
        $(".product_check").click(function(){
            //shows loader
            $("#loader").show();

            var action = 'data';
            var brand = get_filter_text('brand');
            var product = get_filter_text('product');
            var size = get_filter_text('size');

            //call ajax
            $.ajax({
                url:'action.php',
                method: 'POST',
                
                success:function(response){
                    $("#result").html(response);
                    $("#loader").hide();
                    $("#textchange").text("Filtered Products");

                }
            });




        });
        //function to intialise the array 
        function get_filter_text(text_id){
            var filterData = [];
            //values in the input field get stored in the array 
            $('#'+text_id+':checked').each(function(){
                filterData.push($(this).val());
            });
            return filterData;
        }



    });


</script>

</body>

</html>