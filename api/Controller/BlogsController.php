<?php
require_once 'Model/BlogsModel.php';
class BlogsController {
    public function dispatch() {
        $blogs = new BlogsModel();
        return $blogs->show_blog();
    }
}