<?php
require_once('Controller/BlogsController.php');
header("Access-Controll-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=utf-8");
$data = json_decode(file_get_contents('php://input'), true);
// $blogs = new BlogsController();
// $success = $blogs->dispatch();
echo json_encode($data);