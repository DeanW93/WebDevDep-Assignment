<?php
require 'connect.php';
?>

<?php
  session_start();
  $username = $_SESSION['username'];
  if($username == '')
  {
    header("Location: index.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
                      <button type="button"  class="btn btn-danger btn-sm mr-4 ml-4 border border-light" style="width:235px;" id="logout"> Log Out </button>
	      			</li>

	



	  
		</nav>

<br><br>

 <?php


   $output='';

if (mysqli_connect_errno())
{
}
else
{
}

	$result = mysqli_query($conn, "SELECT firstname,Surname,Username,Password,Email,Address,Gender,ProfilePic FROM user where username = '$username'");
	while ( $row = mysqli_fetch_row($result) ) {

    $output .='<div class="container" >
    <div class="row">
      <div class="col-sm">

       

      </div>
      <div class="col-sm">
      <h1 class="text-info"> User Information</h1>
      <p> Profile Picture</p>
    <div >
      <span id="uploaded_image"> <img src="'.$row[7].'" height="150" width="225" class="img-thumbnail" /></span>
        <p class="text-success"><b>Name :</b> '.$row[0].'</p>
        <p class="text-success"><b>Surname : </b>'.$row[1].'</p>
        <p class="text-success"><b>Username :</b> '.$row[2].'</p>
        <p class="text-success"><b>Address :</b> '.$row[5].'</p>
        <p class="text-success"><b>Gender :</b> '.$row[6].'</p>
        <p class="text-success"><b>Pic : </b>'.$row[7].'</p>
    </div>

  

 ';

	}
  echo $output;
 ?>
     <label>Change Profile Picture</label>
   <input type="file" name="file" id="file" />
   <br />
   <button type="button" class="btn btn-info mr-10 ml-10 border border-light" data-toggle="modal" data-target="#exampleModalLong">
  Edit
</button>
<button type="button" class="btn btn-danger mr-4 ml-4 border border-light" id="delete" onclick='deleteItem'>
  Delete Account
</button>
   </div>
      <div class="col-sm">
        
      </div>
    </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Edit Details</label>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="Name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Surname</label>
    <input type="text" class="form-control" id="Surname" placeholder="Surname">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="Address" placeholder="Address">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="submit">Save changes</button>
      </div>
    </div>
  </div>
</div>





<script>






$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"upload.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }
 });


      -
      $(document).on('click', '#submit', function(){  
           var Name = $('#Name').val();
           var Surname = $('#Surname').val(); 
           var Address = $('#Address').val();
           var Password = $('#Password').val();
           if(Name == '')  
           {  
                alert("Enter First Name");  
                return false;  
           }  
           if(Surname == '')  
           {  
                alert("Enter Last Name");  
                return false;  
           }  
           $.ajax({  
                url:"edit.php",  
                method:"POST",  
                data:{Name:Name, Surname:Surname,Address:Address,Password:Password},  
                dataType:"text",  
                success:function(result)  
                {  
                       
                     alert("UPdate successfull"); 
                     


                }  
               
           }) 
           location.reload(); 
      });

        
      $(document).on('click', '#delete', function(){  
       
    if (confirm("Are you sure?")) {
      $.ajax({  
                url:"delete.php",  
                method:"POST",    
                success:function(result)  
                {    
                     alert("Profile Deleted"); 
          
                     window.location="index.php";


                }  
                
               
           }) 
          
    }
    return false;

           
           
           
   
          
      });




});
</script>
</body>
</html>