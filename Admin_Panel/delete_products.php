<?php

if(isset($_GET['delete_products'])){
    $delete_id=$_GET['delete_products'];
    $delete_product="DELETE FROM products WHERE product_id=$delete_id";
    $result_product=mysqli_query($con,$delete_product);
    if($result_product){
        echo "
        <script>alert('Product deleted successfully!')</script>
        ";
        echo "
        <script>window.open('./index.php?view_products','_SELF')</script>
        ";

    }
    else{
        echo "
        <script>alert('Delete Unsuccessful!')</script>
        ";
        echo "
        <script>window.open('./index.php?view_products','_SELF')</script>
        ";
    }
}

?>