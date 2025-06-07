<?php
// Step 1: Create the Event class
class Event {
    // Attributes
    protected $name;
    protected $date;
    protected $location;

    // Constructor to initialize the event attributes
    public function __construct($name, $date, $location) {
        $this->name = $name;
        $this->date = $date;
        $this->location = $location;
    }

    // Method to display event details
    public function displayDetails() {
        echo "Event Name: " . $this->name . "<br>";
        echo "Date: " . $this->date . "<br>";
        echo "Location: " . $this->location . "<br>";
    }

    // Method to check for conflicts in the event schedule
    public function isConflict($otherEvent) {
        if ($this->date == $otherEvent->getDate() && $this->location == $otherEvent->getLocation()) {
            return true; // Conflict found
        }
        return false; // No conflict
    }

    // Getter for date and location to be used in conflict checking
    public function getDate() {
        return $this->date;
    }

    public function getLocation() {
        return $this->location;
    }
}

// Step 2: Create the Seminar subclass
class Seminar extends Event {
    // Attribute for number of speakers
    private $numberOfSpeakers;

    // Constructor to initialize event details and number of speakers
    public function __construct($name, $date, $location, $numberOfSpeakers) {
        parent::__construct($name, $date, $location); // Call the parent constructor
        $this->numberOfSpeakers = $numberOfSpeakers;
    }

    // Override the displayDetails method to include the number of speakers
    public function displayDetails() {
        parent::displayDetails(); // Call the parent displayDetails method
        echo "Number of Speakers: " . $this->numberOfSpeakers . "<br>";
    }
}

// Step 2: Create the MusicalPerformance subclass
class MusicalPerformance extends Event {
    // Attribute for performer list
    private $performerList = array();

    // Constructor to initialize event details and performer list
    public function __construct($name, $date, $location, $performerList) {
        parent::__construct($name, $date, $location); // Call the parent constructor
        $this->performerList = $performerList;
    }

    // Override the displayDetails method to include the performer list
    public function displayDetails() {
        parent::displayDetails(); // Call the parent displayDetails method
        echo "Performers: " . implode(", ", $this->performerList) . "<br>";
    }
}

// Example usage

// Create a Seminar object
$seminar = new Seminar("Tech Seminar", "2024-09-15", "Main Hall", 5);
$seminar->displayDetails();
echo "<br>";

// Create a MusicalPerformance object
$concert = new MusicalPerformance("Rock Concert", "2024-09-15", "Main Hall", ["Band A", "Band B"]);
$concert->displayDetails();
echo "<br>";

// Check for event conflict
if ($seminar->isConflict($concert)) {
    echo "Conflict: The Seminar and Concert are scheduled for the same date and location.<br>";
} else {
    echo "No conflict in the event schedule.<br>";
}
?>
