<?php
require('config/config.php');
?>
<!Doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title> Название сайта </title>
    <meta name="description" content="Привет">
    <meta name+"keywords" content="ключевые слова">
    <link href="media/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="media/css/style.css" rel="stylesheet"/>
</head>
<body>
<div class="header">
    <img src="media/img/logo.png" class="logo" height="200px" />
    <h1 class="logotext"> Название сайта</h1>
</div>
<div class="menu">
    <a href="/">Главная</a>
    <a href="/static.php?url=about">О компании</a>
    <a href="/catalog.php">Каталог</a>
    <a href="/static.php?url=delivery">Доставка</a>
    <a href="/static.php?url=payments">Оплата</a>
    <a href="#">Программа лояльности</a>
    <a href="/static.php?url=contacts">Контакты</a>
    <a href="/register.php">Регистрация</a>
</div>
<div class="container mycontent">
    <div class="row">
        <div class="col-2">
            <div class="d-grid gap-2">
                <a class="btn btn-primary" type="button">Button</a>
                <a class="btn btn-primary" type="button">Button</a>
            </div>
        </div>
        <div class="col">