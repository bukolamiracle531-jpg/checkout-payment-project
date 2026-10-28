<?php session_start(); ?>
<h2>Order Management & Order History</h2>
<p>All orders created:</p>
<?php
if (!isset($_SESSION['orders']) || empty($_SESSION['orders'])) {
    echo "<p>No orders yet. <a href='checkout.php'>Create order</a></p>";
} else {
    foreach (array_reverse($_SESSION['orders']) as $o) {
        $color = $o['status'] == 'paid' ? 'green' : ($o['status'] == 'failed' ? 'red' : 'black');
        echo "<div style='border:1px solid #ccc;padding:10px;margin:8px;'>";
        echo "ID: {$o['id']}<br>";
        echo "Name: {$o['name']}<br>";
        echo "Amount: \${$o['amount']}<br>";
        echo "Status: <span style='color:$color;font-weight:bold;'>{$o['status']}</span><br>";
        echo "Date: {$o['date']}";
        echo "</div>";
    }
}
?>
<br><a href="checkout.php">Back to Checkout</a>
