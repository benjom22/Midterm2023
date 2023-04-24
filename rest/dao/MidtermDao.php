<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class MidtermDao {

    private $conn;

    /**
    * constructor of dao class
    */
    public function __construct(){
        try {

        /** TODO
        * List parameters such as servername, username, password, schema. Make sure to use appropriate port
        */

        $servername = "db-mysql-nyc1-51552-do-user-3246313-0.b.db.ondigitalocean.com";
        $username = "doadmin";
        $password = "AVNS_sQwKZryHF62wtg6XNoi";
        $schema = "midterm-2023";
  
        /*options array neccessary to enable ssl mode - do not change*/
        $options = array(
        	PDO::MYSQL_ATTR_SSL_CA => 'https://drive.google.com/file/d/1g3sZDXiWK8HcPuRhS0nNeoUlOVSWdMAg/view?usp=share_link',
        	PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        );
        /** TODO
        * Create new connection
        * Use $options array as last parameter to new PDO call after the password
        */
        $this->conn = new PDO("mysql:host=$servername;dbname=$schema", $username, $password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";

        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        } catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
    }

    /** TODO
    * Implement DAO method used to get cap table
    */
    public function cap_table(){
      $stmt = $this->conn->prepare("SELECT * FROM cap_table");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /** TODO
    * Implement DAO method used to get summary
    */
    public function summary(){
      $stmt = $this->conn->prepare("SELECT * FROM ");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /** TODO
    * Implement DAO method to return list of investors with their total shares amount
    */
    public function investors(){
      $stmt = $this->conn->prepare("SELECT first_name,  FROM investors");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
