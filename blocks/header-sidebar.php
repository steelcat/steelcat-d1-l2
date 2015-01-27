<?php
/**
 * File: header-sidebar.php
 * Date: 20.01.2015
 * Time: 21:08
 */

function get_header($slug) {
    $titles = array(
        "/" => "Обо мне",
        "my-works" => "Мои работы",
        "contact-me" => "Связаться со мной"
    );
    echo '<!DOCTYPE html>
    <html>
    <head lang="ru">
        <meta charset="UTF-8">
        <title>'. $titles[$slug] .'</title>
        <link type="text/css" rel="stylesheet" media="all" href="css/style.css">
        <!--[if lt IE 9]>
        <script src="js/html5shiv/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="wrap">
            <header>
                <div class="header-container">
                    <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
                    <div class="social">
                        <a href="https://vk.com/steelcat"><i class="icon-vk"></i></a>
                        <a href=""><i class="icon-twitter"></i></a>
                        <a href=""><i class="icon-facebook"></i></a>
                        <a href=""><i class="icon-github"></i></a>
                    </div>
                </div>
            </header>
            <main class="container main">';
}
function get_sidebar($slug) {
    $urls = array(
        "0" => "/",
        "1" => "my-works",
        "2" => "contact-me"
    );
    $names = array (
        "0" => "Обо мне",
        "1" => "Мои работы",
        "2" => "Связаться со мной"
    );
    echo '<div class="sidebar">
                <nav class="sidebar-menu">
                    <ul class="nav">';

                        for ($i=0; $i <= count($urls)-1; $i++) {
                            echo '<li';
                            $url = $urls{$i};
                            if ($slug === $url) { echo ' class="active"'; }
                            echo '><a ';
                            echo 'href="'.$urls[$i].'">'.$names[$i].'</a></li>';
                        };

echo '
                    </ul>
                </nav>
                <div class="contacts">
                    <h2>Контакты</h2>
                    <div class="mail"><i class="icon-mail"></i>me@steelcat.org</div>
                    <div class="phone"><i class="icon-phone"></i>+79618115054</div>
                    <div class="skype"><i class="icon-skype"></i>live:vitalyshutov</div>
                </div>
            </div>';
}