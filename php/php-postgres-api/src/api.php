<?php
header('Content-Type: application/json');

$dsn = 'pgsql:host=db;port=5432;dbname=til_db;';
$username = 'postgres'; // PostgreSQLのユーザー名
$password = 'example'; // PostgreSQLのパスワード

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query('SELECT id, name, email FROM users');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($users);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}

?>
