<?php

    session_start();

    $koneksi = mysqli_connect("localhost", "root", "", "kasir");
    
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $check = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' AND password = '$password' ");
        $hitung = mysqli_num_rows($check);

        if($hitung > 0){
            $_SESSION['login'] = true;
            header('location:index.php');
        }else{
            echo '<script type="text/javascript"> alert("Username atau Password Salah!"); </script>';
        }
    }

    if(isset($_POST['register'])){
        $email = htmlspecialchars($_POST["email"]);
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);
 
        $query = "insert into user values ('' , '$email',  '$username', '$password')";
        
        mysqli_query($koneksi, $query);
    }

?>