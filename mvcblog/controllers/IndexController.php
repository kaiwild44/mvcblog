<?php
require_once 'models/IndexModel.php';

class IndexController {
    public function index() {
        $model = new IndexModel();
        $posts = $model->getRecentPosts();
        
        require 'views/index.php';
    }
}