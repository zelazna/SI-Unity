<html>
<head>
    <title>Grim Reaper</title>
</head>
<body>

<header style="background-color: black;color: white" class="red"><?php echo $title; ?>
    <div> header a Integrer</div>
    <a style="color: #b4b9c2" href="home/logout">Logout</a>
    <div style="float: right;"><?php
        if ($_SESSION != 'undefined') {
            echo 'pseudo: '.$_SESSION['username'];
        }; ?></div>
</header>
