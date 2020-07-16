<!DOCTYPE html>
<html lang="en">

<!-- head -->
<?php $this->load->view('v_head'); ?>
<!-- head-end -->

<body>
    <!-- navbar -->
    <?php $this->load->view('v_navbar'); ?>
    <!-- navbar-end  -->
    <?= $this->session->flashdata('message'); ?>
    <!-- section1 -->
    <section class="bg-form">
        <form class="form-signin" action="<?php echo base_url() . 'Signup/simpan_user' ?>" method="post" enctype="multipart/form-data">
            <div class="row d-flex justify-content-center">
                <img class="mb-4 justify-content-center" src="<?php echo base_url() . 'assets/images/logo.png' ?>" alt="" width="100">
            </div>
            <div class="row mb-3">
                <div class="col d-flex justify-content-center">
                    <a href="<?php echo base_url() . 'Signin' ?>" class="border-bottom-disabled">Masuk</a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="<?php echo base_url() . 'Signup' ?>" class="border-bottom">Daftar</a>
                </div>
            </div>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="xemail" class="form-control mb-3" placeholder="Email address" required autofocus clean>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="xpassword1" class="form-control mb-3" placeholder="Password" required>
            <label for="inputPassword" class="sr-only">Repeat Password</label>
            <input type="password" id="inputPassword" name="xpassword2" class="form-control mb-3" placeholder="Repeat Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
        </form>
    </section>
    <!-- section1-end  -->

    <!-- footer  -->
    <footer class="footer">

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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>


</body>

</html>