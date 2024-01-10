<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/img/myspp-logo.png">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <title>Register</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: #ececec;
        }

        .box-area {
            max-width: 930px;
            margin: 0 auto;
            padding: 20px;
        }

        .right-box {
            padding: 40px 30px 40px 40px;
        }

        ::placeholder {
            font-size: 16px;
        }

        .rounded-4 {
            border-radius: 20px;
        }

        .rounded-5 {
            border-radius: 30px;
        }

        @media only screen and (max-width: 768px) {
            .box-area {
                width: 100%;
            }

            .right-box {
                padding: 20px;
            }

            .left-box {
                padding: 20px;
                text-align: center;
            }

            .left-box img {
                width: 70%;
                max-width: 250px;
            }

            .header-text {
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <form action="proses_registrasi.php" method="post" data-aos="zoom-out" data-aos-delay="500">
            <div class="container d-flex justify-content-center align-items-center min-vh-100">
                <div class="row border rounded-5 p-3 bg-white shadow box-area">
                    <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                        style="background: #103cbe;">
                        <div class="featured-image mb-3">
                            <img src="assets/img/hero-carousel/sign.svg" class="img-fluid" style="width: 250px;">
                        </div>
                        <p class="text-white fs-2"
                            style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Be Verified</p>
                        <small class="text-white text-wrap text-center"
                            style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join experienced
                            transaction on this platform.</small>
                    </div>
                    <div class="col-md-6 right-box">
                        <div class="row align-items-center">
                            <div class="header-text mb-4 text-center">
                                <h2>Create an Account</h2>
                                <p>We are excited to have you join us.</p>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Username" name="username" inputmode="numeric" pattern="[0-9]*"
                                    required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Password" name="password" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Full Name" name="nama_petugas" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="hidden" class="form-control form-control-lg bg-light fs-6"
                                    placeholder="Siswa" name="level" readonly value="siswa" register>
                            </div>


                            <div class="input-group mb-3">
                                <button type="submit" class="btn btn-lg btn-primary w-100 fs-6"
                                    href="login.php">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>

</body>
<script src="assets/vendor/aos/aos.js"></script>

<script>
    AOS.init();
</script>

</html>