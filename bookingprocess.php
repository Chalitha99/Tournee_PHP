<?php 
	require './Classes/DBConnecter.php';
use Classes\DBConnecter;
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(!isset($_POST['submit'])){
    try{
        $dbcon = new DBConnecter();
        $con= $dbcon->getConnection();
                $query = "SELECT * FROM tour";
                $pstmt = $dbcon->getConnection()->prepare($query);
                $pstmt->execute();
                
    
                $travllerID = $_SESSION["travllerid"];
                $tour_ID = $pstmt->rowCount()+1;
                $planname = $_POST['planname'];
                $start_date=$_POST["startDate"];
                $end_date=$_POST["endDate"];
                
                $query1 = "INSERT INTO tour(tour_id,name,traveller_id,start_date,end_date) VALUES(?,?,?,?,?)";
                $pstmt1 = $con->prepare($query1);
            $pstmt1->bindValue(1, $tour_ID);
            $pstmt1->bindValue(2,$planname);
            $pstmt1->bindValue(3,$travllerID);
            $pstmt1->bindValue(4,$start_date);
            $pstmt1->bindValue(5,$end_date);
            $pstmt1->execute();    
                
            
            
                $activity = $_POST['actName'];
                $location = $_POST['location'];
                $start_time=$_POST["startTime"];
                $end_time=$_POST["endTime"];
                
                $query3 = "INSERT INTO activity(tour_id,location,name,start_time,end_time) VALUES(?,?,?,?,?)";
                $pstmt3 = $con->prepare($query3);
            $pstmt3->bindValue(1, $tour_ID);
            $pstmt3->bindValue(2,$location);
            $pstmt3->bindValue(3,$activity);
            $pstmt3->bindValue(4,$start_time);
            $pstmt3->bindValue(5,$end_time);
            $pstmt3->execute();
            
            
            $price = intval($_POST['fullprice']);
                $quentity = intval($_POST['quentity']);
                $date= date("Y-m-d");
                
                
                $query2 = "INSERT INTO booking(traveller_id,tour_id,price,quantity,date) VALUES(?,?,?,?,?)";
                $pstmt2 = $con->prepare($query2);
            $pstmt2->bindValue(1, $travllerID);
            $pstmt2->bindValue(2,$tour_ID);
            $pstmt2->bindValue(3,$price);
            $pstmt2->bindValue(4,$quentity);
            $pstmt2->bindValue(5,$date);
            $pstmt2->execute();
            
            
            
            
            if($pstmt1->rowCount()>0 && $pstmt2->rowCount()>0 && $pstmt3->rowCount()>0){
                header("Location:payment.php?id=".$tour_ID);
               
            }
            
            
            
        }
        catch(PDOException $e){
            echo $e->getMessage();
            
        }
                
                
            }
        