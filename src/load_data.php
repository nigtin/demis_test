<?php
include 'helper/db_connect.php';
include 'helper/generate_table.php';

$result = $conn->query("SELECT COUNT(*) AS count FROM feedback");

// Получение количества записей
$row = $result->fetch_assoc();
$dataCount = $row['count'];

// Если есть данные, создаем таблицу
if ($dataCount > 0) {
    echo generateTable($conn);
}


$conn->close();
?>
