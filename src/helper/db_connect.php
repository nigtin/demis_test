<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'feedback_db';

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die('Ошибка соединения с базой данных.');
}
?>
