<?php
// Abstract class Employee
abstract class Employee {
    // Private attributes for name and ID
    private $name;
    private $id;

    // Static counter for generating unique IDs
    private static $idCounter = 1;

    // Constructor to set the name and ID
    public function __construct($name) {
        $this->name = $name;
        $this->id = self::generateEmployeeID();
    }

    // Static method to generate a unique employee ID
    public static function generateEmployeeID() {
        return self::$idCounter++;
    }

    // Abstract method to calculate salary, to be implemented by subclasses
    abstract public function calculateSalary();

    // Getters for name and ID
    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    // Method to display employee details
    public function displayEmployeeDetails() {
        echo "Employee Name: " . $this->getName() . "<br>";
        echo "Employee ID:   " . $this->getId() . "<br>";
        echo "Salary: Rs." . $this->calculateSalary() . "<br>";
        echo "<br><br>";
    }
}

// FullTimeEmployee class
class FullTimeEmployee extends Employee {
    private $fixedSalary;

    public function __construct($name, $fixedSalary) {
        parent::__construct($name);
        $this->fixedSalary = $fixedSalary;
    }

    // Implement the abstract method to calculate salary
    public function calculateSalary() {
        return $this->fixedSalary;
    }
}

// PartTimeEmployee class
class PartTimeEmployee extends Employee {
    private $hourlyRate;
    private $hoursWorked;

    public function __construct($name, $hourlyRate, $hoursWorked) {
        parent::__construct($name);
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    // Implement the abstract method to calculate salary
    public function calculateSalary() {
        return $this->hourlyRate * $this->hoursWorked;
    }
}

// ContractEmployee class
class ContractEmployee extends Employee {
    private $projectRate;

    public function __construct($name, $projectRate) {
        parent::__construct($name);
        $this->projectRate = $projectRate;
    }

    // Implement the abstract method to calculate salary
    public function calculateSalary() {
        return $this->projectRate;
    }
}

// Demonstrate the usage of the abstract class and its subclasses

// Creating a FullTimeEmployee instance
$fullTimeEmployee = new FullTimeEmployee("Ram Maharjan", 50000);
$fullTimeEmployee->displayEmployeeDetails();

// Creating a PartTimeEmployee instance
$partTimeEmployee = new PartTimeEmployee("Shyam Thapa", 20, 120);
$partTimeEmployee->displayEmployeeDetails();

// Creating a ContractEmployee instance
$contractEmployee = new ContractEmployee("Hari Magar", 10000);
$contractEmployee->displayEmployeeDetails();
?>
