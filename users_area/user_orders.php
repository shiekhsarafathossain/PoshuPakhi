<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <link rel="stylesheet" href="path/to/bootstrap.min.css"> <!-- Optional: For proper table styling -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
    @session_start(); // Ensure session is started
    include("../Includes/connect.php"); // Include DB connection

    $username = $_SESSION['username'];
    $get_user = "SELECT * FROM user_table WHERE username='$username'";
    $result = mysqli_query($con, $get_user);
    $row_fetch = mysqli_fetch_assoc($result);
    $user_id = $row_fetch['user_id'];
    ?>

    <h3 class="text-success">Orders History</h3>

    <table class="table table-bordered mt-5">
        <thead class="bg-info">
            <tr>
                <th>Order ID</th>
                <th>Amount</th>
                <th>Total Products</th>
                <th>Invoice Number</th>
                <th>Order Date</th>
                <th>Estimated Delivery</th>
                <th>Shipping Address</th>
                <th>Complete/Incomplete</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody class="bg-secondary text-light">
            <?php
            $get_order_details = "SELECT * FROM user_orders WHERE user_id = $user_id";
            $result_orders = mysqli_query($con, $get_order_details);
            $number = 1;

            while ($row_orders = mysqli_fetch_assoc($result_orders)) {
                $order_id = $row_orders['order_id'];
                $amount_due = $row_orders['amount_due'];
                $total_products = $row_orders['total_products'];
                $invoice_number = $row_orders['invoice_number'];
                // Format date using PHP date function
                $order_date = date('Y-m-d', strtotime($row_orders['order_date']));
                $estimated_delivery = date('Y-m-d', strtotime($row_orders['estimated_delivery']));
                $shipping_address = $row_orders['user_shipping_address'];
                $order_status = $row_orders['order_status'];

                $order_completed = ($order_status == 'Delivered') ? 'Complete' : 'Incomplete';

                echo "
                <tr>
                    <td>$order_id</td>
                    <td>$amount_due</td>
                    <td>$total_products</td>
                    <td>$invoice_number</td>
                    <td>$order_date</td>
                    <td>$estimated_delivery</td>
                    <td>$shipping_address</td>
                    <td>$order_completed</td>
                    <td>$order_status</td>
                </tr>
                ";
                $number++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>
