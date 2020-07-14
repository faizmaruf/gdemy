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
        <div class="position-card">
            <form class="form-signin">
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <img width="115" src="../images/Logo.png" alt="logo">
                    </div>
                </div>
                <div class="row mb-1">
                    <div class="col d-flex justify-content-center">
                        <p class="border-bottom">Edit Profil</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center mb-4">
                        <div class="row">
                            <label for="inputImg">
                                <div class="row d-flex justify-content-center">
                                    <div class="zindex-10 col d-flex justify-content-center position-absolute">
                                        <div class="row mt-4 d-flex justify-content-center select-wrapper">
                                            <input type="file" name="..." id="inputImg" class="p-5" />
                                        </div>
                                    </div>
                                    <img src="../images/faiz.JPG" alt="faiz" width="80px" height="80px"
                                        class="rounded-circle edit-img">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <label for="inputNama" class="sr-only">nama</label>
                <input type="name" id="inputNama" class="form-control mb-3" placeholder="nama" required
                    value="<?= $user['nama']; ?>" autofocus>
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" id="inputEmail" class="form-control mb-3" placeholder="email" required
                    value="<?= $user['email']; ?>">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Password"
                    value="<?= $user['user_password']; ?>">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Simpan Profil</button>
            </form>
        </div>
    </section>
    <!-- section1-end  -->

    <!-- section2 kelas list -->
    <!-- section2-end -->

    <!-- footer  -->
    <footer class="footer position-card">

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