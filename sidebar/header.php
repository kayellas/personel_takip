<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>
    <link rel="stylesheet" href="styleadmin.css">

    <!-- ===== google fonts ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- ===== google material icon ===== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

     <!-- ===== CSS ===== -->
     <link rel="stylesheet" href="assets/css/styles.css">
     <link rel="stylesheet" href="bootstrap.css">
     <link rel="stylesheet" href="fonts.css">
     <link rel="stylesheet" href="../sidebar/assets/css/styles.css  ">
     <link rel="import" href="/charts/donutchart.html">
     <script src='https://www.gstatic.com/charts/loader.js'></script>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript"></script>
     <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script> 


</head>
<body>

    <!--Sidebar Başlangıcı-->
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="../sidebar/home.php" class="nav__logo">ETAD GRUP</a>
                    </div>
                    <div class="nav__list">
                        <div class="sidebar"> <!-- eklendi-->
               
    
                        <a href="../sidebar/home.php" class="nav__link">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Dashboard</span>
                        </a>
                        
                        <a href="../admin/panel.php" class="nav__link active">
                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                            <span  class="nav__name">Personel</span>
                        </a>

                        <a href="../egitmen/egitmen.php" class="nav__link">
                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Eğitmen</span>
                        </a>

                        <a href="../kursiyer/kursiyer.php" class="nav__link">
                            <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Kursiyer</span>
                        </a>

                        <a href="../kurslar/kurs.php" class="nav__link">
                            <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Kurslar</span>
                         </a>
                    </div>
                </div>
                <a href="../sidebar/login.html" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
     
        
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script src="../sidebar/assets/js/main.js"></script>

    <!--Sidebar Bitiş-->
