<?php
class PostModel {
    public function getPost() {
        // In a real application, this would fetch a specific post from a database
        return [
            'id' => 1,
            'title' => 'First Blog Post',
            'content' => 'This is the content of the first blog post.'
        ];
    }
}
