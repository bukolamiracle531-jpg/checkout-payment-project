# Checkout, Payment & Orders Developer - No.5

This project handles everything after customer finishes shopping.

## Built Features
- Checkout
- Order creation (Order class)
- Order management
- Order history
- Simulated payment (Payment class)
- Successful payment
- Failed payment
- Payment status

## Project Structure
All core files are inside `/checkout` folder:
- `Order.php` - handles order creation
- `Payment.php` - handles simulated payment
- `checkout.php` - customer checkout page
- `payment.php` - simulated payment page
- `payment_success.php` - successful payment
- `payment_failed.php` - failed payment
- `order_history.php` - order management & history

## Payment Flow
Cart -> Checkout -> Order Created -> Simulated Payment -> Success / Failed -> Order History

All payments are simulated/test payment - no real transaction.
