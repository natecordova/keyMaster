<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "ec2-50-17-236-15.compute-1.amazonaws.com");
define("DB_USER", "ddkqfqwlcvuwle");
define("DB_PASS", "1e3da1d74a4c1ef9b131aa9e250872b3c732b28260b55165e5a2101f02bf32ea");
define("DB_NAME", "deq1pleu3she04");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
