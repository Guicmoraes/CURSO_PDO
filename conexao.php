<?php
$host = 'localhost';
$dbname = 'pratica';
$user = 'dbseller';
$pass = 'halegria';

try {
    $dsn = "pgsql:host=$host;dbname=$dbname";
    $pdo = new PDO($dsn, $user, $pass);

    // Define o modo de erro para lançar exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Define o modo de recuperação padrão
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Desativa a emulação de declarações preparadas
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}


$pdo->exec('CREATE TABLE IF NOT EXISTS students
                  (id SERIAL PRIMARY KEY
                  ,name VARCHAR(20)
                  , birth_date DATE
    );');
?>