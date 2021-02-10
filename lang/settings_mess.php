<?php

if ($_COOKIE['language'] === 'ru') {
    $MESS['LANGUAGE_SELECTION'] = 'Выбор языка';
    $MESS['CHANGE_LANGUAGE_BUTTON'] = 'Применить';
} elseif ($_COOKIE['language'] === 'eng') {
    $MESS['LANGUAGE_SELECTION'] = 'Language selection';
    $MESS['CHANGE_LANGUAGE_BUTTON'] = 'Apply';
} else {
    $MESS['LANGUAGE_SELECTION'] = 'Вибір мови';
    $MESS['CHANGE_LANGUAGE_BUTTON'] = 'Застосувати';
}