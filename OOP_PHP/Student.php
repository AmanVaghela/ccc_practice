<?php
 class Student {
    public $name;
    public $age;
    public $grade;

    public function displayInfo() {
        echo "Name: $this->name, Age: $this->age, Grade: $this->grade";
    }
}

// Example Usage:
$student = new Student();
$student->name = "John";
$student->age = 18;
$student->grade = "A";
$student->displayInfo();

?>