<?php
    require 'connect.php';


       $sql = "Select * from product where brand !='' ";
        
       if(isset($_POST['brand'])){
            $brand = implode("','", $_POST['brand']);
            $sql .="AND brand IN('".$brand."')";
       }
       if(isset($_POST['product'])){
        $product = implode("','", $_POST['product']);
        $sql .="AND product IN('".$product."')";

       }
       if(isset($_POST['size'])){
        $size = implode("','", $_POST['size']);
        $sql .="AND size IN('".$size."')";

       }

       $result = $conn->query($sql);
       $output='';

       if($result->num_rows>0){
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
                 

                        </div>
                    </div>
                </div>
                <button type="button" name="add_to_cart" class="btn btn-success btn-block" style="width:235px;" id="'.$row['ID'].'>"> Add to Cart </button>
            </div>
            ';
            }

       }
       else{
        $output = "<h3> No products Found ! </h3>";

       }
       echo $output;

   

?>

