<?php
require_once"dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product edit</title>
</head>
<body>
    <h3>Product Edit</h3>
    <?php 
   $id=$_REQUEST['id'];
  
//    print_r($row);
    
    
    
    
    if (isset($_POST['update'])) {
        extract($_POST);
        $sql="UPDATE product SET product_name='$pn',product_details='$pd',product_price='$price',product_quantity='$quan' WHERE id='$id'";

        
        $result=$db->query($sql);
        // echo $db->affected_rows;
        if($db->affected_rows){
                echo "successfully updated";
        }else{
            echo "failed";
        }


    }
    //getting data form table
    $sql="SELECT*FROM product WHERE id='$id'";
    $data=$db->query($sql);
    $row=$data->fetch_object();
    
    ?>
    <form action="" method="post" style="width: fit-content;">
        <fieldset>
            <legend>product Edit</legend>
     Product Name: <br><br>  <input type="text" name="pn" id="" placeholder="Enter Product Name" value="<?php echo $row->product_name;?>"><br><br>
    Product Details:    <br><br><textarea name="pd" id="" placeholder="Enter Product Details"></textarea><br><br>
   Product Price: <br><br><input type="text" name="price" id="" placeholder="Enter Product Price"><br><br>
    Product Quantity: <br><br><input type="text" name="quan" id="" placeholder="Enter product Quantity"><br><br>
    <input type="submit" value="Update" name="update">
    <input type="hidden" value="<?php echo $id?>">

    </fieldset>

    </form>

    <a href="allproducts.php">product list</a>

</body>
</html>