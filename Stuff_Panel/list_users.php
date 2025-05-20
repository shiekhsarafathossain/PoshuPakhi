<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
</head>
<body>
    <h1 class="text-center text-success">All Users</h1>
    <table class="table table-border mt-5 text-center">
        <thead class="bg-info">
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>User Email</th>
                <th>User IP</th>
                <th>User Address</th>
                <th>User Mobile Number</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light text-center">
            <?php
            $get_users="SELECT * FROM user_table";
            $result=mysqli_query($con,$get_users);
            while($row_data=mysqli_fetch_assoc($result)){
                $user_id=$row_data['user_id'];
                $username=$row_data['username'];
                $user_email=$row_data['user_email'];
                $user_ip=$row_data['user_ip'];
                $user_address=$row_data['user_address'];
                $user_mobile=$row_data['user_mobile'];
                echo "
                <tr class='text-center'>
                <td>$user_id</td>
                <td>$username</td>
                <td>$user_email</td>
                <td>$user_ip</td>
                <td>$user_address</td>
                <td>$user_mobile</td>
            </tr>
                ";
            }   
            ?>

            
        </tbody>
    </table>
</body>

</html>