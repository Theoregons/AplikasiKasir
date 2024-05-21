<?php
    require 'function.php';
    $idp = $_GET['idp'];

    if(isset($_GET['idp'])){
        $idp = $_GET['idp'];
    }else{
        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="d-flex">

        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height:100dvh; background-color:#5339AD">
            <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Aplikasi Kasir</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                    <a href="index.php" class="nav-link text-white  d-flex align-items-center gap-2">
                        <svg fill="#000000" width="28" height="28" viewBox="0 0 24 24" id="dashboard-alt-2" data-name="Line Color" xmlns="http://www.w3.org/2000/svg" class="icon line-color">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <line id="secondary" x1="16" y1="9" x2="12" y2="15" style="fill: none; stroke: #ecf2f3; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line>
                                <line id="secondary-upstroke" x1="12" y1="14.98" x2="12" y2="15.08" style="fill: none; stroke: #ecf2f3; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line>
                                <path id="primary" d="M21,13a9,9,0,0,1-3.36,7H6.36A9,9,0,1,1,21,13Z" style="fill: none; stroke: #ffffff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                            </g>
                        </svg>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="stock.php" class="nav-link text-white d-flex align-items-center gap-2">
                        
                        <svg width="27" height="27" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M7.5 18C8.32843 18 9 18.6716 9 19.5C9 20.3284 8.32843 21 7.5 21C6.67157 21 6 20.3284 6 19.5C6 18.6716 6.67157 18 7.5 18Z" stroke="#ffffff" stroke-width="1.5"></path>
                                <path d="M16.5 18.0001C17.3284 18.0001 18 18.6716 18 19.5001C18 20.3285 17.3284 21.0001 16.5 21.0001C15.6716 21.0001 15 20.3285 15 19.5001C15 18.6716 15.6716 18.0001 16.5 18.0001Z" stroke="#ffffff" stroke-width="1.5"></path>
                                <path d="M2 3L2.26121 3.09184C3.5628 3.54945 4.2136 3.77826 4.58584 4.32298C4.95808 4.86771 4.95808 5.59126 4.95808 7.03836V9.76C4.95808 12.7016 5.02132 13.6723 5.88772 14.5862C6.75412 15.5 8.14857 15.5 10.9375 15.5H12M16.2404 15.5C17.8014 15.5 18.5819 15.5 19.1336 15.0504C19.6853 14.6008 19.8429 13.8364 20.158 12.3075L20.6578 9.88275C21.0049 8.14369 21.1784 7.27417 20.7345 6.69708C20.2906 6.12 18.7738 6.12 17.0888 6.12H11.0235M4.95808 6.12H7" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                        Stok Barang
                    </a>
                </li>
                <li>
                    <a href="pelanggan.php" class="nav-link text-white">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                        Kelola Pelanggan
                    </a>
                </li> 
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="stimata.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>admin</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Edit</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="logout.php">Log out</a></li>
                </ul>
            </div>
        </div>
        <div class="p-4 w-100">
            <h2>Data Pesanan : <?= $idp; ?> </h2>
            <button type="button" class="btn btn-primary my-2   " data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Barang
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">Tambah Data Pesanan </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" method="POST">
                            <div class="modal-body"> 
                                <div class="mb-3">
                                    <label for="nama_produk" class="form-label">Pilih Barang</label>
                                    <select name="id_produk" class="form-control" id="">
                                        <?php 
                                            $getproduk = mysqli_query($koneksi, "SELECT * FROM produk");
                                            while($pl=mysqli_fetch_array($getproduk)){
                                                $id_produk = $pl['id_produk'];
                                                $nama_produk = $pl['nama_produk'];
                                                $stock = $pl['stock']; 
                                        ?>
                                        <option value="<?= $id_produk; ?>"><?= $nama_produk; ?> - <?= $stock; ?></option>

                                        <?php
                                            }
                                        ?>
                                    </select>
                                </div>  
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary" name="tambahpesanan">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="my-3">
                <table class="table table-hover w-100">
                    <thead>
                        <tr>
                            <th scope="col">ID Pesanan</th>
                            <th scope="col">Tanggal Pesan</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $getpesanan = mysqli_query($koneksi, "SELECT * FROM pesanan p, pelanggan pl WHERE p.id_pelanggan = pl.id_pelanggan");
                            while($p=mysqli_fetch_array($getpesanan)){
                                $id_pesanan = $p['id_pesanan'];
                                $tanggal = $p['tgl_pesan'];
                                $nama_pelanggan = $p['nama_pelanggan'];
                                $alamat = $p['alamat'];
                          ?>
                            <tr> 
                                <td><?= $id_pesanan; ?></td>
                                <td><?= $tanggal; ?></td> 
                                <td><?= $nama_pelanggan; ?> - <?= $alamat; ?></td> 
                                <td>Jumlah</td> 
                                <td><a href="view.php?idp=<?=$id_pesanan;?>" class="btn btn-primary">Tampilkan</a> | <a href="" class="btn btn-danger">Delete</a></td> 
                            </tr>  
                          <?php 
                            }
                          ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>

</body>

</html>