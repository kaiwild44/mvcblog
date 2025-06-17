<?php
require_once 'models/PostModel.php';

class PostController {
    public function view() {
        $model = new PostModel();
        $post = $model->getPost();
        
        require 'views/post.php';
    }
}