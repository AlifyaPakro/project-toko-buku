<?php

include "koneksi.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perpustakaan</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <div class="card shadow mb-4 w-100">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Table Data Kategori</h6>
                            <a href="?page=kategori_tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                Tambah kategori
                            </a>
                        </div>
                         <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered" method='GET'>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>ID</th>
                                        <th>Nama kategori</th>`
                                        <th>Aksi</th>
                                    </tr>
                                    <?php
                                    $i = 1;
                                    $query = mysqli_query($connect, "SELECT * FROM kategori");
                                    while ($data= mysqli_fetch_array($query)):
                                    ?>
                                    <tr class="text-center">
                                        <td><?= $i++; ?></td>
                                        <td><?= $data['id_kategori']; ?></td>
                                        <td><?= $data['kategori']; ?></td>
                                        <td><a href="?page=kategori_ubah&&id=<?= $data['id_kategori']; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
                                            <i class="fa-solid fa-file-pen"></i></a>
                                            <a href="?page=kategori_hapus&&id=<?= $data['kategori']; ?>" onclick="return confirm('apakah anda yakin ingin menghapus data ini?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                            <i class="fa-solid fa-trash">
                                            </i>
                                        </a>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                </table>
                            </div>
                        </div>
    </div>
</body>
</html>