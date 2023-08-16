<?php
require './Classes/DBConnecter.php';
use Classes\DBConnecter;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of addguide
 *
 * @author dilha
 */
if(!isset($_POST['submit'])){
                $guiderName = $_POST['guiderName'];
                $guiderEmail = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
                $guiderContact = filter_var($_POST["contactNo"], FILTER_SANITIZE_NUMBER_INT);
                $serviceCharge = $_POST['charge'];
                $dbcon = new DBConnecter();
                $query = "INSERT INTO tourguide(name,contact_no,email,price) VALUES(?,?,?,?)";
        try{
            $con = $dbcon->getConnection();
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $guiderName);
            $pstmt->bindValue(2,$guiderContact);
            $pstmt->bindValue(3,$guiderEmail);
            $pstmt->bindValue(4,$serviceCharge);
            
            
            
            $pstmt->execute();
            
            if($pstmt->rowCount()>0){
                header("Location:Add_travel_Guide.php?success=1");
               
            }
            
            
            
        }
        catch(PDOException $e){
            echo $e->getMessage();
            
        }
                
                
            }
            
            