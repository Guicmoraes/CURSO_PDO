<?php
use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$host = 'localhost';
$dbname = 'pratica';
$user = 'dbseller';
$pass = 'halegria';

$dsn = "pgsql:host=$host;dbname=$dbname";
$pdo = new PDO($dsn, $user, $pass);

$student = new Student(null,'Vinicius', new DateTime(1997-10-15));

$sqlInsert = "INSERT INTO students(name, birth_date) VALUES('{$student->name()}','{$student->birthDate()->format('Y-m-d')}');";

$pdo->exec($sqlInsert);