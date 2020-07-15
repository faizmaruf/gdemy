<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gdemy</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">  
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/custom.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/kelas_belajar.css' ?>">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- navbar -->
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
                                    <a href="<?php echo base_url() . 'user/User/edit_user' ?>" class="btn btn-flat">Edit
                                        profil</a>
                                    <a href="<?php echo base_url() . 'user/User/logout' ?>"
                                        class="btn btn-flat">Keluar</a>
                                </small>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

    <!-- navbar-end -->
    <section class="position-video">
        <div class="row">
            <div class="col-md-2 p-3 bg-light d-none d-sm-none d-md-block">

            </div>
            <div class="col-md-10   box-video">
                <div class="row">
                    <div class="col container">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe
                                src="https://www.youtube.com/embed/TVbzngJPqEQ?modestbranding=1&showinfo=0&rel=0&cc_load_policy=1"
                                width="560" height="315" frameborder="0"></iframe>
                        </div>
                        <div class="mt-1">
                            <a href="#" class="btn btn-light border">Kembali</a>
                            <a href="#" class="btn btn-info float-right">Tandai Selesai & Lanjutkan</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <aside class="col-md-2 col-lg-2 bg-white sidebar">
        <a href="#" class="" style="font-size:14px;color:#016D77"><i class="fa fa-arrow-left ml-1 mr-2 mb-1"
                style="font-size:18px;color:#016D77"></i>Kelaman utama</a>
        <div class="sidebar-sticky border">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link " href="#">

                        Dashboard <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link active-sidebar" href="#">

                        Orders
                    </a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="#">

                        Products
                    </a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="#">

                        Customers
                    </a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="#">

                        Reports
                    </a>
                </li>
                <li class="nav-item mt-2">
                    <a class="nav-link" href="#">

                        Integrations
                    </a>
                </li>
            </ul>
        </div>

    </aside>












    <!-- <section class="position-video">
        <div class="row pl-3">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="container">
                    <div class="row">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315"
                                src="https://www.youtube.com/embed/CFzVrYOKOP8?rel=0&color=white&disablekb=1"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <!-- section1 -->

    <!-- 
    <aside id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
        <div class="sidebar-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <span data-feather="home"></span>
                        Dashboard <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file"></span>
                        Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="shopping-cart"></span>
                        Products
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="users"></span>
                        Customers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="bar-chart-2"></span>
                        Reports
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="layers"></span>
                        Integrations
                    </a>
                </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved reports</span>
                <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Current month
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Last quarter
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Social engagement
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span data-feather="file-text"></span>
                        Year-end sale
                    </a>
                </li>
            </ul>
        </div>
    </aside> -->

    <!-- section1-end  -->

    <!-- section2 kelas list -->

    <!-- section2-end  -->

    <!-- footer  -->
    <!--   <footer class="footer mb-3 position-card">
        
        <div class="col-sm-12 d-flex justify-content-center mb-3">
            <div class="row">
                <span>gdemy@unsri.com | 002-010-66269735</span>
            </div>
        </div>
        <div class="col-sm-12 d-flex justify-content-center">
            <div class="row">
                <span>
                    <i class="fa fa-facebook mr-4" style="font-size:16px;color:#016D77"></i>
                    <i class="fa fa-linkedin mr-4" style="font-size:16px;color:#016D77"></i>
                    <i class="fa fa-twitter" style="font-size:16px;color:#016D77"></i>
                </span>
            </div>
        </div>
    </footer> -->
    <!-- footer-end  -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>


</body>

</html>