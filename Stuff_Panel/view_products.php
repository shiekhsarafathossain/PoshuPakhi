<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Products</title>
</head>
<body>
    <h1 class="text-center">View Products</h1>
    <table class="table table-border m5-5">
        <thead class="bg-info">
            <tr>
                <th>Product ID</th>
                <th>Product Title</th>
                <th>Product Description</th>
                <th>Product Keywords</th>
                <th>Product Image</th>
                <th>Product Selling Price</th>
                <th>Product Stock Quantity</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            
            <?php
            $get_products = "SELECT * FROM products ORDER BY product_id";
            $result = mysqli_query($con,$get_products);
            while($row=mysqli_fetch_assoc($result)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_keywords = $row['product_keywords'];
               // $product_category = $row['product_category'];
                $product_price = $row['product_price'];
                $product_price_buying = $row['product_price_buying'];
                $seller_name = $row['seller_name'];
                $seller_contact = $row['seller_contact'];
                $stock_quantity = $row['stock_quantity'];
                $status = $row['status'];
                $product_image1 = $row['product_image1'];
                ?>
                
                <tr>
                <td><?php echo $product_id; ?></td>
                <td><?php echo $product_title; ?></td>
                <td><?php echo $product_description; ?></td>
                <td><?php echo $product_keywords; ?></td>

                <td><img src='../assets/images/product_images/<?php echo $product_image1; ?>' class='product_image'></td>
                <td><?php echo $product_price; ?> -/ BDT</td>
                <td><?php echo $stock_quantity; ?></td>
    
                <td><?php echo $status; ?></td>
                <td><a href="./index.php?edit_products=<?php echo $product_id; ?>" class="text-dark"><i class="fa-solid fa-pen-to-square"></i></a></td>
                <td><a href="./index.php?delete_products=<?php echo $product_id; ?>" class="text-dark"><i class="fa-solid fa-trash"></i></a></td>
                </tr>

            <?php    
            }
            ?>
            
            
        </tbody>
    </table>
</body>
</html>