<?php
include "./includes/db.php";
$error = "";
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password  = $_POST['password'];
    echo $email . ' ' . $password;

    $sql = "select * from admins where email = '$email' and password = '$password'";
    $r = $conn->query($sql);
    if (mysqli_num_rows($r) >= 1) {
        $row = mysqli_fetch_assoc($r);
        $_SESSION['admin'] = $row['id'];
        header("location: index.php");
    } else {
        $error = "Please enter valid credentials";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Login | SLR</title>

    <meta name="description" content="SLR">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <link rel="shortcut icon" href="/assets/media/logo.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/style.css">
</head>

<body>
    <div id="page-container" class="main-content-boxed">
        <main id="main-container">
            <div class="bg-gd-dusk">
                <div class="hero-static content content-full bg-body-extra-light">
                    <div class="py-4 px-1 text-center mb-4">
                        <img src="/assets/media/logo.png" width="200" class="img img-responsive" />
                        <h1 class="h3 fw-bold mt-5 mb-2">Welcome to Admin Panel</h1>
                        <h2 class="h5 fw-medium text-muted mb-0">Please sign in</h2>
                    </div>
                    <?php if ($error != '') { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error;?>
                        </div>
                    <?php } ?>
                    <div class="row justify-content-center px-1">
                        <div class="col-sm-8 col-md-6 col-xl-4">
                            <form class="js-validation-signin" action="index.php" method="POST">
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="login-username" name="email" placeholder="Enter your username">
                                    <label class="form-label" for="login-username">Email</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="password" class="form-control" id="login-password" name="password" placeholder="Enter your password">
                                    <label class="form-label" for="login-password">Password</label>
                                </div>
                                <div class="row g-sm mb-4">
                                    <div class="col-12 mb-2">
                                        <button type="submit" class="btn btn-lg btn-alt-primary w-100 py-3 fw-semibold" name="login">
                                            Sign In
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/lib/jquery.min.js"></script>
</body>

</html>