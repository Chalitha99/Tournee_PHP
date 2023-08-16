<?php
namespace Classes;
use PDO;
use PDOException;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBConnecter
 *
 * @author dilha
 */
class DBConnecter {
    private $host="localhost";
    private $db_name="tournee";
    private $db_user="root";
    private $db_pass="";
    //put your code here
    public function getConnection(){
        
        $dsn="mysql:host=".$this->host.";dbname=".$this->db_name;
        try{
            $con = new PDO($dsn, $this->db_user, $this->db_pass);
            return $con;
        }catch(PDOException $e){
            die('Connection lost: '.$e->getMessage());
        }
    }
}
