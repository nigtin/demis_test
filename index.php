<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <h1 class="header__title">Главная страница</h1>
    </header>
    <main class="main">
        <section class="latest-news">
            <h2 class="latest-news__header">Последние новости</h2>
            <div class="latest-news__container">
                <?php include 'src/news_for_index.php'; ?>
            </div>
        </section>
        <div class="links">
            <a href="news.php" class="links__item">Все новости</a>
            <a href="form.php" class="links__item">Обратная связь</a>
        </div>
    </main>
</body>
</html>
