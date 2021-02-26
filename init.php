<?php
// Определение языка
//var_dump($_COOKIE);
//var_dump($_COOKIE['language']);
if(!$_COOKIE['language']){
    setcookie('language','ua');
}




/*switch ($_COOKIE['language']) {
    case 'ru':
        $_COOKIE['language'] = 'ru';
        break;
    case 'eng':
        $_COOKIE['language'] = 'eng';
        break;
    default:
        $_COOKIE['language'] = 'ua';
        break;
}*/
//var_dump($_COOKIE);