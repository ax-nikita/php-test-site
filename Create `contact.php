<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Контакты</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <h1>Контакты</h1>
    <form method="post" action="">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Сообщение:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit">Отправить</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {
            echo "<p>Спасибо, $name! Ваше сообщение отправлено.</p>";
        } else {
            echo "<p>Пожалуйста, заполните все поля корректно.</p>";
        }
    }
    ?>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
