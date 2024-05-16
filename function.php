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
    
    if(isset($_POST['tambahproduk'])){
        $nama_produk = $_POST['nama_produk'];
        $deskripsi = $_POST['deskripsi'];
        $harga = $_POST['harga'];
        $stock = $_POST['stock'];

        $insert_produk = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, deskripsi, harga, stock) VALUES ('$nama_produk', '$deskripsi', '$harga', '$stock')");

        if($insert_produk){
            header('location:stock.php');
        }else{
            echo '<script type="text/javascript"> alert("Gagal!"); </script>';
            header('location:stock.php');
        }
    }
?>