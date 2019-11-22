<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "project");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM product
  WHERE Brand LIKE '%".$search."%'
  OR Product LIKE '%".$search."%' 
  OR Size LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM product 
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_array($result))
 {
    while($row=$result->fetch_assoc()){
        $output .='                    <div class="col-md-3 mb-2">
        <div class="card-deck">
            <div class="card border-secondary">
                <img src="images/'.$row['Image'].'" class="card-img-top" width="100" height="200">
                <div class="card-img-overlay">
                    <h6 style="margin-top:175px;" class="text-light bg-info text-center rounded p-1">
                        '.$row['Product'].'
                    </h6>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-danger"> Price : 999 </h4>
                    <p>
                        Brand: '.$row['Brand'].'<br>
                        Size: '.$row['Size'].'<br>
                        Name: '.$row['Product'].'<br>
                    </p>
                    <a href="#" class="btn btn-success btn-block"> Add to Cart </a>

                </div>
            </div>
        </div>
    </div>';
    }

 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>