<html>
<head>
    <title>Grim Reaper</title>
</head>
<body>

<header style="background-color: black;color: white" class="red"><?php echo $title; ?>
    <div> header a Integrer</div>
    <a href="<?php echo site_url(); ?>">Home</a>
    <a style="color: #b4b9c2" href="<?php echo site_url('home/logout'); ?>">Logout</a>
    <a style="float: right;" href="<?php echo site_url('users/' . $_SESSION['username']); ?>">
        <?php if ($_SESSION != 'undefined') echo 'pseudo: ' . $_SESSION['username']; ?>
    </a>
</header>
