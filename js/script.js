$(document).ready(function() {
    // Загрузка существующих данных при загрузке страницы
    $.ajax({
        url: 'src/load_data.php', // Отдельный PHP-файл для загрузки данных
        type: 'GET',
        success: function(response) {
            $('#dataTableBody').html(response);
        },
        error: function(xhr, status, error) {
            alert('Ошибка загрузки данных: ' + xhr.responseText);
        }
    });

    // Обработчик отправки формы
    $('#feedbackForm').on('submit', function(event) {
        event.preventDefault(); // Предотвращаем стандартную отправку формы

        $.ajax({
            url: 'src/submit_form.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#dataTableBody').html(response);
                $('#feedbackForm')[0].reset(); // Очистка формы
            },
            error: function(xhr, status, error) {
                alert('Произошла ошибка: ' + xhr.responseText);
            }
        });
    });
});
