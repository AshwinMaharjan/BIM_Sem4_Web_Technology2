<?php
// Step 1: Create the Customer class
class Customer {
    // Attributes
    private $name;
    private $email;
    private $purchaseHistory = array();

    // Constructor to initialize the name and email
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    // Method to add a purchase to the purchase history
    public function addPurchase($amount) {
        $this->purchaseHistory[] = $amount;
    }

    // Method to calculate the total expenditure
    public function getTotalExpenditure() {
        return array_sum($this->purchaseHistory);
    }

    // Getter methods for name and email
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

// Step 2: Create the LoyalCustomer subclass
class LoyalCustomer extends Customer {
    // Attribute for discount rate
    private $discountRate;

    // Constructor to initialize name, email, and discount rate
    public function __construct($name, $email, $discountRate) {
        parent::__construct($name, $email); // Call the parent constructor
        $this->discountRate = $discountRate;
    }

    // Method to apply the discount to the total expenditure
    public function getDiscountedExpenditure() {
        $totalExpenditure = $this->getTotalExpenditure();
        $discount = $totalExpenditure * ($this->discountRate / 100);
        return $totalExpenditure - $discount;
    }

    // Getter method for discount rate
    public function getDiscountRate() {
        return $this->discountRate;
    }
}

// Example usage

// Create a Customer object
$customer = new Customer("Ram Thapa", "ram@example.com");
$customer->addPurchase(100);
$customer->addPurchase(50);

echo "Customer: " . $customer->getName() . "<br>";
echo "Email: " . $customer->getEmail() . "<br>";
echo "Total Expenditure: Rs." . $customer->getTotalExpenditure() . "<br><br>";

// Create a LoyalCustomer object
$loyalCustomer = new LoyalCustomer("Shyam Magar", "shyam@example.com", 10);
$loyalCustomer->addPurchase(200);
$loyalCustomer->addPurchase(150);

echo "Loyal Customer: " . $loyalCustomer->getName() . "<br>";
echo "Email: " . $loyalCustomer->getEmail() . "<br>";
echo "Total Expenditure: Rs." . $loyalCustomer->getTotalExpenditure() . "<br>";
echo "Discount Rate: " . $loyalCustomer->getDiscountRate() . "%<br>";
echo "Discounted Expenditure: Rs." . $loyalCustomer->getDiscountedExpenditure() . "<br>";
?>
