<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/settings.css" rel="stylesheet">

</head>
<body>
<?
//подключение языквого файла
if ($_POST['COMPANY_REQUISITE_1C']) {
    setcookie('language', $_POST['COMPANY_REQUISITE_1C']);
    Header('Location: '.$_SERVER['PHP_SELF']);
    exit(); //optional

}
require_once('init.php');
require_once('lang/settings_mess.php');
require_once('lang/menu_mess.php');
?>
<main>
    <div class="hold-box__header">
        <nav class="menu">
            <ul class="menu-list">
                <li class="menu-list__item">
                    <a href="index.php" class="menu-list__link button-link"><?= $MESS['MENU'] ?></a>
                </li>

                <li class="menu-list__item">
                    <a href="./settings.php" class="menu-list__link button-link"><?= $MESS['SETTINGS'] ?></a>
                </li>

                <li class="menu-list__item">
                    <a href="help.php" class="menu-list__link button-link"><?= $MESS['HELP'] ?></a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="hold-box__content">
        <div class="page-title">
            <span><?= $MESS['LANGUAGE_SELECTION'] ?></span>
        </div>
        <div id="main-holder" class="main-holder">

            <form class="main-holder" id="login-form" method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
                <select class="crm-item-table-select" name="COMPANY_REQUISITE_1C">
                    <option <?
                    if ($_COOKIE['language'] == 'ua') {
                        echo 'selected';
                    } ?> value="ua">Українська мова
                    </option>
                    <option <?
                    if ($_COOKIE['language'] == 'ru') {
                        echo 'selected';
                    } ?> value="ru">Русский язык
                    </option>
                    <option <?
                    if ($_COOKIE['language'] == 'eng') {
                        echo 'selected';
                    } ?> value="eng">English language
                    </option>
                </select>
                <br>
                <br>
                <br>
                <input class="submit" type="submit" value="<?= $MESS['CHANGE_LANGUAGE_BUTTON'] ?>"
                       id="login-form-submit">
            </form>
        </div>
    </div>
</main>
</body>

</html>