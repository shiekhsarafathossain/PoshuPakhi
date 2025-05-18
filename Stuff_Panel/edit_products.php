<?php
// Make sure you have your database connection $con initialized before this script

if(isset($_GET['edit_products'])){
    $edit_id = $_GET['edit_products'];
    $get_data = "SELECT * FROM products WHERE product_id=$edit_id";
    $result = mysqli_query($con, $get_data);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "<p>No product found.</p>";
        exit;
    }

    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $category_id = $row['category_id'];

    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];

    $product_price = $row['product_price'];

    $select_category = "SELECT * FROM categories WHERE category_id=$category_id";
    $result_category = mysqli_query($con, $select_category);
    $row_category = mysqli_fetch_assoc($result_category);
    $category_title = $row_category['category_title'];
}

$select_category_all = "SELECT * FROM categories";
$result_category_all = mysqli_query($con, $select_category_all);
?>

<div class="container mt-5 d-flex justify-content-center">
    <div class="w-50">
        <h1 class="text-center mb-4">Edit Product</h1>

        <form action="" method="post" enctype="multipart/form-data" class="d-flex flex-column align-items-center">
            <!-- Product Title -->
            <div class="form-outline mb-3 w-100">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" id="product_title" name="product_title" value="<?php echo htmlspecialchars($product_title); ?>" class="form-control" required>
            </div>

            <!-- Product Description -->
            <div class="form-outline mb-3 w-100">
                <label for="product_description" class="form-label">Product Description</label>
                <input type="text" id="product_description" name="product_description" value="<?php echo htmlspecialchars($product_description); ?>" class="form-control" required>
            </div>

            <!-- Product Keywords -->
            <div class="form-outline mb-3 w-100">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" id="product_keywords" name="product_keywords" value="<?php echo htmlspecialchars($product_keywords); ?>" class="form-control" required>
            </div>

            <!-- Product Category -->
            <div class="form-outline mb-3 w-100">
                <label for="product_category" class="form-label">Product Category</label>
                <select name="product_category" class="form-select">
                    <option value="<?php echo $category_id; ?>"><?php echo htmlspecialchars($category_title); ?></option>
                    <?php
                    while($row_category_all = mysqli_fetch_assoc($result_category_all)) {
                        echo "<option value='{$row_category_all['category_id']}'>{$row_category_all['category_title']}</option>";
                    }
                    ?>
                </select>
            </div>

            <!-- Product Price -->
            <div class="form-outline mb-3 w-100">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" id="product_price" name="product_price" value="<?php echo htmlspecialchars($product_price); ?>" class="form-control" required>
            </div>

            <!-- Product Images -->
            <div class="form-outline mb-3 w-100">
                <label class="form-label">Current Image 1</label><br>
                <?php if($product_image1): ?>
                    <img src="../assets/images/product_images/<?php echo htmlspecialchars($product_image1); ?>" alt="Image 1" style="max-width: 150px; margin-bottom:10px;">
                <?php else: ?>
                    <p>No image uploaded.</p>
                <?php endif; ?>
                <input type="file" name="product_image1" class="form-control">
            </div>

            <div class="form-outline mb-3 w-100">
                <label class="form-label">Current Image 2</label><br>
                <?php if($product_image2): ?>
                    <img src="../assets/images/product_images/<?php echo htmlspecialchars($product_image2); ?>" alt="Image 2" style="max-width: 150px; margin-bottom:10px;">
                <?php else: ?>
                    <p>No image uploaded.</p>
                <?php endif; ?>
                <input type="file" name="product_image2" class="form-control">
            </div>

            <div class="form-outline mb-3 w-100">
                <label class="form-label">Current Image 3</label><br>
                <?php if($product_image3): ?>
                    <img src="../assets/images/product_images/<?php echo htmlspecialchars($product_image3); ?>" alt="Image 3" style="max-width: 150px; margin-bottom:10px;">
                <?php else: ?>
                    <p>No image uploaded.</p>
                <?php endif; ?>
                <input type="file" name="product_image3" class="form-control">
            </div>

            <div class="text-center mt-4">
                <input type="submit" name="edit_product" value="Update Product" class="btn button-addtocart-color px-4 mb-4">
            </div>
        </form>
    </div>
</div>

<?php
if(isset($_POST['edit_product'])){
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];

    // Handle images - keep old if no new upload
    $product_image1 = !empty($_FILES['product_image1']['name']) ? $_FILES['product_image1']['name'] : $row['product_image1'];
    $product_image2 = !empty($_FILES['product_image2']['name']) ? $_FILES['product_image2']['name'] : $row['product_image2'];
    $product_image3 = !empty($_FILES['product_image3']['name']) ? $_FILES['product_image3']['name'] : $row['product_image3'];

    // Move uploaded images if any
    if(!empty($_FILES['product_image1']['tmp_name'])) {
        move_uploaded_file($_FILES['product_image1']['tmp_name'], "../assets/images/product_images/$product_image1");
    }
    if(!empty($_FILES['product_image2']['tmp_name'])) {
        move_uploaded_file($_FILES['product_image2']['tmp_name'], "../assets/images/product_images/$product_image2");
    }
    if(!empty($_FILES['product_image3']['tmp_name'])) {
        move_uploaded_file($_FILES['product_image3']['tmp_name'], "../assets/images/product_images/$product_image3");
    }

    // Update query
    $update_product = "UPDATE products SET 
        product_title='$product_title',
        product_description='$product_description',
        product_keywords='$product_keywords',
        category_id='$product_category',
        product_image1='$product_image1',
        product_image2='$product_image2',
        product_image3='$product_image3',
        product_price='$product_price',
        date=NOW()
        WHERE product_id=$edit_id";

    $result_update = mysqli_query($con, $update_product);

    if($result_update){
        echo "<script>alert('Product updated successfully');</script>";
        echo "<script>window.open('./index.php?view_products', '_SELF');</script>";
    } else {
        echo "<script>alert('Failed to update product.');</script>";
    }
}
?>
