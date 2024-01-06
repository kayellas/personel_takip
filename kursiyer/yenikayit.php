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
    
                            <a href="../kursiyer/kursiyer.php" class="nav__link active">
                                <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                                <span class="nav__name">Kursiyer</span>
                            </a>
    
                            <a href="../kurslar/kurs.php" class="nav__link">
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
         
            
            <h1>Kursiyer Yeni Kayıt Sayfası</h1>
            <!-- ===== IONICONS ===== -->
            <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
            
            <!-- ===== MAIN JS ===== -->
            <script src="../sidebar/assets/js/main.js"></script>
    
        <!--Sidebar Bitiş-->
<form action="#" method="post">
    <div class="panel-container">
        <div class="form-container">
            <h1 id="kayit">Kursiyer Yeni Kayıt</h1>


            <!-- Kullanıcı Ekleme Formu -->
            <div class="kayit_tablo">
                <!-- Kişisel Bilgiler -->
                <div class="form-section">
                    <h2>Kayıt Bilgileri</h2>
                    <label for="firstName">Ad:</label>
                    <input type="text" id="kursiyer_ad" name="kursiyer_ad" required>

                    <label for="lastName">Soyad:</label>
                    <input type="text" id="kursiyer_soyad" name="kursiyer_soyad" required>

                    <label for="tcKimlik">TC Kimlik:</label>
                    <input type="text" id="kursiyer_tc" name="kursiyer_tc" required>
                </div>

                <!-- İletişim Bilgileri -->
                <div class="form-section">
                    <h2>İletişim Bilgileri</h2>
                    <label for="email">Email:</label>
                    <input type="email" id="kursiyer_mail" name="kursiyer_mail" required>

                    <label for="phoneNumber">Telefon Numarası:</label>
                    <input type="tel" id="kursiyer_tel" name="kursiyer_tel" required>

<!--                     <label for="adress">Adres:</label>
                    <input type="adress" id="adress" name="adress" required> -->
                </div>
                

                <!-- Rol Bilgileri -->
                <div class="form-section">
                    <h2>Kayıt Tipi</h2>
                    <label for="role">Rol:</label>
                    <select id="kurs_ad" name="kurs_ad" required >
                        <option value="500">Silahlı Eğitim</option>
                        <option value="501">Silahsız Eğitim</option>
                        <option value="502">Temel İlk Yardım Eğitim </option>
                        <option value="503">Afad Eğitim</option>
                    </select>
                </div>
            </div>
            <button type="submit">Ekle</button>
        </div>

        <!-- Diğer İçerik -->
    </div>
</form>

    <script src="kursiyer.js"></script>
    <?php
    $kursiyer_id=$_POST['kursiyer_id'];
    $kursiyer_ad=$_POST['kursiyer_ad'];
    $kursiyer_soyad = $_POST['kursiyer_soyad'];
    $kursiyer_tc = $_POST['kursiyer_tc'];
    $kursiyer_mail = $_POST['kursiyer_mail'];
    $kursiyer_tel = $_POST['kursiyer_tel'];
    $kurs_ad = $_POST['kurs_ad'];
/*     $kursiyer_baslangic=$_POST['kursiyer_baslangic'];
    $kursiyer_bitis=$_POST['kursiyer_bitis']; */
    $kursiyer_odeme=$_POST['kursiyer_odeme'];

    $conn = new mysqli('localhost','root','','personel_takip');
    if($conn->connect_error){
      die('Connection Failed : ' .$conn->connect_error);
    }else{
       $stmt = $conn->prepare("insert into kursiyer(kursiyer_id,kursiyer_ad,kursiyer_soyad,kursiyer_tc,kursiyer_mail,kursiyer_tel,kurs_ad,kursiyer_odeme)
          values(?,?,?,?,?,?,?,?,?,?)");
       $stmt->bind_param("isssssss",$kursiyer_id,$kursiyer_ad,$kursiyer_soyad,$kursiyer_tc,$kursiyer_mail,$kursiyer_tel,$kurs_ad,$kursiyer_odeme);
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

