<?php 
require_once __DIR__.'/../config/database.php';
require_once __DIR__.'/../config/baseUrl.php';

session_start();

if (isset($_SESSION['username']) && isset($_SESSION['role'])){
    $slctUser = "SELECT * FROM users WHERE username = '$_SESSION[username]'";
    $rsltUser = $dbConnect->query($slctUser);
    // $row = mysqli_fetch_assoc($rsltUser);

    $userRole = $_SESSION['role'];

    if ($userRole == 'admin') {
        header('location:'.baseUrl().'admin/');
    }

}else{
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $slctUser = "SELECT * FROM userlogin WHERE username = '$username'";
        
        $rsltUser = $dbConnect->query($slctUser);
        $row = mysqli_fetch_assoc($rsltUser);

        if ($row) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['role'] = $row['role'];

                header('location:'.baseUrl().'admin/');
            }else{
                echo "<script>alert('Username atau Password salah');window.location.href='".baseUrl()."';</script>";
            }
        }else{
            echo "<script>alert('Username atau Password salah');window.location.href='".baseUrl()."';</script>";
        }
    }
}

?>