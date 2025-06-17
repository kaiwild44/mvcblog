<?php ob_start(); ?>
<h2>Recent Posts</h2>
<?php foreach ($posts as $post): ?>
    <article>
        <h3><a href="/mvcblog/post?id=<?php echo $post['id']; ?>"><?php echo htmlspecialchars($post['title']); ?></a></h3>
        <p><?php echo htmlspecialchars($post['excerpt']); ?></p>
    </article>
<?php endforeach; ?>
<?php
$content = ob_get_clean();
require 'layout.php';
?>