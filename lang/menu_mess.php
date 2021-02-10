<?php

if ($_COOKIE['language'] === 'ru') {
    $MESS['MENU'] = 'Меню';
    $MESS['SETTINGS'] = 'Настройки';
    $MESS['HELP'] = 'Помощь';
} elseif ($_COOKIE['language'] === 'eng') {
    $MESS['MENU'] = 'Menu';
    $MESS['SETTINGS'] = 'Settings';
    $MESS['HELP'] = 'Help';
} else {
    $MESS['MENU'] = 'Меню';
    $MESS['SETTINGS'] = 'Налаштування';
    $MESS['HELP'] = 'Допомога';
}