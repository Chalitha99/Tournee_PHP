<?php


namespace Classes;
require './Classes/DBConnecter.php';
use Classes\DBConnecter;
use PDO;


/**
 * Description of travelPlan
 *
 * @author dilha
 */
class travelPlan {
    //put your code here
    private $destination_id;
    private $name;
    private $location1;
    private $location2;
    private $include;
    
    
    
    public function getDestinationName(){
        $query = "SELECT * FROM destination";
        
        try{
            $dbcon = new DBConnecter();
            $con = $dbcon->getConnection();
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $count = $pstmt->rowCount();
            $rs = $pstmt->fetchAll(PDO::FETCH_ASSOC);
            
               return $rs;
        }
        catch(PDOException $e){
            echo $e->getMessage();
            
        }
    }
    
    public function getPlan(){
        $query = "SELECT * FROM destination";
        
        try{
            $dbcon = new DBConnecter();
            $con = $dbcon->getConnection();
            $pstmt = $con->prepare($query);
            $pstmt->execute();
            $count = $pstmt->rowCount();
            $result = $pstmt->fetchAll(PDO::FETCH_ASSOC);
            
               return $result;
        }
        catch(PDOException $e){
            echo $e->getMessage();
            
        }
    }
    
    

}
