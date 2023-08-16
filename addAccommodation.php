<?php

require './Classes/Dbconnecter.php';
use Classes\Dbconnecter;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!isset($_POST['submit'])){
                $travelPlan_ID = $_POST['plan'];
                $accommodation = $_POST['accommodationName'];
                $price = $_POST['price'];
                $type = $_POST['type'];
                $dbcon = new DBConnecter();
                $query = "INSERT INTO accommodation(accommodation_name,type,description,price,destination_id) VALUES(?,?,?,?,?)";
        try{
            $con = $dbcon->getConnection();
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $accommodation);
            $pstmt->bindValue(2,$type);
            $pstmt->bindValue(3,"");
            $pstmt->bindValue(4,$price);
            $pstmt->bindValue(5,$travelPlan_ID);
            
            
            
            $pstmt->execute();
            
            if($pstmt->rowCount()>0){
                header("Location:add_accommodation.php?success=1");
               
            }
            
            
            
        }
        catch(PDOException $e){
            echo $e->getMessage();
            
        }
                
                
            }
