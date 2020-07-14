<div class="w-100 position-fixed zindex-10">
        <nav class="navbar navbar-expand-lg navbar-light navbar-user p-3">

            <a class="navbar-brand ml-3" href="<?php echo site_url() . 'user/index_user' ?>">
                <img width="100" src="<?php echo base_url() . 'assets/images/logo2.png' ?>" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto ">


                    <li class="nav-item mr-5 ">
                        <a class="nav-link text-light <?php if($active=="Kelassaya"){echo "active-user";}?>" href="<?php echo site_url() . 'user/kelassaya' ?>">Kelas Saya</a>
                    </li>

                    <li class="nav-item mr-5 ">
                        <a class="nav-link text-light <?php if($active=="Katalogkelas"){echo "active-user";}?>" href="<?php echo site_url() . 'user/katalogkelas' ?>">Katalog kelas</a>
                    </li>
                 

                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/images/faiz.JPG" width="40px" height="40px" class="rounded-circle"
                                alt="gambaruser">

                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="/images/faiz.JPG" class="rounded-circle img-user-navbar" alt="gambaruser">
                                <p>
                                    <!-- namauser -->
                                    <small><?= $user['email']; ?></small>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <small class="font-nav-kecil">
                                    <a href="<?php echo base_url() . 'user/User/edit_user' ?>" class="btn btn-flat">Edit profil</a>
                                    <a href="<?php echo base_url() . 'user/User/logout' ?>" class="btn btn-flat">Keluar</a>
                                </small>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </div>