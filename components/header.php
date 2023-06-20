
<?php 
    $msg = "";
    $error = "";
    include "includes/db.php";
    if(!isset($_SESSION['admin'])){
        header("location: login.php");
    }else{
        $id = $_SESSION['admin'];
        $sql = "select * from admins where id = '$id'";
        $r = $conn->query($sql);
        $admin = mysqli_fetch_assoc($r);
    }
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Admin Panel | SLR</title>

    <meta name="description" content="SLR - Student Learning Revolution">
    <meta name="author" content="Umair Abbas">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="SLR">
    <meta property="og:site_name" content="SLR">
    <meta property="og:description" content="SLR Admin Panel">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="shortcut icon" href="assets/media/logo.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/logo.php">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/logo.png">

    <link rel="stylesheet" href="assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/style.css">
</head>

<body>
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">