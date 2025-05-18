<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <h1 class="text-center">View Categories</h1>
    <table class="table table-border mt-5">
        <thead class="bg-info">
            <tr>
                <th>Category Id</th>
                <th>Category Title</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
            $select_cat="SELECT * FROM categories";
            $result = mysqli_query($con,$select_cat);
            while($row=mysqli_fetch_assoc($result)){
                $category_id=$row['category_id'];
                $category_title=$row['category_title'];
            
            ?>
            <tr>
            <td> <?php echo $category_id ?></td>
            <td><?php echo $category_title ?></td>
            <td><a href="./index.php?edit_category=<?php echo $category_id; ?>" class="text-dark"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="./index.php?delete_category=<?php echo $category_id; ?>" class="text-dark"><i class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php
            } ?>
        </tbody>
    </table>

</body>
</html>