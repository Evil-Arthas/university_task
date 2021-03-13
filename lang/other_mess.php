<?php

if ($_COOKIE['language'] === 'ru') {
    $MESS['BUTTON_SUBMIT'] = 'Отправить';
} elseif ($_COOKIE['language'] === 'eng') {
    $MESS['BUTTON_SUBMIT'] = 'Send';
} else {
    $MESS['BUTTON_SUBMIT'] = 'Надіслати';
}