<?php

class Person {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;  
    }

    public function introduce(): string {
        return "Hi, I'm {$this->name} and my age is {$this->age}.";
    }
}

// $person = new Person("Abhra", "20");
// echo $person->introduce();



// Inheritance
class Employee extends Person {
    public string $name;
    public int $age;
    public string $position;

    public function __construct(string $name, int $age, string $position) {
        $this->name = $name;
        $this->age = $age;  
        $this->position = $position;
    }
    
    // override
    public function introduce(): string {
        return parent::introduce() . " I'm currently a {$this->position}.";
    }
}

$emp = new Employee("Jerry", 20, "Developer");
echo $emp->introduce();