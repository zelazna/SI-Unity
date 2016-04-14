<h2><?php echo $title; ?></h2>

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
<!--FB sdk-->
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
    echo '<a href="' . $helper->getLoginUrl(['email']) . '"> Se connecter avec FB </a>';
}