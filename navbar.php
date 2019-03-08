	<header id="home" class="header">
		<div class="main_menu_bg navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="nave_menu">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a class="navbar-brand" href="index.php">
							<div class="logo">
								<img src="images/logo.png" alt="" />
							</div>
						  </a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <?php
						  echo '<ul class="nav navbar-nav navbar-right">';
						   if ($_SESSION['login'] == 'Admin') {
                            echo    '
                            		<li>
				                        <a href="home.php">Home</a>
				                    </li>
				                    <li>
				                        <a href="profile.php">Profile</a>
				                    </li>
                    				<li>
                                        <a href="a_verifikasi.php">Verifikasi data PKL</a>
                                    </li>
                                    <li>
                                        <a href="#">List PKL</a>
                                    </li>
                                    <li>
                                        <a href="#">Manage Database</a>
                                    </li>
                                    <li>
                        			<a href="logout.php">Logout</a>
                    				</li>';
                        } elseif ($_SESSION['login'] == 'Mahasiswa') {
                            # code...
                            echo    '
                            		<li>
				                        <a href="home.php">Home</a>
				                    </li>
				                    <li>
				                        <a href="profile.php">Your Profile</a>
				                    </li>
                                    <li>
                                        <a href="m_pengajuan.php">Pengajuan PKL</a>
                                    </li>
                                    <li>
                                        <a href="m_status.php">Status Pengajuan</a>
                                    </li>
                                    <li>
                        			<a href="logout.php">Logout</a>
                    				</li>
                                    ';
                        } elseif ($_SESSION['login'] == 'Dosen') {
                            echo    '
                            		<li>
				                        <a href="home.php">Home</a>
				                    </li>
				                    <li>
				                        <a href="profile.php">Your Profile</a>
				                    </li>
                                    <li>
                                        <a href="#">Pengajuan Mahasiswa PKL</a>
                                    </li>
                                    <li>
                                        <a href="#">Pengajuan Diterima</a>
                                    </li>
                                    <li>
                        			<a href="logout.php">Logout</a>
                    				</li>
                                    ';
                        } elseif ($_SESSION['login'] == 'Perusahaan'){
                            echo    '
                            		<li>
				                        <a href="home.php">Home</a>
				                    </li>
				                    <li>
				                        <a href="profile.php">Your Profile</a>
				                    </li>
                                    <li>
                                        <a href="p_persetujuan.php">Persetujuan</a>
                                    </li>
                                    <li>
                                        <a href="#">Pengajuan Mahasiswa PKL</a>
                                    </li>
                                    <li>
                                        <a href="#">Pengajuan Diterima</a>
                                    </li>
                                    <li>
                        			<a href="logout.php">Logout</a>
                    				</li>
                                    ';
                        }else echo '
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>					
							<li><a href="galeri.php">Galeri</a></lli>
							<li><a href="contact.php">Contact</a></li>
							<li><a href="login.php">Login</a></li>
						  ';
						  echo "</ul>";
						  ?>
						</div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
					</div>	
				</div><!--End of row -->
				
			</div><!--End of container -->
			
		</div>
	</header> <!--End of header -->