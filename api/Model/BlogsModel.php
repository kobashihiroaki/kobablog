<?php
require_once 'lib/DBCon.php';
class BlogsModel {
    private $db;
    public function __construct() {
        $this->db = new DBCon();
    }
    public function show_blog() {
        $sql = "SELECT title, contributor from blogs";
        $result = $this->db->getLink()->query($sql);
        $data = [];
        if ($result === FALSE) {
            echo 'SQLエラー';
        }
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
        mysqli_free_result($result);
        return $data;
    }
}