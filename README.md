<!DOCTYPE html>
<html>
<head>
 <title>Моя форма</title>
 <style>
  input[type="text"], input[type="email"], input[type="tel"], textarea {
   width: 100%;
   padding: 12px;
   border: 1px solid #ccc;
   border-radius: 4px;
   box-sizing: border-box;
   margin-bottom: 16px;
  }

  label {
   font-weight: bold;
   display: block;
   margin-bottom: 8px;
  }

  button[type="submit"] {
   background-color: #4CAF50;
   color: white;
   padding: 12px 20px;
   border: none;
   border-radius: 4px;
   cursor: pointer;
  }

  button[type="submit"]:hover {
   background-color: #45a049;
  }
 </style>
</head>
<body>
 <h1>Моя форма</h1>
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
  <button type="submit">Отправить</button>
 </form>
</body>
</html>
<css>
html:before {
  content: "";
  display: block;
  height: 0;
}
</css>
