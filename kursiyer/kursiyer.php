<?php include("header.php")?>
<div class="admin-container">
        <h1>Kursiyer Paneli</h1>

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
                        <th>Kurs Kategorisi</th>
                        <th>Kurs Ödeme</th>
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
                    $sql= "SELECT * FROM kursiyer ";
                    $result=$connection->query($sql);

                    if(!$result){
                        die("Invalid query:" .$connection->error);
                    }
                    
                    
                    
                    $rows = $result->fetch_all(MYSQLI_ASSOC);

                    foreach ($rows as $row) {
                        echo "<tr>
                            <td>".$row["kursiyer_id"]."</td>
                            <td>".$row["kursiyer_ad"]."</td>
                            <td>".$row["kursiyer_soyad"]."</td>
                            <td>".$row["kursiyer_tc"]."</td>
                            <td>".$row["kursiyer_mail"]."</td>
                            <td>".$row["kursiyer_tel"]."</td>
                            <td>".$row["kurs_ad"]."</td>
                            <td>".$row["kursiyer_odeme"]."</td>
                            <td>
                            <a href='edit.php?id={$row["kursiyer_id"]}' style=' color:orange'>Düzenle</a>
                            <a href='delete.php?id={$row["kursiyer_id"]}' style='color:red' onclick=\"return confirm('Silmek istediğinize emin misiniz?');\">Sil</a>
                            </td>
                        </tr>";
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>

<?php include("../sidebar/footer.php")?>
