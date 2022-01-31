<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Prize Pulsa | Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?php echo base_url(); ?>/assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?php echo base_url(); ?>/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?php echo base_url(); ?>/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/atlantis.css">
</head>

<body class="login">
    <div class="wrapper wrapper-login wrapper-login-full p-0">
        <div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient">
            <h1 class="title fw-bold text-white mb-3">Prize Pulsa</h1>
            <p class="subtitle text-white op-7">Ayo bergabung dengan komunitas kami untuk masa depan yang lebih baik</p>
        </div>
        <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
            <div class="container container-login container-transparent animated fadeIn">
                <h3 class="text-center">Sign In To Admin</h3>

                <?php
                if (isset($_GET['alert'])) {
                    if ($_GET['alert'] == "gagal") {
                        echo "<div class='alert alert-danger'>Maaf! Username & Password Salah.</div>";
                    } else if ($_GET['alert'] == "belum_login") {
                        echo "<div class='alert alert-danger'>Anda Harus Login Terlebih Dulu!</div>";
                    } else if ($_GET['alert'] == "logout") {
                        echo "<div class='alert alert-success'>Anda Telah Logout!</div>";
                    }
                }
                ?>

                <form action="<?php echo base_url() . 'login/aksi' ?>" method="post">
                    <div class="login-form">
                        <div class="form-group">
                            <label class="placeholder"><b>Username</b></label>
                            <input name="username" type="text" class="form-control" required>
                            <?php echo form_error('username'); ?>
                        </div>
                        <div class="form-group">
                            <label class="placeholder"><b>Password</b></label>
                            <div class="position-relative">
                                <input name="password" type="password" class="form-control" required>
                                <div class="show-password">
                                    <i class="icon-eye"></i>
                                </div>
                            </div>
                            <?php echo form_error('password'); ?>
                        </div>
                        <div class="form-group form-action-d-flex mb-3">
                            <a href="#" id="show-signup" class="link">Kembali ke beranda</a>
                            <button type="submit" class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Sign In</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/core/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/core/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/atlantis.min.js"></script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(300, 0).slideUp(300, function() {
                $(this).remove();
            });
        }, 3000);
    </script>
</body>

</html>