<?php session_start();  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Sistem PKL Online</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="style5.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>PKL Online</h3>
                </div>

                <ul class="list-unstyled components">
                    <p>Mahasiswa</p>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Profile</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="p_perusahaan1.php">Your Profile</a></li>
                            <li><a href="p_perusahaan2.php">Edit Profile</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pengajuan PKL</a>
                    </li>
                    <li>
                        <a href="#">Status Pengajuan</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">llololo</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <?php
                if ($_SESSION["login"] == "Mahasiswa") {
                    include 'mahasiswa.php';
                } elseif ($_SESSION["login"] == "Dosen") {
                    include 'dosen.php';
                } elseif ($_SESSION["login"] == "Perusahaan") {
                    include 'perusahaan.php';
                }else {
                    include 'admin.php';
                }
                ?>

            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
