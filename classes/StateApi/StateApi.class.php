<?php

namespace StateApi {

    use Dbh;
    use PDO;

    class StateApi extends Dbh{
        private $state = "";
        private $city ='';
        private $country='Nigeria';
        private $lga ='';
        private $state_code ='';



        function addState($state,$state_code){
            $sql = 'INSERT INTO state (state, state_code) VALUES(?,?)';
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute([$state,$state_code]);
            if(!$result){
                return false;
            }
            return true;

        }
        
        /**
         * @return mixed
         */

        function getAllState(){
            $sql = 'SELECT state,state_code FROM state ';
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute();
           
            if(!$result){
                return false;
            }
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $row;

        }
        
        function getLga(){
            $sql = 'SELECT state,state_code FROM state ';
            $stmt = $this->connect()->prepare($sql);
            $result = $stmt->execute();
           
            if(!$result){
                return false;
            }
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $row;

        }
    	/**
	 * @return mixed
	 */
	function getCountry() {
		return $this->country;
	}
}


}