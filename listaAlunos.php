<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$host = 'localhost';
$dbname = 'pratica';
$user = 'dbseller';
$pass = 'halegria';

$dsn = "pgsql:host=$host;dbname=$dbname";
$pdo = new PDO($dsn, $user, $pass);


$statement = $pdo->query('SELECT * FROM students;');
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach($studentDataList as $studentData){
    $date = date_create($studentData['birth_date']);
    echo date_format($date,'d/m/Y');
    $studentList[]= new Student($studentData['id'],$studentData['name'],$date);
}
var_dump($studentList);