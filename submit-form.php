const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
  event.preventDefault(); // Отменяем стандартное поведение отправки формы

  // Получаем данные формы
  const formData = new FormData(form);

  // Отправляем данные формы на сервер с помощью AJAX-запроса
  fetch('submit-form.php', {
    method: 'POST',
    body: formData
  })
  .then(response => {
    if (response.ok) {
      alert('Ваше сообщение успешно отправлено!');
      form.reset(); // Очищаем форму после успешной отправки
    } else {
      alert('Произошла ошибка при отправке сообщения.');
    }
  })
  .catch(error => {
    alert('Произошла ошибка при отправке сообщения: ' + error.message);
  });
});
