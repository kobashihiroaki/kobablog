<?php
require_once 'Model/BlogsModel.php';
class BlogsController {
    private $action;
    public function __construct($data) {
        $this->action = $data['action'];
    }
    public function dispatch() {
        if($this->action === 'read') {
            $blogs = new BlogsModel();
            return $blogs->show_blog();
        } else if($this->action === 'add') {
            return 'ok';
        }
    }
}