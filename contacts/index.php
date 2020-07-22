<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>

    <link rel="shortcut icon" href="/favicon.png"/>
    <link rel="apple-touch-icon" href="/favicon.png">

    <title>Наши контакты</title>
    <meta name="apple-mobile-web-app-title" content="Наши контакты">
    <meta property="og:title" content="Наши контакты"/>

    <meta name="description" content="Смоленская обл., Смоленский район, д.Стабна, ул. Заозерная, д. 35 214550, Россия"/>
    <meta property="og:description" content="Смоленская обл., Смоленский район, д.Стабна, ул. Заозерная, д. 35 214550, Россия"/>

    <meta property="og:image" content="/logo.png"/>
    <meta property="og:site_name" content='Наши контакты'>
    <meta property="og:image:alt" content="Наши контакты"/>
    <meta property="og:type" content="website"/>
    <meta name="twitter:card" content="summary_large_image">

    <meta name="google-site-verification" content="9UjDXIBNZCgzFql89FYMgXJgyP2IfSbK5Pl-r4sUP3g"/>

    <link href="https://fonts.googleapis.com/css2?family=Arsenal:wght@400;700&family=Comfortaa:wght@300;400;700&family=Montserrat+Alternates:wght@200;400;500&family=Roboto:wght@300;400;500&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="/js/owlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/desc.css">
    <link rel="stylesheet" href="/css/sub_desc.css">
    <link rel="stylesheet" href="/css/tablet.css">
    <link rel="stylesheet" href="/css/mobile.css">
    <link rel="stylesheet" href="/css/mobile-small.css">

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
            async defer></script>
</head>
<body>
<div id="app" class="app">
    <!-- Header -->
    <?php
    include "../header.php";
    ?>

    <!-- Content -->
    <div class="content">
        <div id="contacts" class="section screen section-7">
            <div class="container">
                <h3>
                    Наши контакты<br>
                </h3>
                <p class="sub-title">ООО "Альфа Транс Безопасность"</p>

                <div class="contacts">
                    <div class="col-right">
                        <a href="#" class="icon icon-map-blue address">
                            Смоленская обл., Смоленский район, д. Стабна, ул. Заозёрная, д. 35<br>
                            214550, Россия
                        </a>
                        <br>
                        <br>
                        <br>
                        <p class="address text-center">
                            ИНН 6714031485, ОГРН 1106714001020
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="map-container" class="section section-8 map-container">
            <iframe id="map" src="https://snazzymaps.com/embed/233723" width="100%" height="100%" scrolling="no"
                    seamless="seamless"></iframe>
        </div>

        <div class="section section-9">
            <div class="container">
                <form id="form-stat" class="form form-stat">
                    <input type="hidden" name="form" value="stat">
                    <div class="form-group group-input">
                        <input name="nik" type="text" placeholder="Имя*" required>
                    </div>
                    <div class="form-group group-input">
                        <input name="theme" type="text" placeholder="Тема">
                    </div>
                    <div class="form-group group-input">
                        <input name="mail" type="email" placeholder="E-Mail*" required>
                    </div>
                    <div class="form-group group-textarea">
                        <textarea name="message" placeholder="Ваше сообщение*"></textarea>
                    </div>
                    <div class="form-group group-checkbox">
                        <label for="check-stat">
                            <input id="check-stat" name="check" type="checkbox" value="1" required>
                            <span>Я даю согласие на обработку моих персональных данных</span>
                        </label>
                    </div>

                    <div class="form-group group-captcha">
                        <div class="captcha">
                            <div id="my-captha"></div>
                        </div>
                    </div>

                    <div class="form-group group-buttons">
                        <span class="btn btn-gray">отмена</span>
                        <button id="submit" disabled="disabled" class="btn btn-red">отправить</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="section section-10">
            <div class="container">
                <h3>
                    Карьера в ООО "Альфа Транс Безопасность"
                </h3>

                <a target="_blank" href="http://alfa-trans.ru/" class="link">Хотите у нас работать?</a>

                <div class="row">
                    <div class="col-left">
                        <p>
                            Пожалуйста, отправьте резюме и
                            сопроводительное письмо по адресу:
                        </p>
                        <a href="mailto:jobs@sklad-at.ru" class="icon icon-mail-red mail">jobs@sklad-at.ru</a>
                    </div>
                    <div class="col-right">
                        <p>
                            или
                            позвоните нам по номеру:
                        </p>
                        <a href="tel:+79517157710" class="icon icon-tel-red tel"> +7 (920) <span
                                class="bold">310-89-00</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- app end -->

<?php
include "../footer.php";
?>

</body>
</html>

