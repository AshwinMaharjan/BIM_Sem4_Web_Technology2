<?php
// Step 1: Define the Vehicle interface
interface Vehicle {
    public function displayInfo();
    public function calculateMaintenanceCost();
}

// Step 2: Create the Car class that implements the Vehicle interface
class Car implements Vehicle {
    private $make;
    private $model;
    private $year;

    // Constructor to initialize car details
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to display car details
    public function displayInfo() {
        echo "Car Make: " . $this->make . "<br>";
        echo "Car Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }

    // Method to calculate and return the maintenance cost
    public function calculateMaintenanceCost() {
        return 500; // Fixed cost per year for cars
    }
}

// Step 2: Create the Truck class that implements the Vehicle interface
class Truck implements Vehicle {
    private $make;
    private $model;
    private $year;
    private $kilometersDriven;

    // Constructor to initialize truck details
    public function __construct($make, $model, $year, $kilometersDriven) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->kilometersDriven = $kilometersDriven;
    }

    // Method to display truck details
    public function displayInfo() {
        echo "Truck Make: " . $this->make . "<br>";
        echo "Truck Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "Kilometers Driven: " . $this->kilometersDriven . " km<br>";
    }

    // Method to calculate and return the maintenance cost
    public function calculateMaintenanceCost() {
        $baseCost = 800; // Fixed cost per year for trucks
        $additionalCost = ($this->kilometersDriven / 10000) * 100; // $100 for every 10,000 km
        return $baseCost + $additionalCost;
    }
}

// Step 3: Test the implementation

// Create a Car object
$car = new Car("Toyota", "Camry", 2021);
$car->displayInfo();
echo "Car Maintenance Cost: Rs." . $car->calculateMaintenanceCost() . "<br><br>";

// Create a Truck object
$truck = new Truck("Ford", "F-150", 2020, 25000);
$truck->displayInfo();
echo "Truck Maintenance Cost: Rs." . $truck->calculateMaintenanceCost() . "<br>";
?>
