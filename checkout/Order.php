<?php
class Order {
    public $id;
    public $customerName;
    public $email;
    public $amount;
    public $status;

    public function __construct($name, $email, $amount) {
        $this->id = uniqid("ORD_");
        $this->customerName = $name;
        $this->email = $email;
        $this->amount = $amount;
        $this->status = "created";
    }

    public function createOrder() {
        if (session_status() == PHP_SESSION_NONE) session_start();
        $data = [
            'id' => $this->id,
            'name' => $this->customerName,
            'email' => $this->email,
            'amount' => $this->amount,
            'status' => $this->status,
            'date' => date('Y-m-d H:i:s')
        ];
        $_SESSION['orders'][] = $data;
        $_SESSION['current_order'] = $data;
        return $data;
    }
}
?>
