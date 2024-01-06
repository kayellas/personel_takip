<?php include("header.php")?>

<!--Eğitmen Panel Başlangıcı-->

<div class="admin-container">
        <h1>Eğitmen Paneli</h1>

        <div class="form-container">
            <!-- ===== Yeni Kayıt ===== -->
            <a href="yenikayit.php"><button id="new-record-btn" onclick="showUserForm()">Yeni Kayıt</button></a>            
        </div>


        <div class="table-container">
            <table id="personel_tablo" class="table table-striped" style="width:100%">
                <thead>
                    <style>
                        .edit i{
                            color: green;
                        }
                        .delete i{
                            color:red;
                        }
                    </style>
                    <tr>
                        <th>ID</th>
                        <th>İsim</th>
                        <th>Soyisim</th>
                        <th>TC Kimlik</th>
                        <th>Mail</th>
                        <th>Telefon Numarası</th>
                        <th>Eğitmen Kategorisi</th>
                        <th colspan="2">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Tablo içeriği buraya eklenecek -->
                    <?php
                    $servername= "localhost";
                    $username="root";
                    $password="";
                    $database="personel_takip";
                    
                    $connection= new mysqli($servername,$username,$password,$database);
                    if($connection->connect_error){
                        die("Connection failed". $connection->connect_error);
                    }
                    $sql= "SELECT * FROM personel,personel_tur where personel.personel_tur_id=personel_tur.personel_tur_id and personel_tur_ad='Eğitmen'";
                    $result=$connection->query($sql);

                    if(!$result){
                        die("Invalid query:" .$connection->error);
                    }
                    
                    
                    
                    $rows = $result->fetch_all(MYSQLI_ASSOC);

                    foreach ($rows as $row) {
                        echo "<tr>
                            <td>".$row["personel_id"]."</td>
                            <td>".$row["personel_ad"]."</td>
                            <td>".$row["personel_soyad"]."</td>
                            <td>".$row["personel_tc"]."</td>
                            <td>".$row["personel_mail"]."</td>
                            <td>".$row["personel_tel"]."</td>
                            <td>".$row["personel_tur_ad"]."</td>
                            <td>
                            <a href='edit.php?id={$row["personel_id"]}' style=' color:orange'>Düzenle</a>
                            <a href='delete.php?id={$row["personel_id"]}' style='color:red' onclick=\"return confirm('Silmek istediğinize emin misiniz?');\">Sil</a>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        
    </div>
<?php include("../sidebar/footer.php")?>
