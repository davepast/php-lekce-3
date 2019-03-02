
<form method="POST">
    <p>Login:</p><input type="text" name="login">
    <br>
    <p>Password:</p><input type="password" name="password">
    <br>
    <input type="checkbox" name="checkbox">I agree with something
    <br>
    <input type="submit">
</form>

<?php
if (isset($_POST['login'])) {
    var_dump($_POST);
    echo 'Ahoj ' . $_POST['login'];
}
