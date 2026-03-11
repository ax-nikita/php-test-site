<?php include 'includes/header.php'; ?>
<h1>Контакты</h1>
<?php
$successMessage = "";
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Имя обязательно";
    } else {
        $name = htmlspecialchars($_POST["name"]);
        $successMessage = "Ваше сообщение успешно отправлено!";
    }

    if (empty($_POST["email"])) {
        $emailErr = "Электронная почта обязательна";
    } else {
        $email = htmlspecialchars($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Неверный формат электронной почты";
        }
    }

    if (empty($_POST["message"])) {
        $messageErr = "Сообщение обязательно";
    } else {
        $message = htmlspecialchars($_POST["message"]);
    }
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <?php if (!empty($successMessage)) { echo "<p>$successMessage</p>"; } ?>
<p>Свяжитесь с нами, заполнив форму ниже:</p>
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
    <span><?php echo $nameErr; ?></span>
    <label for="email">Электронная почта:</label>
    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
    <span><?php echo $emailErr; ?></span>
    <label for="message">Сообщение:</label>
    <textarea id="message" name="message" required><?php echo $message; ?></textarea>
    <span><?php echo $messageErr; ?></span>
    <input type="submit" value="Отправить">
</form>
<?php include 'includes/footer.php'; ?>
