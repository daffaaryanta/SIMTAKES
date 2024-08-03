<ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600">Selamat Datang, 
                                <?php $index = mysqli_query($koneksi,"SELECT nama from user where username='$username' AND id_role = '$id_role'");
                                $row = mysqli_fetch_array($index);
                                if ($row && $row["nama"] == !'') {
                                echo $row['nama'];
                                }else
                                {
                                echo "no class";
                                }
                                ?>
                                </span>
                                
                                    <i class="fas fa-caret-down fa-sm"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="../template/ganti_password.php">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ganti Password
                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>