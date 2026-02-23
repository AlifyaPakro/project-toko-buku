<?php

include "koneksi.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="card shadow mb-4 w-100">
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary"></h6>
                            <a href="index.php?page=tambah_obat" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                            <i class="fa-solid fa-file-pen"></i>
                                        </a>
                        </div>
                         <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered" method='GET'>
                                    <tr class="text-center">
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    
                                    <tr class="text-center">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                            <i class="fa-solid fa-file-pen"></i>
                                        </a></td>
                                        <td><a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                            <i class="fa-solid fa-trash">
                                                <?php 
                                                ?>
                                            </i>
                                        </a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
    </div>
</body>
</html>