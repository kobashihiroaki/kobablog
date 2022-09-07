<?php
require_once('Controller/BlogsController.php');
require_once('Controller/ContributorsController.php');
header("Content-Type: application/json; charset=utf-8");
header("Access-Controll-Allow-Headers: Content-Type,");
$data = json_decode(file_get_contents('php://input'), true);
if ($data["model"] === "blog") {
    $blogs = new BlogsController($data);
    $success = $blogs->dispatch($data);
} else if ($data["model"] === "contributor") {
    $contributors = new ContributorsController($data);
    $success = $contributors->dispatch($data);
}
echo json_encode($success);