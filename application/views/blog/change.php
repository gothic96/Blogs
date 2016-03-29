

<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('blog/change'); ?>

<label for="title">Title</label>
<input type="input" name="b_title" /><br />

<label for="text">Text</label>
<textarea name="b_content"></textarea><br />


<div >
    <label for="date">Date</label>
    <textarea name="b_data" value =<?php echo date("Y-m-d"); ?>></textarea><br />

</div>
<input type="submit" name="submit" value="change your item" />