
<?php

require './Classes/DBConnecter.php';
use Classes\DBConnecter;

$dbcon = new DBConnecter();


if (isset($_POST['recover-submit'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = md5($_POST['password']);
    $query = "UPDATE traveller set password=? WHERE email=?";
    try {
        $con = $dbcon->getConnection();
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $password);
        $pstmt->bindValue(2, $email);




        $pstmt->execute();

        if ($pstmt->rowCount() > 0) {
            header("Location:login.php?success=1");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    echo $email . $password;
}






