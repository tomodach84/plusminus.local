<?php

echo <<<HTML

<div>
    <form name="registration" action="/signup" method="post">
        <p><label>Введите Ваше имя: <input type="text" name="username" required></label></p>
        <p><label>Введите пароль: <input type="password" name="userpass" placeholder="от 6 до 20 символов" minlength="6" maxlength="20"></label></p>
        <p><label>Введите дату рождения: <input type="date" name="userbirthday"></label></p>
        <p><label>Введите e-mail: <input type="email" name="useremail"></label></p>
        <p><input type="submit" name="usersubmit" value="Зарегистрироваться"></p>
    </form>
    <p><a href="/">На главную страницу</a></p>
</div>

HTML;
