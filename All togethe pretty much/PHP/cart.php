<?php
    session_start();
    $username = $_SESSION['username'];
    if($username == '')
    {
      header("Location: index.php");
    }
  
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
                        $sql="select * from $username";
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
                        <button type="button" name="add_to_cart" class="btn btn-success btn-block" style="width:235px;" id="<?= $row['ID']; ?>"> Delete </button>
                    </div>
                        <?php } ?>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click', 'button[name="add_to_cart"]', function(){  
                
                
                var product_id = $(this).attr("id")
            alert("gfg");
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