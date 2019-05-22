<?php
require_once("dbcontroller.php");
/*
A domain Class to Demonstrate RESTful web services
*/
Class Mobile{
    private $mobiles = array();

    public function getAllMobile(){ 
       $query = "SELECT * FROM tbl_mobile";
        $dbcontroller = new DBController();
        $this->mobiles = $dbcontroller->executeSelectQuery($query);
        return $this->mobiles;
    }
}
?>