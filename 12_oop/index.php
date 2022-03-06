<?php

// What is class and instance
//class : blue print instance: variable to that class

// $per =  new Person();
// $per->name = "Masrura";
// $per->surname = "Uddin";
require_once 'Person.php';
require_once 'Student.php';

// $p =  new Person('Masrura', 'Anni');



// echo '<pre>';
// var_dump($p);
// echo '<pre>';

// $p2 =  new Person('redmi', 'phone');



// echo '<pre>';
// var_dump($p2);
// echo '<pre>';


// echo 'counter is'.Person::getCounter();
// Create Person class in Person.php

// Create instance of Person

// Using setter and getter

//Inheritance

$student = new Student('Uddin','Masrura','1234');
echo '<pre>';
var_dump($student);
echo '</pre>';