<?php

interface logger {
    public function log(string $message): void;
}

trait Loggable {
    public function log(string $message): void {
        echo "Log: $message\n";
    }
}

class User implements logger {
    use Loggable;

    public function __construct(public string $name) {}


    public function save(): void {
        $this->log("User {$this->name} saved");
    }
}

$user = new User("Abhra");
$user->save();