<?php
require_once('Controller/BlogsController.php');
header("Content-Type: application/json; charset=utf-8");
header("Access-Controll-Allow-Headers: Content-Type,");
$data = json_decode(file_get_contents('php://input'), true);
$blogs = new BlogsController($data);
$success = $blogs->dispatch();
echo json_encode($success);