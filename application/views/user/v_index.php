<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view('v_head'); ?>
<!-- head-end -->

<body>
    <!-- navbar -->
    <?php $this->load->view('user/v_navbar_user'); ?>
    <!-- navbar-end -->

    <!-- section1 -->
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 mx-5 p-5 box-definisi-2 shadow-lg ">
                    <div class="row">
                        <div class="col-md-6 py-2 text-dark font-weight-normal">
                            <h2>Selamat Datang ...</h2>
                            <p class="mt-5">
                                Semangat guru, <br> Semangat meningkatkan mutu pendidikan.
                            </p>
                            <a href="katalog_kelas.html" class="btn btn-primary mt-3">Pilih Kelas</a>
                        </div>
                        <div class="col-md-6 d-none d-sm-none d-md-block">
                            <img width="380px" src="<?php echo base_url() . 'assets/images/bu_guru.png' ?>" alt="buguru">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section1-end  -->
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-12">
                <p class="text-lg">
                    Terakhir dipelajari
                </p>
            </div>
        </div>
    </div>

    <!-- section2 kelas list -->
    <section class="kelas ">
        <div class="album py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <div class="card-1 card-border mb-4 shadow-sm bg-white shadow-lg">
                            <div class="card-header bg-white">
                                <div class="card-img-top ">
                                    <div class="row p-3">
                                        <div class="col-xl-4 d-flex justify-content-center">
                                            <img width="100px" src="../images/word.png" alt="alternatif" class="mb-3">
                                        </div>
                                        <div class="col-xl-7 d-flex justify-content-center">
                                            <p>Pembelajaran Interaktif</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body ">
                                <h5 class="card-text text-dark">Bahan pelajaran dimana guru sebagai pemeran utama
                                    dalam
                                    mengatur
                                    suhu keaktifan siswa.</h5>
                            </div>
                            <div class="d-flex justify-content-end ">
                                <div class="row ">
                                    <div class="col p-5">
                                        <div class="col border button-mulai rounded">
                                            <a href="#" class="text-dark">Lanjut Belajar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section2-end  -->

    <!-- footer  -->
    <footer class="footer mb-3">

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
    </footer>
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