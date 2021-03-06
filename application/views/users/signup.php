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
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/form.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.jparallax.js"></script>

</head>
<body>

<header>
    <div class="inner">
        <h1><a href="<?php echo base_url() ?>home"><img src="<?php echo base_url() ?>assets/img/logo.png"
                                                                     alt="AUD"></a></h1>
    </div>
</header>
<div class="inner">
    <?php echo validation_errors(); ?>
    <?php echo form_open('signup'); ?>
    <h2>Sign Up</h2>
    <?php
    $app_id = '539075076264041';
    $app_secret = '2ca9ebd310a9459cabe10a9355ec99c4';
    \Facebook\FacebookSession::setDefaultApplication($app_id, $app_secret);
    $helper = new \Facebook\FacebookRedirectLoginHelper('http://localhost/~constantin/semainesIntensives/SI-Unity/connexion/index');
    if (isset($_SESSION) && isset($_SESSION['fb_token'])) {
        $session = new \Facebook\FacebookSession($_SESSION['fb_token']);
    } else {
        $session = $helper->getSessionFromRedirect();
    }
    if ($session) {
        try {
            $_SESSION['fb_token'] = $session->getToken();
            $request = new \Facebook\FacebookRequest($session, 'GET', '/me');
            $profile = $request->execute()->getGraphObject('Facebook\GraphUser');
            $email = $profile->getEmail();
            $firstname = $profile->getFirstName();
            $lastname = $profile->getLastName();
            $email = $profile->getEmail();
            $data = array(
                'username' => $firstname,
                'email' => $email,
                'password' => md5($lastname)
            );

            $this->db->insert('users', $data);

        } catch (Exception $e) {
            $_SESSION = "null";
            session_destroy();
            header('Location:login');
        }
    } else {
        echo '<li class="facebook"><a href="' . $helper->getLoginUrl(['email']) . '">Sign up with Facebook</a></li>';
    } ?>
    <p>OR</p>
    <input type="text" placeholder="Username" id="Pseudo" name="username">
    <br>
    <input type="email" placeholder="Mail" id="mail" name="email">
    <br>
    <input type="password" placeholder="Password" id="MDP" name="password">
    <br>
    <input type="password" placeholder="Repeat Password" id="CMDP" name="passconf">
    <br>
    <button type="submit">Valid</button>
    <br>
    </form>
</div>


<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-76478115-1', 'auto');
    ga('send', 'pageview');

</script>
<![endif]-->
</body>

</html>
<!--FB sdk-->
