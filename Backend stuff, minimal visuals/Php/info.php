<?php
	session_start();
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
<body>

<br><br>

 <?php

 	$db = mysqli_connect("localhost","root","","Project");
 	$username = $_SESSION['username'];
   $output='';

if (mysqli_connect_errno())
{
}
else
{
}

	$result = mysqli_query($db, "SELECT firstname,Surname,Username,Password,Email,Address,Gender,ProfilePic FROM user where username = '$username'");
	while ( $row = mysqli_fetch_row($result) ) {

    $output .='<div class="container id="resulttts"">
    <div class="row">
      <div class="col-sm">

       

      </div>
      <div class="col-sm">

      <span id="uploaded_image"> <img src="'.$row[7].'" height="150" width="225" class="img-thumbnail" /></span>
        <p>Name : '.$row[0].'</p>
        <p>Surname : '.$row[1].'</p>
        <p>Username : '.$row[2].'</p>
        <p>Address : '.$row[5].'</p>
        <p>Gender : '.$row[6].'</p>
        <p>Pic : '.$row[7].'</p>

  

 ';

	}
  echo $output;
 ?>
     <label>Change Profile Picture</label>
   <input type="file" name="file" id="file" />
   <br />
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Edit
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


 $("#submit").click(function(e){


  var action = "data"

    alert(action);

        $.ajax({type: "POST",
                url: "edit.php",
                data: {action:action, Name: $(Name).val(), Surname: $(Surname).val(), Address: $(Address).val(), Password: $(Password).val()},
                success:function(result){
          $("#resulttts").html(result);
        }});
      });



});
</script>
</body>
</html>