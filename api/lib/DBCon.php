<?php
class DBCon {
    private $link;
    // private static $hostname = HOST_NAME;
    // private static $username = USER_NAME;
    // private static $passwd = PASSWORD;
    // private static $dbname = DB_NAME;
    private static $hostname = "localhost";
    private static $username = "root";
    private static $passwd = "hiroaki";
    private static $dbname = "kobablog";

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
            $this->link = mysqli_connect(self::$hostname, self::$username, self::$passwd, self::$dbname);
            mysqli_set_charset($this->link, 'utf8');
        } catch (mysqli_sql_exception $e){
            echo "接続に失敗しました";
            exit();
        }
        return $this->link;
    }
}