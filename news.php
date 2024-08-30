<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости</title>
    <link rel="stylesheet" href="css/news.css">
</head>
<body>
    <header class="header">
        <h1 class="header__title">Новости</h1>
    </header>
    <main class="main">
        <section class="news">
            <div class="news__container">
                <?php include 'src/fetch_news.php'; ?>
            </div>
        </section>
    </main>
</body>
</html>
