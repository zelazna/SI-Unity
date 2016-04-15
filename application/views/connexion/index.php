<!--<h2>--><?php //echo $title; ?><!--</h2>-->
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

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/form.css">

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.jparallax.js"></script>

</head>
<body>

<header>
    <div class="inner">
        <h1><a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url() ?>/assets/img/logo.png"
                                                         alt="AUD"></a></h1>
    </div>
</header>
<div class="inner">
    <?php echo validation_errors(); ?>

    <?php echo form_open('verifylogin'); ?>
    <h2>Sign In</h2>
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
        echo '<li class="facebook"><a href="' . $helper->getLoginUrl(['email']) . '"> Se connecter avec FB </a></li>';
    } ?>
    <p>OR</p>
    <input type="text" placeholder="Username" id="Pseudo" name="username">
    <br>
    <input type="password" placeholder="Password" id="MDP" name="password">
    <br>
    <button type="submit">Login</button>
    <br>
    </form>
</div>
<!--FB sdk-->





