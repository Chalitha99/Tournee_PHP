<?php

require './Classes/DBConnecter.php';

use Classes\DBConnecter;
$dbcon =new DBConnecter();


$id=$_GET["id"];
try {
    
    $con=$dbcon->getConnection();
    $query = "DELETE FROM traveller WHERE traveller_id=?";
    
    $pstmt = $con->prepare($query);
    $pstmt->bindValue(1,$id);
    $pstmt->execute();
    
    if($pstmt->rowCount()>0){
        
        header("Location:manage_account.php?success=1");
    }
        
    else{
        header("Location:manage_account.php?success=2");
    }
    
}   
catch (PDOException $exc ){
     
    echo $exc->getMessage();
     
}




?>