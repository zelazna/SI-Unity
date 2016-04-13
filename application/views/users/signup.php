<?php
use \Facebook\FacebookRedirectLoginHelper;
use \Facebook\FacebookSession; ?>
<h2><?php echo $title; ?></h2>

<?php
//$fb_id = '539075076264041';
//$fb_secret = '2ca9ebd310a9459cabe10a9355ec99c4';
//FacebookSession::setDefaultApplication($fb_id, $fb_secret);
//$helper = new FacebookRedirectLoginHelper('http://localhost/~constantin/semainesIntensives/SI-Unity/index.php');
//$session = $helper->getSessionFromRedirect();
//@fixme bug session fb
//$_SESSION['fb_token'] = $session->getToken()
?>

<?php echo validation_errors(); ?>

<?php echo form_open('users/signup'); ?>

<label for="title">Nom d'Utilisateur
    <input type="text" name="username"/>
</label>
<br/>
<label for="text">Mot de Passe
    <input type="text" name="password"/>
</label>
<br/>
<label for="text">Confirmer le Mot de Passe
    <input type="text" name="passconf"/>
</label>
<br/>
<label for="text">Email
    <input type="email" name="email"/>
</label><br/>

<input type="submit" name="submit" value="S'inscrire"/>

</form>


<?php //echo anchor($helper->getLoginUrl(), "Se Connecter avec Fesses de Bouc"); ?>
