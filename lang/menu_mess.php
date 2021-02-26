<?php

if ($_COOKIE['language'] === 'ru') {
    $MESS['MENU'] = 'Главная';
    $MESS['HELP'] = 'Помощь';
    $MESS['AUTHORS'] = 'Авторы';
} elseif ($_COOKIE['language'] === 'eng') {
    $MESS['MENU'] = 'Main';
    $MESS['HELP'] = 'Help';
    $MESS['AUTHORS'] = 'Authors';
} else {
    $MESS['MENU'] = 'Головна';
    $MESS['HELP'] = 'Допомога';
    $MESS['AUTHORS'] = 'Автори';
}