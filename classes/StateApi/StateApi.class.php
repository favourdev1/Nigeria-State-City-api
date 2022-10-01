<?php

namespace StateApi {
    // include_once('errorhandler.php');

    use Dbh;
    use PDO;
    use error\errorhandler;

    class StateApi extends Dbh
    {
        private $error;

        function __construct()
        {
            $this->error = new errorhandler();
        }
        function addState($state, $state_code)
        {
            $sql = 'INSERT INTO state (state, state_code) VALUES(?,?)';
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$state, $state_code]);
            if (!$result) {
            }
            return true;
        }


        function addCity($state, $city)
        {
            $sql = 'INSERT INTO city (state, city) VALUES(?,?)';
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$state, $city]);
            if (!$result) {
            }
            return true;
        }

        /**
         * @return mixed
         */

        function getAllState()
        {
            try {
                $sql = 'SELECT state,state_code FROM state ';
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $row;
            } catch (\PDOException $th) {
                
                $this->error->passError(500);
            }

           
        }

     

        function getCity($state = '')
        {
            try {
                $sql = "SELECT city from city where state =?";
                $stmt = $this->connect()->prepare($sql);
                $result = $stmt->execute([$state]);
                if ($result) {

                    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return $row;
                }
            } catch (\PDOException $e) {

                $this->error->passError(500);
                die;
            }
        }

    }
}
 