

<?php
require './Classes/Dbconnecter.php';
use Classes\DBConnecter;

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $user_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $user_password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $hash_password = password_hash($user_password, PASSWORD_DEFAULT);
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];

    if ($user_password !== $confirm_password) {
        // Passwords do not match
        echo "Passwords do not match.";
    } else {
        $dbcon = new DBConnecter();
        $query = "INSERT INTO traveller(password,email,username,firstname,lastname) VALUES(?,?,?,?,?)";
        try {
            $con = $dbcon->getConnection();
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $hash_password);
            $pstmt->bindValue(2, $user_email);
            $pstmt->bindValue(3, $username);
            $pstmt->bindValue(4, $first_name);
            $pstmt->bindValue(5, $last_name);

            $pstmt->execute();

            if ($pstmt->rowCount() > 0) {
                header("Location:login.php?success=2");
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

        echo $username . $hash_password . $user_email . $first_name . $last_name;
    }
}
