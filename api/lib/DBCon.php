<?php
class DBCon {
    private $link;
    private static $hostname = 'localhost';
    private static $username = 'root';
    private static $passwd = 'hiroaki';
    private static $dbname = 'kobablog';

    public function __construct() {
        $this->dbConnect();
    }
    public function __destruct() {
        if ($this->link != null) {
            mysqli_close($this->link);
        }
    }
    public function getLink() {
        return $this->link;
    }
    public function dbConnect() {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        try {
            $this->link = mysqli_connect($this::$hostname, $this::$username, $this::$passwd, $this::$dbname);
        } catch (mysqli_sql_exception $e){
            echo "接続に失敗しました";
            exit();
        }
    }
}