<!DOCTYPE html>
<html>

<head>
    <title>Jurnal Online</title>
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/css/style.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>

    <?php if (isset($error)) : ?>
        <script>
            swal({
                title: "Username atau password salah",
                text: "Silahkan coba lagi",
                icon: "error",
                dangerMode: true,
            })
        </script>
    <?php endif; ?>
    <img class="wave" src="<?php echo base_url('assets/img/wave.png'); ?>">
    <div class="container">
        <div class="img">
            <img src="<?php echo base_url('assets/img/bg.svg'); ?>">
        </div>
        <div class="login-content">
            <?php echo validation_errors(); ?>
            <form action="http://localhost:8080/CI3RWEB8/Login/aksi" method="post">
                <img src="<?php echo base_url('assets/img/avatar.svg'); ?>">
                <h2 class="title">Welcome</h2><br>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <input type="text" name="email" id="username" placeholder="Email" autocomplete="off" required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                </div>
                <a href="register.php">Belum Punya Akun?</a>
                <button type="submit" name="simpan" class="btn">Login</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>

</html>