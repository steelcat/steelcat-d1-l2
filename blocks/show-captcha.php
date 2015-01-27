<?php
session_start();
include("../libraries/simple-php-captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
echo ('<img src='.$_SESSION['captcha']['image_src'].'>');