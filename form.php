<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <!-- Форма -->
    <div class="feedback-form">
        <form class="form" id="feedbackForm">
            <h2 class="form__title">Форма обратной связи</h2>
            
            <div class="form__field form__field--required">
                <label for="fio" class="form__label">ФИО</label>
                <input type="text" id="fio" name="fio" class="form__input" required>
            </div>

            <div class="form__field form__field--required">
                <label for="address" class="form__label">Адрес</label>
                <input type="text" id="address" name="address" class="form__input" required>
            </div>

            <div class="form__field form__field--required">
                <label for="phone" class="form__label">Телефон</label>
                <input type="tel" id="phone" name="phone" class="form__input" required pattern="\+?\d[\d\s]{9,14}">
            </div>

            <div class="form__field form__field--required">
                <label for="email" class="form__label">E-mail</label>
                <input type="email" id="email" name="email" class="form__input" required>
            </div>

            <button type="submit" class="form__submit">Отправить</button>
        </form>

    </div>

    <!-- Вывод таблицы -->
    <div class="data-table">
        <table class="data-table__table" id="dataTable">

            
            <tbody id="dataTableBody">
                <!-- Данные будут добавлены здесь -->
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
