<?php
include 'Person.php';
include 'Male.php';
include 'Female.php';
include 'Children.php';
$person = new Person('Nam', 21, 'HaNoi');
$person->showInfo();
echo '<br>';
$male = new Male('Son', 18, 'NamDinh', 'ngonzai');
$male->showInfo();
$male->makeUp();
echo '<br>';
$student = new Children('Truong', 12, 'Campuchia', 'menly');
$student->showInfo();
$student->makeUp();
echo '<br>';