<h2><?php echo $title; ?></h2>

<?php foreach ($blogs as $blog_item): ?>

    <h3><?php echo $blog_item['b_title']; ?></h3>
    <div class="main">
        <?php echo $blog_item['b_content']; ?>
    </div>
    <p><a href="<?php echo site_url('blog/view/'.$blog_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>