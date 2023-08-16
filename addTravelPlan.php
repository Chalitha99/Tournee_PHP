<?php


require './Classes/Dbconnecter.php';
use Classes\Dbconnecter;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!isset($_POST['submit'])){
                $planName = $_POST['planName'];
                $location1 = $_POST['location1'];
                $location2 = $_POST['location2'];
                $description = $_POST['description'];
                $include = $_POST['include'];
                $dbcon = new DBConnecter();
                $query = "INSERT INTO destination(destination_name,location1,location2,description,include) VALUES(?,?,?,?,?)";
        try{
            $con = $dbcon->getConnection();
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $planName);
            $pstmt->bindValue(2,$location1);
            $pstmt->bindValue(3,$location2);
            $pstmt->bindValue(4,$description);
            $pstmt->bindValue(5,$include);
            
            
            
            $pstmt->execute();
            
            if($pstmt->rowCount()>0){
                header("Location:add-travel-plan.php?success=1");
               
            }
            
            
            
        }
        catch(PDOException $e){
            echo $e->getMessage();
            
        }
                
                
            }
