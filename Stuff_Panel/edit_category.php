<?php
// Initialize the variable
$category_title = '';

// Check if category is set
if(isset($_GET['edit_category'])){
    $edit_category = $_GET['edit_category'];

    $get_categories = "SELECT * FROM categories WHERE category_id = $edit_category";
    $result_cat = mysqli_query($con, $get_categories);
    if(mysqli_num_rows($result_cat) > 0){
        $row = mysqli_fetch_assoc($result_cat);
        $category_title = $row['category_title'];
    } else {
        echo "<script>alert('Invalid category ID'); window.history.back();</script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Categories</title>
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center">Edit Categories</h1>
        <form action="" method="post" class="text-center">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="category_title" class="form-label">Category Title</label>
                <input type="text" name="category_title" id="category_title" class="form-control" required value="<?php echo htmlspecialchars($category_title); ?>">
            </div>
            <input type="submit" value="Update Category" class="btn button-addtocart-color px-3 mb-3" name="edit_cat">
        </form>
    </div>
</body>
</html>

<?php
// Update category
if(isset($_POST['edit_cat']) && isset($_GET['edit_category'])){
    $cat_title = mysqli_real_escape_string($con, $_POST['category_title']);
    $edit_category = (int)$_GET['edit_category'];
    
    $update_query = "UPDATE categories SET category_title='$cat_title' WHERE category_id=$edit_category";
    $result_update = mysqli_query($con, $update_query);

    if($result_update){
        echo "
        <script>alert('Category updated successfully')</script>
        <script>window.open('./index.php?view_categories','_SELF')</script>
        ";
    } else {
        echo "
        <script>alert('Category update unsuccessful!')</script>
        <script>window.open('./index.php?view_categories','_SELF')</script>
        ";
    }
}
?>
