
<?php


class Db {

    // Hold the class instance.
    private static $instance = null;
    private $conn;
    public $stmp;


    private $host = 'localhost';
    private $user = 'olha';
    private $pass = '0000';
    private $name = 'registration';

    // The db connection is established in the private constructor.
    private function __construct()
    {
        $this->conn = new PDO("mysql:host={$this->host};
    dbname={$this->name}", $this->user,$this->pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }

    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new Db();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function query($query){
        $this->stmp = $this->conn->prepare($query);
    }
    public function execute(){
        return $this->stmp->execute();
    }
}
?>
