<?php
require_once 'Model/ContributorsModel.php';
class ContributorsController {
    private $action;
    private $instance;

    public function __construct($data) {
        $this->action = $data["action"];
        $this->instance = new ContributorsModel();
    }

    public function dispatch($data) {
        if ($this->action === "add") {
            return $this->instance->add_contributor($data);
        } else if ($this->action === "show") {
            return $this->instance->show();
        }
    }
}