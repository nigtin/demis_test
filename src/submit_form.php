<?php
include 'helper/db_connect.php';
include 'helper/generate_table.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из формы
    $fio = trim($_POST['fio']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);

    // Проверка обязательных полей
    if (empty($fio) || empty($phone) || empty($address) || !$email) {
        echo "<script>
                alert('Неверно введенные данные');
                window.location.href = 'index.php';
              </script>";
        exit;
    }

    // Подготовка и выполнение запроса
    $stmt = $conn->prepare("INSERT INTO feedback (fio, address, phone, email, request_time) VALUES (?, ?, ?, ?, NOW())");
    if ($stmt) {
        $stmt->bind_param("ssss", $fio, $address, $phone, $email);

        if ($stmt->execute()) {
            echo generateTable($conn);
        } else {
            echo 'Ошибка при сохранении данных.';
        }

        $stmt->close();
    } else {
        echo 'Ошибка подготовки запроса.';
    }

    $conn->close();
}
?>
