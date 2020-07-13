<div class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-light ">

            <a class="navbar-brand ml-3" href="<?php echo base_url()?>"">
                <img width="100" src="<?php echo base_url() . 'assets/images/logo.png' ?>" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-5 ">
                        <a class="nav-link <?php if($active=="Home"){echo "active";}?>" href="<?php echo site_url().''?>">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item mr-5 ">
                        <a class="nav-link <?php if($active=="Kelaslist"){echo "active";}?>" href="<?php echo site_url().'kelaslist'?>">Kelas</a>
                    </li>

                    <li class="nav-item mr-5 ">
                        <a class="nav-link <?php if($active=="Signup"){echo "active";}?>" href="<?php echo site_url().'signup'?>">Daftar</a>
                    </li>

                    <li class="nav-item ">
                        <a class="btn btn-secondary <?php if($active=="Signin"){echo "active";}?>" href="<?php echo site_url().'signin'?>" role="button">Masuk</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>