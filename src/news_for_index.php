<?php
include 'helper/db_connect.php';

$sql = "SELECT title, content, publication_date FROM news ORDER BY publication_date DESC LIMIT 3";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

// Генерация HTML-кода для новостей
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Получение первого предложения из текста новости
        $delimiters = '.!?';
        $pos = strcspn($row['content'], $delimiters);
        $firstSentence = substr($row['content'], 0, $pos + 1);
        // Убираем пробелы в начале
        $firstSentence = trim($firstSentence);
        
        echo '<div class="latest-news__item">';
        echo '<h2 class="latest-news__title">' . htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8') . '</h2>';
        echo '<p class="latest-news__date">' . htmlspecialchars($row['publication_date'], ENT_QUOTES, 'UTF-8') . '</p>';
        echo '<p class="latest-news__content">' . htmlspecialchars($firstSentence, ENT_QUOTES, 'UTF-8') . '</p>';
        echo '</div>';
    }
} else {
    echo '<p class="news__no-items">Нет новостей для отображения.</p>';
}

$stmt->close();
$conn->close();
?>
