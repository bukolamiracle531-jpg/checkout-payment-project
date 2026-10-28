<?php
session_start();
if (isset($_SESSION['orders'])) {
    $last = count($_SESSION['orders']) - 1;
    $_SESSION['orders'][$last]['status'] = "failed";
}
$current = $_SESSION['current_order'];
?>
<h2 style="color:red;">Payment Failed</h2>
<p>Order ID: <?php echo $current['id']; ?></p>
<p>Payment Status: FAILED</p>
<p>Reason: Simulated failure - Card declined / Insufficient funds</p>
<p>This demonstrates failed operation as required.</p>
<br>
<a href="payment.php">Try Payment Again</a> | 
<a href="checkout.php">Back to Checkout</a> | 
<a href="order_history.php">Order History</a>
