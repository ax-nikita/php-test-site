<?php include 'includes/header.php'; ?>
<h1>Контакты</h1>
<form action="submit_contact.php" method="post">
<p>Свяжитесь с нами, заполнив форму ниже:</p>
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Электронная почта:</label>
    <input type="email" id="email" name="email" required>
    <input type="submit" value="Отправить">
</form>
<?php include 'includes/footer.php'; ?>
