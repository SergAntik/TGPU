<?include_once ($_SERVER['DOCUMENT_ROOT'].'/core/config.php');?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Сайт чего-нибудь!</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<div id="wrapper">
    <header>
        <div class="logo"><img src="../logo.png"></div>
        <div class="name">Сайт чего-нибудь!</div>
        <div class="info">
            <div class="info-block">
                <span class="info-address">Адрес: г. Москва, д. 42, кв. 322</span>
                <span class="info-phone"> Телефон: +7 (111) 123-45-67</span>
                <span class="info-email">Email: example@example.com</span>
            </div>
        </div>
        <div class="burger">
            <img src="../menu.png" alt="menu">
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="#">Каталог</a>
            <li><a href="#"  class="active">Доставка</a>
            <li><a href="#">Оплата</a>
            <li><a href="#">О нас</a>
        </ul>
    </nav>
    <div class="workarea">
        <aside id="catalog" class="fill">
            Фильтр
        </aside>
        <section id="content" class="fill">