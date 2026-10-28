<?php
class Payment {
    public $orderId;
    public $method = "Simulated Test Payment";

    public function __construct($orderId) {
        $this->orderId = $orderId;
    }

    public function processPayment($success = true) {
        if ($success) {
            return ["status" => "success", "message" => "Payment successful"];
        } else {
            return ["status" => "failed", "message" => "Payment failed"];
        }
    }

    public function getPaymentStatus() {
        return "Payment Status: Simulated/Test Payment - No real money transaction";
    }
}
?>
