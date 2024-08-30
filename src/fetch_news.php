<?php
include 'helper/db_connect.php';

$sql = "SELECT title, content, publication_date FROM news ORDER BY publication_date DESC LIMIT 5";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

// Генерация HTML-кода для новостей
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="news-item">';
        echo '<h2 class="news-item__title">' . htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8') . '</h2>';
        echo '<p class="news-item__content">' . htmlspecialchars($row['content'], ENT_QUOTES, 'UTF-8') . '</p>';
        echo '<p class="news-item__date">' . htmlspecialchars($row['publication_date'], ENT_QUOTES, 'UTF-8') . '</p>';
        echo '</div>';
    }
} else {
    echo '<p class="news__no-items">Новости не найдены.</p>';
}


$stmt->close();
$conn->close();
?>
