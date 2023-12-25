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
                   
        
                            <a href="../sidebar/home.html" class="nav__link">
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
                    <a href="login.html" class="nav__link">
                        <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Log Out</span>
                    </a>
                </nav>
            </div>
         
            
            <h1>Admin Yeni Kayıt Sayfası</h1>
            <!-- ===== IONICONS ===== -->
            <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
            
            <!-- ===== MAIN JS ===== -->
            <script src="../sidebar/assets/js/main.js"></script>

        <!--Sidebar Bitiş-->
<form action="#" method="Post">
    <div class="panel-container">
        <div class="form-container">
            <h1 id="kayit">Yeni Kayıt</h1>


            <!-- Kullanıcı Ekleme Formu -->
            <div class="kayit_tablo">
                <!-- Kişisel Bilgiler -->
                <div class="form-section">
                    <h2>Kayıt Bilgileri</h2>
                    <label for="firstName">Ad:</label>
                    <input type="text" id="personel_ad" name="personel_ad" required>

                    <label for="lastName">Soyad:</label>
                    <input type="text" id="personel_soyad" name="personel_soyad" required>

                    <label for="tcKimlik">TC Kimlik:</label>
                    <input type="text" id="personel_tc" name="personel_tc" required>
                </div>

                <!-- İletişim Bilgileri -->
                <div class="form-section">
                    <h2>İletişim Bilgileri</h2>
                    <label for="email">Email:</label>
                    <input type="email" id="personel_mail" name="personel_mail" required>

                    <label for="phoneNumber">Telefon Numarası:</label>
                    <input type="tel" id="personel_tel" name="personel_tel" required>

                  <!--  <label for="adress">Adres:</label>
                    <input type="adress" id="personel_adres" name="personel_tur_id" required>-->
                </div>
                

                <!-- Rol Bilgileri -->
                <div class="form-section">
                    <h2>Kayıt Tipi</h2>
                    <label for="role">Rol:</label>
                    <select id="personel_tur_id" name="personel_tur_id" required >
                        <option value="1">Yönetici</option>
                        <option value="2">Muhasebe</option>
                        <option value="3">İnsan Kaynakları</option>
                        <option value="4">Temizlik Görevlisi</option>
                        <option value="5">Güvenlik Görevlisi</option>
                        <option value="6">Eğitmen</option>

                    </select>
                </div>
            </div>
            <button type="submit">Ekle</button>
        </div>

        <!-- Diğer İçerik -->
    </div>
</form>
    <script src="admin.js"></script>
    <?php
    $msg="Başarı";
    $personel_ad=$_POST['personel_ad'];
    $personel_soyad = $_POST['personel_soyad'];
    $personel_tc = $_POST['personel_tc'];
    $personel_mail = $_POST['personel_mail'];
    $personel_tel = $_POST['personel_tel'];
    $personel_tur_id = $_POST['personel_tur_id'];

    $conn = new mysqli('localhost','root','','personel_takip');
    if($conn->connect_error){
      die('Connection Failed : ' .$conn->connect_error);
    }else{
       $stmt = $conn->prepare("insert into personel(personel_ad,personel_soyad,personel_tc,personel_mail,personel_tel,personel_tur_id)
          values(?,?,?,?,?,?)");
       $stmt->bind_param("sssssi",$personel_ad,$personel_soyad,$personel_tc,$personel_mail,$personel_tel,$personel_tur_id);
       $stmt->execute();      
       $stmt->close();
       $conn->close();
    }

    //my other php code here
        
    
?>

    <script>
        function showUserForm() {
            document.getElementById("user-form").style.display = "block";
        }
    </script>
<?php include("../sidebar/footer.php")?>