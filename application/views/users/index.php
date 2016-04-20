<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/levels.css">

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jparallax.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#parallax').jparallax();
        });
    </script>

    <style media="screen">
        @-webkit-keyframes anim {
            0% {
                -webkit-transform: rotateY(0deg) rotateZ(0deg);
                transform: rotateY(0deg) rotateZ(0deg);
            }
            100% {
                -webkit-transform: rotateY(360deg) rotateZ(360deg);
                transform: rotateY(360deg) rotateZ(360deg);
            }
        }

        @keyframes anim {
            0% {
                -webkit-transform: rotateY(0deg) rotateZ(0deg);
                transform: rotateY(0deg) rotateZ(0deg);
            }
            100% {
                -webkit-transform: rotateY(360deg) rotateZ(360deg);
                transform: rotateY(360deg) rotateZ(360deg);
            }
        }

        .shape0 {
            width: 50px;
            height: 50px;
            border-radius: 90px;
            -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            background-color: #fff;
            position: absolute;
            top: 50%;
            left: 47%;
            -webkit-animation: anim 2s linear 0s infinite;
            animation: anim 2s linear 0s infinite;
        }

        .shape1 {
            width: 50px;
            height: 50px;
            border-radius: 90px;
            -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            background-color: #fff;
            position: absolute;
            top: 50%;
            left: 47%;
            -webkit-animation: anim 2s linear 0.1s infinite;
            animation: anim 2s linear 0.1s infinite;
        }

        .shape2 {
            width: 50px;
            height: 50px;
            border-radius: 90px;
            -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            background-color: #fff;
            position: absolute;
            top: 50%;
            left: 47%;
            -webkit-animation: anim 2s linear 0.2s infinite;
            animation: anim 2s linear 0.2s infinite;
        }

        .shape3 {
            width: 50px;
            height: 50px;
            border-radius: 90px;
            -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            background-color: #fff;
            position: absolute;
            top: 50%;
            left: 47%;
            -webkit-animation: anim 2s linear 0.3s infinite;
            animation: anim 2s linear 0.3s infinite;
        }

        .shape4 {
            width: 50px;
            height: 50px;
            border-radius: 90px;
            -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            background-color: #fff;
            position: absolute;
            top: 50%;
            left: 47%;
            -webkit-animation: anim 2s linear 0.4s infinite;
            animation: anim 2s linear 0.4s infinite;
        }

        .shape5 {
            width: 50px;
            height: 50px;
            border-radius: 90px;
            -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            background-color: #fff;
            position: absolute;
            top: 50%;
            left: 47%;
            -webkit-animation: anim 2s linear 0.5s infinite;
            animation: anim 2s linear 0.5s infinite;
        }

        .wrapper {
            position: absolute;
            margin: 80px 0 0 80px;
            -webkit-filter: url("#filter");
            filter: url("#filter");
        }

        svg {
            height: 0;
        }
    </style>

</head>

<body>

<div class="wrapper">
    <div class="shape0"></div>
    <div class="shape1"></div>
    <div class="shape2"></div>
    <div class="shape3"></div>
    <div class="shape4"></div>
    <div class="shape5"></div>
</div>

<svg>
    <defs>
        <filter id="filter">
            <feGaussianBlur in="SourceGraphic" stdDeviation="18" result="blur"/>
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 25 -10"
                           result="filter"/>
            <feComposite in="SourceGraphic" in2="filter" operator="atop"/>
        </filter>
    </defs>
</svg>

<h1 class="name"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png"
                                                          alt=""></a></h1>
<header>
    <nav>
        <ul>
            <li>
                <<a href="<?php if ((isset($_SESSION['username'])) && (!empty($_SESSION['username']))) echo site_url('users/' . $_SESSION['username']); ?>">
                    <?php if ((isset($_SESSION['username'])) && (!empty($_SESSION['username']))) echo ucfirst($_SESSION['username']); ?>
                </a></li>
            <?php if ((isset($_SESSION['username'])) && (!empty($_SESSION['username']))) echo "<li><a href=" . site_url('home/logout') . '>Logout</a>' ?>
        </ul>
    </nav>
</header>

<div class="highscore">
    <h1>Highscore Level 1</h1>
    <div class="inner">
        <?php
        foreach ($users as $users_details): ?>

            <h2><?php echo $users_details['score']; ?></h2>
            <p class="main"><a
                    href="<?php echo site_url('users/' . $users_details['username']); ?>"><?php echo $users_details['username']; ?></a>
            </p>


        <?php endforeach; ?>
    </div>
</div>
<a href="<?php echo site_url(); ?>assets/game.php">
    <button type="button" name="button">Continue</button>
</a>
<div class="bck">
    <img src="<?php echo base_url(); ?>assets/img/bck-levels.png" alt=""/>
    <img src="<?php echo base_url(); ?>assets/img/bck-levels01.png" alt=""/>
</div>
<div class="levels">
    <a href="<?php echo base_url(); ?>assets/game.php">
        <div class="level1">
            <img src="<?php echo base_url(); ?>assets/img/level1-text.png" alt=""/>
            <div class="scores">
                <div class="score">
                    <h3>Your Score</h3>
                    <p>196</p>
                </div>
                <div class="score">
                    <h3>High Score</h3>
                    <p>976</p>
                </div>
            </div>
    </a>
</div>

<div class="level2">
    <img src="<?php echo base_url(); ?>assets/img/level2-text.png" alt=""/>
    <div class="scores">
        <div class="score">
            <h3>Your Score</h3>
            <p>-</p>
        </div>
        <div class="score">
            <h3>High Score</h3>
            <p>856</p>
        </div>
    </div>
</div>
<div class="level3">
    <img src="<?php echo base_url(); ?>assets/img/level3-text.png" alt=""/>
    <div class="scores">
        <div class="score">
            <h3>Your Score</h3>
            <p>-</p>
        </div>
        <div class="score">
            <h3>High Score</h3>
            <p>780</p>
        </div>
    </div>
</div>
<div class="level4">
    <img src="<?php echo base_url(); ?>assets/img/level4-text.png" alt=""/>
    <div class="scores">
        <div class="score">
            <h3>Your Score</h3>
            <p>-</p>
        </div>
        <div class="score">
            <h3>High Score</h3>
            <p>678</p>
        </div>
    </div>
</div>
</div>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-76478115-1', 'auto');
    ga('send', 'pageview');

</script>
<![endif]-->
</body>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>

</html>
