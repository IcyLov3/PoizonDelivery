<!DOCTYPE html>
<html>
<head>
 <title>Форма для доставки</title>
</head>
<body>
 <h1>Доставка</h1>
 <form action="submit-form.php" method="post">
  <label for="first_name">Имя:</label>
  <input type="text" id="first_name" name="first_name" required>
  <br>
  <label for="last_name">Фамилия:</label>
  <input type="text" id="last_name" name="last_name" required>
  <br>
  <label for="phone">Телефон:</label>
  <input type="tel" id="phone" name="phone" required>
  <br>
  <label for="address">Адрес:</label>
  <textarea id="address" name="address" required></textarea>
  <br>
  <input type="submit" value="Send form">
 </form>
</body>
</html>
