<?php
require_once 'Model/BlogsModel.php';
class BlogsController {
    private $action;
    private $instance;
    public function __construct($data) {
        $this->action = $data['action'];
    }
    public function dispatch($data) {
        $this->instance = new BlogsModel();
        if($this->action === 'read') {
            return $this->instance->show_blog();
        } else if($this->action === 'add') {
            return $this->instance->add_title($data);
        } else if($this->action === 'delete') {
            return $this->instance->delete_blog($data);
        }
    }
}