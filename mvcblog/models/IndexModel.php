<?php
class IndexModel {
    public function getRecentPosts() {
        // In a real application, this would fetch from a database
        return [
            ['id' => 1, 'title' => 'First Blog Post', 'excerpt' => 'This is the first post.'],
            ['id' => 2, 'title' => 'Second Blog Post', 'excerpt' => 'This is the second post.'],
        ];
    }
}
