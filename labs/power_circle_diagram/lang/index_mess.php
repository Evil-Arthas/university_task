<?php
if ($_COOKIE['language'] === 'ru')
{
    $MESS['TITLE'] = 'Лабораторная работа №1 "Схема силового круга"';
}
elseif ($_COOKIE['language'] === 'eng')
{
    $MESS['TITLE'] = 'Laboratory work №1 "Power cicle diagram';
}
else
{
    $MESS['TITLE'] = 'Лабораторна робота №1 "Схема силового кола"';
}