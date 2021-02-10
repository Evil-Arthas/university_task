<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>
<?php
//подключение языквого файла
require_once('lang/index_mess.php');
require_once('../../lang/menu_mess.php');
require_once('../../init.php');
//var_dump($_COOKIE);
?>
<div class="wrapper-box">
    <div class="hold-box">
        <div class="hold-box__header">
            <nav class="menu">
                <ul class="menu-list">
                    <li class="menu-list__item">
                        <a href="../../index.php" class="menu-list__link button-link"><?= $MESS['MENU'] ?></a>
                    </li>

                    <li class="menu-list__item">
                        <a href="../../settings.php" class="menu-list__link button-link"><?= $MESS['SETTINGS'] ?></a>
                    </li>

                    <li class="menu-list__item">
                        <a href="../../help.php" class="menu-list__link button-link"><?= $MESS['HELP'] ?></a>
                    </li>
                </ul>
            </nav>
        </div>

        <form class="hold-box__content">
            <div class="page-title">
                <span><?= $MESS['TITLE'] ?></span>
            </div>

            <form class="form-main" action="action.php" method="post">
                <div class="form-main__box">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                </div>

                <div class="form-main__box">
                    <div class="form-main__img">
                        <img src="" alt="">
                    </div>
                </div>

                <div class="form-main__box">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                    <input type="text" name="1" class="form-main__input">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
