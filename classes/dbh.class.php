<?php 
class Dbh {
    private $dbName;
    private $db_username;
    private $db_password;
    private $dbHost;
    private $chrset;

    function connect(){
        $this->dbName = 'CityApi';

        $this->db_username = "root";
        $this->db_password = '';
        $this ->dbHost = 'localhost';
        $this->chrset = 'utf8mb4';

        try{
            $dsn = "mysql:host=".$this->dbHost.";" ;
            $dsn .=  "dbname=".$this->dbName."";
            // $dsn .= " charset= " . $this->chrset;


            $conn = new PDO($dsn,$this->db_username,$this->db_password);
            $conn->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            
            return $conn;

        
        }catch(PDOException $e){
           echo("connection failed <br>".$e->getMessage());

        }
    }

}

?>