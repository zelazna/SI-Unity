<?php header('Access-Control-Allow-Origin: *'); ?>
<!doctype html>
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
    <title>Grim Reaper</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css">

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

<header>
    <nav>
        <ul>
            <li><a href="<?php echo base_url(); ?>users">Highscores</a></li>
            <li><a href="<?php echo base_url(); ?>login">Sign in</a></li>
            <li><a href="<?php echo base_url(); ?>signup">Create account</a></li>
        </ul>
    </nav>
</header>

<div class="content">
    <div id="parallax">
        <p style="text-align:center; width:1000px;height:550px;padding-top:0px;"><img
                src="<?php echo base_url(); ?>assets/img/oval-back.png"/></p>
        <p style="text-align:center; width:800px;height:470px;padding-top:-900px;"><img
                src="<?php echo base_url(); ?>assets/img/oval-front.png"/></p>
        <p style="text-align:center; width:600px;height:470px;padding-top:-600px;"><img
                src="<?php echo base_url(); ?>assets/img/logo.png"/></p>
    </div>
</div>

<a href="file:///Users/constantin/Sites/semainesIntensives/SI-Unity/game.php">
    <button type="button" name="button">Play</button>
</a>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
</body>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/main.js"></script>

</html>