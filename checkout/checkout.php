<?php session_start(); ?>
<h2>Checkout</h2>
<p>Cart → Checkout (Step 1)</p>
<form action="payment.php" method="POST">
Full Name:<br><input type="text" name="fullname" required><br><br>
Email:<br><input type="email" name="email" required><br><br>
Shipping Address:<br><input type="text" name="address" required><br><br>
Order Amount:<br><input type="text" name="amount" value="19.99" readonly><br><br>
<button type="submit">Create Order & Proceed to Payment</button>
</form>
<br><a href="order_history.php">View Order History / Management</a>
