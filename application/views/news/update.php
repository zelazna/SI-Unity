<?php echo validation_errors(); ?>

<?php echo form_open('news/update'); ?>
<label for="title">Title</label>
<input type="input" name="title" value="<?= $news_item['title'] ?>"/><br/>

<label for="text">Text</label>
<textarea name="text"><?= $news_item['text']?></textarea><br/>

<input type="submit" name="submit" value="update item"/>

</form>