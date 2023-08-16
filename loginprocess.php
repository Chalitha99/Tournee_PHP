<?php

require './Classes/DBConnecter.php';
use Classes\DBConnecter;

$dbcon = new DBConnecter();
session_start();

$username = $_POST["email"];
$password = $_POST["password"];
if (isset($_POST["email"], $_POST["password"])) {
    if (!empty($_POST["email"] && $_POST["password"])) {
        if($username=="admin@gmail.com"){
            try {
            $con = $dbcon->getConnection();
            $query = "SELECT * from admin WHERE email=?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $username);
            $pstmt->execute();
            $result = $pstmt->fetch(PDO::FETCH_OBJ);


            $D_password = $result->password;
            if ($password==$D_password) {
                $_SESSION["email"] = $result->email;
                    $_SESSION['username'] = $result->username;
                    $_SESSION["isadmin"] = true;
                    setcookie("email", $result->email, time() + (86400 * 30), "/");
                    setcookie("username", $result->username, time() + (86400 * 30), "/");
                    header("Location:index.php");
            } else {


                header("Location:login.php?error=1");
            }
        } catch (PDOException $ex) {
            echo 'Error ' . $ex->getMessage();
        }
            
        }else{
        
        
        try {
            $con = $dbcon->getConnection();
            $query = "SELECT * from traveller WHERE email=?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $username);
            $pstmt->execute();
            $result = $pstmt->fetch(PDO::FETCH_OBJ);


            $D_password = $result->password;
            if (password_verify($password, $D_password)) {
                 
                    session_start();
                    $_SESSION["email"] = $result->email;
                    $_SESSION["username"] = $result->username;
                    $_SESSION["travllerid"]= $result->traveller_id;
                    $_SESSION["isadmin"] = false;
                    setcookie("email", $result->email, time() + (86400 * 30), "/");
                    setcookie("username", $result->username, time() + (86400 * 30), "/");
                    header("Location:index.php");
                
            } else {


                header("Location:login.php?error=1");
            }
        } catch (PDOException $ex) {
            echo 'Error ' . $ex->getMessage();
        }
    } 
}
}