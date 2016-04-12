<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/signup'); ?>

<label for="title">Pseudo</label>
<input type="text" name="pseudo"/><br/>

<label for="text">Password</label>
<input type="text" name="password"/><br/>

<input type="submit" name="submit" value="S'inscrire"/>

</form>