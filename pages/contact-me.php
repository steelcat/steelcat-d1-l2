<?php
/**
 * File: contact-me.php
 * Date: 20.01.2015
 * Time: 22:37
 */
?>
<div class="content contact-me">
    <h2>У вас интересный проект? Напишите мне</h2>
    <form action="mail.php" method="GET" is="ajaxform">
        <div class="name-mail">
            <div class="input">
                <label for="name">Имя <br></label>
                <input id="name" placeholder="Как к Вам обращаться" name="name" type="text">
            </div>
            <div class="input">
                <label for="email">Email <br></label>
                <input id="email" placeholder="Куда мне писать" name="email" type="email">
            </div>
        </div>
        <div class="textarea">
            <label for="message">Сообщение <br></label>
            <textarea placeholder="Кратко в чем суть" name="message" id="message"></textarea>
        </div>
        <div class="capture">
            <label for="captcha_image">Введите код, указанный на картинке </label>
            <img id="captcha_image" src="images/simple-php-captcha.png" alt="CAPTCHA Image" align="left"><br><input placeholder="Введите код" name="captcha_code" id="captcha_code" type="text"></div>
        <div class="buttons">
            <button type="submit">Отправить</button>
            <button type="reset">Очистить</button>
        </div>
    </form>
</div>