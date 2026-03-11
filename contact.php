<?php include 'includes/header.php'; ?>
<h1>Контакты</h1>
<?php
<form action="contact.php" method="post">
    <?php if (!empty($successMessage)) { echo "<p>$successMessage</p>"; } ?>
<p>Свяжитесь с нами, заполнив форму ниже:</p>
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Электронная почта:</label>
    <input type="email" id="email" name="email" required>
    <label for="message">Сообщение:</label>
    <textarea id="message" name="message" required></textarea>
    <input type="submit" value="Отправить">
</form>
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
