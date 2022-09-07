<?php
require_once 'lib/DBCon.php';
class ContributorsModel {
    private $db;
    public function __construct() {
        $this->db = new DBCon();
    }

    public function add_contributor($data) {
        $name = $data["contributor"];
        $sql = "INSERT INTO contributors(name) VALUES('" . $name . "')";
        $result = $this->db->getLink()->query($sql);
        return $result;
    }

    public function show() {
        $sql = "SELECT * FROM contributors";
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