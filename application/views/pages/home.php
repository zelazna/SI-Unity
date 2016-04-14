<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.jparallax.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#parallax').jparallax();
    });
</script>
</head>

<body>

<div class="content">
    <div id="parallax">
        <p style="text-align:center; width:1000px;height:550px;padding-top:0px;"><img
                src="<?php echo base_url(); ?>assets/img/oval-back.png"/></p>
        <p style="text-align:center; width:970px;height:490px;padding-top:-900px;"><img
                src="<?php echo base_url(); ?>assets/img/oval-front.png"/></p>
        <p style="text-align:center; width:980px;height:470px;padding-top:-600px;"><img
                src="<?php echo base_url(); ?>assets/img/logo.png"/></p>
    </div>
</div>

<div>Des liens FRERE!!
    <a href="<?php echo base_url(); ?>users">Highscores</a>
    <a href="<?php echo base_url(); ?>signup">S'inscrire</a>
    <a href="<?php echo base_url(); ?>connexion/index">Login</a>
    <a href="<?php echo base_url(); ?>game">Jouer</a>
</div>