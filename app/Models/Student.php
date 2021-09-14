<?php

namespace App\Models;

class Student
{
    public $name;
    public $semester;
    public $age;

    function __construct(String $name, int $semester, int $age) {
        $this->name = $name;
        $this->semester = $semester;
        $this->age = $age;
    }

}
