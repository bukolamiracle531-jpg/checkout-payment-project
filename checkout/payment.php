<?php
session_start();
require_once "Order.php";

if ($_POST) {
    $order = new Order($_POST['fullname'], $_POST['email'], $_POST['amount']);
    $order->createOrder();
}

$current = $_SESSION['current_order'];
require_once "Payment.php";
$pay = new Payment($current['id']);
?>
<h2>Simulated Payment</h2>
<p><b>Order ID:</b> <?php echo $current['id']; ?></p>
<p><b>Amount:</b> $<?php echo $current['amount']; ?></p>
<p><?php echo $pay->getPaymentStatus(); ?></p>
<hr>
<h3>DEMO: Demonstrate both success and failed payment</h3>
<form action="payment_success.php" method="POST">
<button type="submit" style="background:green;color:white;padding:12px;width:250px;">Simulate SUCCESSFUL Payment</button>
</form>
<br>
<form action="payment_failed.php" method="POST">
<button type="submit" style="background:red;color:white;padding:12px;width:250px;">Simulate FAILED Payment</button>
</form>
