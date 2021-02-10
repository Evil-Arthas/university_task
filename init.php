<?php
// Определение языка

switch ($_COOKIE['language']) {
    case 'ru':
        setcookie('language', 'ru');
        break;
    case 'eng':
        setcookie('language', 'eng');
        break;
    default:
        setcookie('language', 'ua');
        break;
}
var_dump($_COOKIE);