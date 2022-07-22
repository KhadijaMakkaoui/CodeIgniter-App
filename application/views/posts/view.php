<h2><?php echo $post['title']; ?></h2>
<div class="post-body">
<?php echo $post['body']; ?>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?> 
            <!-- in <strong><?php #echo $post['name']; ?></strong><br> -->
		<?php #echo word_limiter($post['body'], 60); ?></small>
</div>