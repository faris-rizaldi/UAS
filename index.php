<?php 
 require 'function.php';
 require 'cek.php';
?>

<!-- hi -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="styles.css">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="https://liquipedia.net/pubg/PUBG_Mobile_Global_Championship/2020">
        <img src="pubg.png" width="55px">PUBG Mobile Global Champion</a>
        <a class="navbar-brand ps-3" ></a>
        <div class="dropdown">
  <a class="navbar-brand ps-3" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Profil
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="https://www.instagram.com/pmgc.id/">Instagram</a>
    <a class="dropdown-item" href="#">Facebook</a>
    <a class="dropdown-item" href="#">Twitter</a>
  </div>
</div>
            <a class="navbar-brand ps-3" href="index.php">Daftar Team</a>
            <a class="navbar-brand ps-3" href="masuk.php">Daftar Poin Masuk </a>
            <a class="navbar-brand ps-3" href="keluar.php">Daftar Poin Keluar</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>


            <div id="layoutSidenav_content">
                <main>
                    <br>
                    <br>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Daftar Team</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Daftar Team</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Tambah Team
                        </button>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Team </th>
                                            <th>Deskripsi </th>
                                            <th>poin</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            <?php
                            $ambilsemuadatadaftar = mysqli_query($conn,"select * from daftar ");
                            $no=1;
                            while($data= mysqli_fetch_array(($ambilsemuadatadaftar))){
                                    
                                    $namateam = $data['namateam'];
                                    $deskripsi = $data['deskripsi'];
                                    $poin = $data['poin'];
                                            ?>

                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?=$namateam;?></td>
                                            <td><?=$deskripsi;?></td>
                                            <td><?=$poin;?></td>
                                        </tr>
                                        <?php
                                    };
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Faris Rizaldi</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>

    <!-- The Modal -->
    <div class="modal fade" id="myModal" >
    <div class="modal-dialog">
    <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
        <h4 class="modal-title">Tambah Team</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
            <label>Nama Team </label><br>
        <input type="text" name="namateam"  class="from-control"><br>
        <br>
            <label>Namaplayer</label><br>
        <input type="text" name="deskripsi"  class="from-control"><br>
        <br>
            <label>Poin</label><br>
        <input type="number" name="poin
        
        " class="from-control"><br>
        <br>
        <button type="submit" class="btn btn-primary" name="addnewteam">OK</button>
        </div>
        
        </form>
        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
    </div>
    </div>
</div>

</html>
