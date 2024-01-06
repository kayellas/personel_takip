<?php include("header.php")?>
<!--Sidebar Başlangıcı-->
<div class="l-navbar" id="navbar">
                <nav class="nav">
                    <div>
                        <div class="nav__brand">
                            <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                            <a href="#" class="nav__logo">ETAD GRUP</a>
                        </div>
                        <div class="nav__list">
                            <div class="sidebar"> <!-- eklendi-->
                   
        
                            <a href="../sidebar/home.php" class="nav__link">
                                <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                                <span class="nav__name">Dashboard</span>
                            </a>
                            
                            <a href="../admin/panel.php" class="nav__link">
                                <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                                <span  class="nav__name">Personel</span>
                            </a>
    
                            <a href="../egitmen/egitmen.php" class="nav__link ">
                                <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                                <span class="nav__name">Eğitmen</span>
                            </a>
    
                            <a href="../kursiyer/kursiyer.php" class="nav__link">
                                <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                                <span class="nav__name">Kursiyer</span>
                            </a>
    
                            <a href="../kurslar/kurs.php" class="nav__link active">
                                <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                                <span class="nav__name">Kurslar</span>
                            </a>
                        </div>
                    </div>
                    <a href="login.html" class="nav__link">
                        <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Log Out</span>
                    </a>
                </nav>
            </div>
         
            
            <h1>Kurs Yeni Kayıt Sayfası</h1>
            <!-- ===== IONICONS ===== -->
            <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
            
            <!-- ===== MAIN JS ===== -->
            <script src="../sidebar/assets/js/main.js"></script>
    
        <!--Sidebar Bitiş-->

<form action="#" method="post">
    <div class="panel-container">
            <div class="form-container">
                <h1 id="kayit">Kurs Ekleme </h1>


                <!-- Kurs Ekleme Formu -->
                <div class="kayit_tablo">
                    <!-- Kişisel Bilgiler -->
                    <div class="form-section">
                        <h2>Kayıt Bilgileri</h2>
                        <label for="firstName">Kurs Adı:</label>
                        <input type="text" id="kurs_ad" name="kurs_ad" required>

                        <label for="firstName">Kurs Fiyatı:</label>
                        <input type="text" id="kurs_fiyat" name="kurs_fiyat" required>
                    </div>
                </div>
                <button type="submit">Ekle</button>
            </div>

            <!-- Diğer İçerik -->
    </div>
</form>
    <script src="kurs.js"></script>

    <?php
    $kurs_id=$_POST['kurs_id'];
    $kurs_ad=$_POST['kurs_ad'];
    $kurs_fiyat=$_POST['kurs_fiyat'];

    
    $conn = new mysqli('localhost','root','','personel_takip');
    if($conn->connect_error){
      die('Connection Failed : ' .$conn->connect_error);
    }else{
       $stmt = $conn->prepare("insert into kurs(kurs_id,kurs_ad,kurs_fiyat)
          values(?,?,?)");
       $stmt->bind_param("iss",$kurs_id, $kurs_ad, $kurs_fiyat,);
       $stmt->execute();
       echo "registration SUccesfully...";
       $stmt->close();
       $conn->close();
    }
?>

    <script>
        function showUserForm() {
            document.getElementById("user-form").style.display = "block";
        }
    </script>
<?php include("../sidebar/footer.php")?>

