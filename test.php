<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="graphics.js"></script>
</head>
<body>
<?
//подключение языквого файла
require_once('init.php');
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
    <canvas id="myChart" width="534" height="822"></canvas>
</main>
</body>

</html>