<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link href="../../css/app.css" rel="stylesheet">
    <link href="../../css/chart.css" rel="stylesheet">
    <link href="../../css/language_selector.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="js/graphics.js"></script>
    <script src="../../js/language.js"></script>
</head>
<body>
<?php
//подключение языквого файла
require_once('lang/index_mess.php');
require_once('../../lang/menu_mess.php');
require_once('../../lang/other_mess.php');
require_once('../../init.php');
/**
 * @var $MESS array
 */
?>
<div class="wrapper-box">
    <div class="hold-box">
        <div class="hold-box__header">
            <div class="logo logo-image">
                <div class="logo-image">
                    <a href="https://www.kname.edu.ua/index.php" title="Официальный сайт ХНУГХ" target="_blank">
                        <img class="logo-img" src="../../img/logo.png" alt="Официальный сайт ХНУГХ">
                    </a>
                </div>
            </div>
            <nav class="menu">
                <ul class="menu-list">
                    <li class="menu-list__item">
                        <a href="../../index.php" class="menu-list__link button-link"><?= $MESS['MENU'] ?></a>
                    </li>

                    <li class="menu-list__item">
                        <a href="../../authors.php" class="menu-list__link button-link"><?= $MESS['AUTHORS'] ?></a>
                    </li>

                    <li class="menu-list__item">
                        <a href="../../help.php" class="menu-list__link button-link"><?= $MESS['HELP'] ?></a>
                    </li>
                </ul>
            </nav>
            <div class="dropdown">
                <div class="language language_<?= $_COOKIE['language'] ?> dropbtn"><?= strtoupper($_COOKIE['language']) ?></div>
                <div class="dropdown-content">
                    <a id="ua-select" class="ua-selector" href="#">Українська</a>
                    <a id="eng-select" class="eng-selector" href="#">English</a>
                </div>
            </div>
        </div>

        <div class="hold-box__content hold-box__content_w1">
            <div class="page-title">
                <span><?= $MESS['TITLE'] ?></span>
            </div>

            <form class="form-main" action="#">
                <div class="form-main__box" form-input-values>
                    <input type="text" name="G1" class="form-main__input" placeholder="Voltage G1, U1 kV">
                    <input type="text" name="G2" class="form-main__input" placeholder="Voltage G2, U2 kV">
                    <input type="text" name="delta" class="form-main__input" placeholder="Angle delta, degr">
                    <input type="text" name="RT1" class="form-main__input" placeholder="Transformer T1, RT1">
                    <input type="text" name="XT1" class="form-main__input" placeholder="Transformer T1, XT1">
                    <input type="text" name="RT2" class="form-main__input" placeholder="Transformer T2, RT2"">
                    <input type="text" name="XT2" class="form-main__input" placeholder="Transformer T2, XT2"">
                    <input type="text" name="RL" class="form-main__input" placeholder="Line, RL">
                    <input type="text" name="XL" class="form-main__input" placeholder="Line, XL">
                    <input type="text" name="BL" class="form-main__input" placeholder="Line, BL">
                </div>

                <div class="form-main__box">
                    <div class="errors"></div>
                    <div class="success"></div>
                    <div class="form-main__img">
                        <img src="../../img/lab1.jpg" alt="">
                    </div>
                    <br>
                    <div class="form-main__img">
                        <img src="../../img/lab1_1.png" alt="">
                    </div>
                    <div class="chartDiv">
                        <div class="chart">
                            <canvas id="myChart" width="100" height="100"></canvas>
                        </div>
                    </div>
                </div>

                <div class="form-main__box">
                    <p class="form-main__input">Angle delta, degr: </p>
                    <p class="form-main__input">Current I1, A: </p>
                    <p class="form-main__input">Current I2, A: </p>
                    <p class="form-main__input">Active power P1, kW: </p>
                    <p class="form-main__input">Active power P2, kW: </p>
                    <p class="form-main__input">Reactive power Q1, kvar: </p>
                    <p class="form-main__input">Reactive power Q2, kvar: </p>
                </div>

                <div class="form-main__button">
                    <input submit-batton-lib-1 type="button" value="<?php echo $MESS["BUTTON_SUBMIT"]?>"/>
                </div>
            </form>
        </div>
    </div>
</div>
<br>
<br>
<div class="chart">
    <canvas id="myChart" width="100" height="100"></canvas>
</div>
<script src="../../js/main.js"></script>
</body>
</html>



