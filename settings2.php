<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link href="css/app.css" rel="stylesheet">
    <!--    <link rel="stylesheet" href="css/style.css">-->
</head>
<body>
<?php
//подключение языквого файла
require_once('init.php');
require_once('lang/index_mess.php');
require_once('lang/menu_mess.php');
?>
<div class="wrapper-box">
    <div class="hold-box">
        <div class="hold-box__header">
            <nav class="menu">
                <ul class="menu-list">
                    <li class="menu-list__item">
                        <a href="#" class="menu-list__link button-link"><?= $MESS['MENU'] ?></a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#" class="menu-list__link button-link"><?= $MESS['SETTINGS'] ?></a>
                    </li>

                    <li class="menu-list__item">
                        <a href="#" class="menu-list__link button-link"><?= $MESS['HELP'] ?></a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="hold-box__content">
            <div class="page-title">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, tempora.</span>
            </div>

            <div class="card-list">
                <h1 id="login-header"><?= $MESS['LANGUAGE_SELECTION'] ?></h1>

                <form id="login-form" action="<?= $_SERVER['PHP_SELF'] ?>">
                    <select class="crm-item-table-select" name="COMPANY_REQUISITE_1C">
                        <option value="ua">Українська мова</option>
                        <option value="ru">Русский язык</option>
                        <option value="eng">Англійська мова</option>
                    </select>
                    <br>
                    <br>
                    <br>
                    <input type="submit" value="Login" id="login-form-submit">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
