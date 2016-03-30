
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('blog/create'); ?>

<label for="title">Title</label>
<input type="input" name="b_title" /><br />

<label for="text">Text</label>
<textarea name="b_content"></textarea><br />


<input type="submit" name="submit" value="Create news item" />

</form>