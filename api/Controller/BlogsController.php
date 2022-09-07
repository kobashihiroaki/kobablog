<?php
require_once 'Model/BlogsModel.php';
class BlogsController {
    private $action;
    private $instance;
    public function __construct($data) {
        $this->action = $data["action"];
        $this->instance = new BlogsModel();
    }

    public function dispatch($data) {
        if($this->action === "read") {
            return $this->instance->show();
        } else if($this->action === "add") {
            return $this->instance->add_title($data);
        } else if($this->action === "delete") {
            return $this->instance->delete($data);
        } else if($this->action === "detail") {
            return $this->instance->detail($data);
        } else if ($this->action === "update") {
            return $this->instance->update($data);
        }
    }
}