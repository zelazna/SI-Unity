<html>
<head>
    <title>Grim Reaper</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css"/>
</head>
<body>

<header class="red"><?php echo $title; ?>
    <div> header a Integrer</div>
    <a href="<?php echo site_url(); ?>">Home</a>
    <?php if ((isset($_SESSION['username'])) && (!empty($_SESSION['username'])))
        echo "<a href=" . site_url('home/logout') . '>Logout</a>' ?>
    <a href="<?php if ((isset($_SESSION['username'])) && (!empty($_SESSION['username']))) echo site_url('users/' . $_SESSION['username']); ?>">
        <?php if ((isset($_SESSION['username'])) && (!empty($_SESSION['username']))) echo 'pseudo: ' . $_SESSION['username']; ?>
    </a>
</header>



