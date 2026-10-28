<?php
session_start();
if (isset($_SESSION['orders'])) {
    $last = count($_SESSION['orders']) - 1;
    $_SESSION['orders'][$last]['status'] = "paid";
}
$current = $_SESSION['current_order'];
?>
<h2 style="color:green;">Order Paid - Payment Successful</h2>
<p>Order ID: <?php echo $current['id']; ?></p>
<p>Payment Status: SUCCESS</p>
<p>Your order has been confirmed and paid.</p>
<br>
<a href="order_history.php">View Order History</a> | 
<a href="checkout.php">Create New Order</a>
