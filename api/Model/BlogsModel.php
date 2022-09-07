<?php
require_once 'lib/DBCon.php';
class BlogsModel {
    private $db;
    public function __construct() {
        $this->db = new DBCon();
    }

    public function show() {
        $sql = "SELECT id, title, contributor, updated_at from blogs";
        $result = $this->db->getLink()->query($sql);
        $data = [];
        if ($result === FALSE) {
            echo 'SQLエラー';
        }
        while ($row = mysqli_fetch_assoc($result)) {
            if($row["contributor"] === null) {
                $row["contributor"] = "";
            }
            $data[] = $row;
        }
        mysqli_free_result($result);
        return $data;
    }

    public function add_title($data) {
        $title = $data["title"];
        $content = $data["content"];
        $sql = "INSERT INTO blogs (title, content) VALUES ('" . $title . "' ,'" . $content . "')";
        $result = $this->db->getLink()->query($sql);
        return $result;
    }

    public function delete($data) {
        $id = $data["id"];
        // $sql = "DELETE FROM blogs WHERE id = :id";
        // $stmt = $this->db->getLink()->prepare($sql);
        // $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        // $result = $stmt->execute();
        $sql = "DELETE FROM blogs WHERE id = '" . $id . "'";
        $result = $this->db->getLink()->query($sql);
        return $result;
    }

    public function detail($data) {
        $id = $data["id"];
        $sql = "SELECT * FROM blogs WHERE id = '" . $id . "'";
        $result = $this->db->getLink()->query($sql);
        $data = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $data;
    }

    public function update($data) {
        $id = $data["id"];
        $title = $data["title"];
        $content = $data["content"];
        $sql = "UPDATE blogs SET title = '" . $title . "' , content = '" . $content . "' WHERE id = '" . $id . "'";
        $result = $this->db->getLink()->query($sql);
        return $result; 
    }
}