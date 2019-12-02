<?php
include 'prepare.php';
require 'connect.php';
?>
<?php
    session_start();
    $username = $_SESSION['username'];
    $check = $_SESSION['check'];
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
      <link rel="stylesheet" type="text/css" href="login.css">


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
                        <button type="button" class="btn btn-success btn-sm btn-space mr-4 ml-4 border border-light" onclick="document.getElementById('id01').style.display='block'">Login</button>
                    </li>

                    <li class="nav-item active">
                        <button type="button" class="btn btn-success btn-sm btn-space mr-4 ml-4 border border-light" onclick="document.getElementById('id02').style.display='block'">Create Account</button>
                    </li>
                    
                    <li class="nav-item active">
                        <button type="button"  class="btn btn-danger btn-sm mr-4 ml-4 border border-light" style="width:235px;" id="logout"> Log Out </button>
                    </li>

        </nav>

<div class="container">
   <br />
    
   <div>
       <h1 class="display-5 text-info">Search</h1>
    </div>

   <div class="form-group">
    <div class="input-group">
     <input type="text" name="search_text" id="search_text" placeholder="Search by name" class="form-control" />
    </div>
   </div>
   <br />
  </div>
    
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
                                  

                                </div>
                            </div>

                        </div>
                        <button type="button" name="add_to_cart" class="btn btn-success btn-block" style="width:235px;" id="<?= $row['ID']; ?>"> Add to Cart </button>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </div>
     
    </div>
	
	
	   <div id="id01" class="modal">
      
      <form enctype="multipart/form-data" class="modal-content animate" action="checkuser.php" method="post">
        <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="images/gaming-1.jpg" alt="Avatar" class="avatar" >
        </div>
    
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="Name" required>
    
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="Password" required>
            
          <button type="submit" id="submitlog" >Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
    
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
      </form>
    </div>
	
	

	 <div id="id02" class="modal">
          
          <form enctype="multipart/form-data" class="modal-content animate" action="newuser.php" method="post" id="regform">
            <div class="imgcontainer">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="images/new.png" alt="Avatar" class="avatar" >
            </div>
        
            <div class="container">
              <label for="uname"><b>First Name</b></label>
              <input type="text" placeholder="Enter Your Name" name="Name" required>
        
              <label for="psw"><b>Surname</b></label>
              <input type="text" placeholder="Enter Your Surname" name="Surname" required>
        
                <label for="uname"><b>UserName</b></label>
              <input type="text" placeholder="Enter Your UserName" name="Username" required>
        
               <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Your Password" name="Password" required>
        
               <label for="psw"><b>E-Mail</b></label>
              <input type="email" placeholder="Enter Your Email" name="Email" required>

              <label for="psw"><b>Address</b></label>
              <input type="text" placeholder="Enter Address" name="Address" required>

              <label for="psw"><b>Gender</b></label>
              <input type="text" placeholder="Enter Your Gender" name="Gender" required>


              <label for="psw"><b>Submit</b></label>
              <input type="submit" id="submitac" name="submit">

              <label>
                <input type="checkbox" checked="checked" name="remember"> I want to receive any further promotions
              </label>
            </div>
        
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
          </form>
        </div>
<script type="text/javascript">
    $(document).ready(function(){
        var username = '<?php echo $username;?>';
        var check = '<?php echo $check;?>';


      

        if(username == '')
        {
            $("#logout").hide();
            
            
        }
        else
        {
            $("#login").hide();
            $("#createaccount").hide();
                }




if(check =='LOGGED IN')
{
    alert("You are now logged in");
    <?php $_SESSION['check'] = "bob";?>

}
if (check == 'LOG IN FAILED' )
{

    alert("Log IN Failed");
    <?php $_SESSION['check'] = "bob";?>
}

$(document).on('click', '#logout', function(){  
    
    var logout = $('#logout').val();
    $.ajax({  
                url:"logout.php",  
                method:"POST",  
                data:{logut:logout},  
                success:function(result)  
                {  
                       
                     alert(result); 
                     


                }  
               
           }) 
  
});


$(document).on('click', '#acc', function(){  
  

                if(username == '')
                {
                    alert("Log in First To access account");
                }
                else
                {
                    window.location="info.php";
                }
  
});

$(document).on('click', '#shopp', function(){  
         if(username == '')
         {
                    alert("Log in First To acess shopping cart");
                }
                if(username !='')
                {
                    
                    window.location="cart.php";
                }
   
  
});

        $(document).on('click', 'button[name="add_to_cart"]', function(){  
                
                
                var product_id = $(this).attr("id");
                if(username == '')
                {
                    alert("Log in First To Add to cart");
                }
                else
        {
                $.ajax({  
                url:"add.php",  
                method:"POST",  
                data:{product_id:product_id},
                success:function(result)  
                {  
                       
                     alert(result); 
                     


                }  
               
           }) 
        }
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
                data:{action:action,brand:brand,product:product,size:size},
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


        load_data();

        function load_data(query)
        {
        $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{query:query},
        success:function(data)
        {
        $('#result').html(data);
        }
        });
        }
        $('#search_text').keyup(function(){
        var search = $(this).val();
        if(search != '')
        {
        load_data(search);
        }
        else
        {
        load_data();
        }
        });



    });
        // Get the modal-
        var modal = document.getElementById('id01');
        var modal2 = document.getElementById('id02');
        




</script>

</body>

</html>