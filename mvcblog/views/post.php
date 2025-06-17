<?php ob_start(); ?>
<article>
    <h2><?php echo htmlspecialchars($post['title']); ?></h2>
    <p><?php echo htmlspecialchars($post['content']); ?></p>
</article>
<p><a href="/mvcblog/">Back to Home</a></p>
<?php
$content = ob_get_clean();
require 'layout.php';
?>
