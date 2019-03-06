        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h2>PKL Online</h2>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Profile</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="profile.php">Your Profile</a></li>
                            <li><a href="edit.php">Edit Profile</a></li>
                        </ul>
                    </li>
                    <?php
                        if ($_SESSION['login'] == 'Admin') {
                            echo    '<li>
                                        <a href="#">Verifikasi data PKL</a>
                                    </li>
                                    <li>
                                        <a href="#">List PKL</a>
                                    </li>
                                    <li>
                                        <a href="#">Manage Database</a>
                                    </li>';
                        } elseif ($_SESSION['login'] == 'Mahasiswa') {
                            # code...
                            echo    '
                                    <li>
                                        <a href="#">Pengajuan PKL</a>
                                    </li>
                                    <li>
                                        <a href="#">Status Pengajuan</a>
                                    </li>
                                    ';
                        } elseif ($_SESSION['login'] == 'Dosen') {
                            echo    '
                                    <li>
                                        <a href="#">Pengajuan Mahasiswa PKL</a>
                                    </li>
                                    <li>
                                        <a href="#">Pengajuan Diterima</a>
                                    </li>
                                    ';
                        } else {
                            echo    '
                                    <li>
                                        <a href="p_persetujuan.php">Persetujuan</a>
                                    </li>
                                    <li>
                                        <a href="#">Pengajuan Mahasiswa PKL</a>
                                    </li>
                                    <li>
                                        <a href="#">Pengajuan Diterima</a>
                                    </li>
                                    ';
                        }
                    ?>


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
                            <ul class="nav navbar-nav navbar-left">
                                <li><a class="navbar-btn" href="#"><?php echo $_SESSION["login_user"]; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>


                

