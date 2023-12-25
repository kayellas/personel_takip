<?php include("header.php")?>
<!--Kurs Başlangıcı-->

<div class="admin-container">
        <h1>Kurs Paneli</h1>

        <div class="form-container">
             <!--===== Yeni Kayıt =====-->
            <a href="yenikayit.php"><button id="new-record-btn" onclick="showUserForm()">Yeni Kurs</button></a>            
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
                        <th>Kurs ID</th>
                        <th>Kurs Adı</th>
                        <th>Kurs Başlangıcı </th>
                        <th>Kurs Bitişi</th>
                        <th>Kurs Fiyatı</th>
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
                    $sql= "SELECT * FROM kurs";
                    $result=$connection->query($sql);

                    if(!$result){
                        die("Invalid query:" .$connection->error);
                    }
                    
                    
                    
                    $rows = $result->fetch_all(MYSQLI_ASSOC);

                    foreach ($rows as $row) {
                        echo "<tr>
                            <td>".$row["kurs_id"]."</td>
                            <td>".$row["kurs_ad"]."</td>
                            <td>".$row["kurs_baslangic"]."</td>
                            <td>".$row["kurs_bitis"]."</td>
                            <td>".$row["kurs_fiyat"]."</td>
                            <td>
                                <a href='update'>Güncelle</a>
                                <a href='delete'>Sil</a>
                            </td>
                        </tr>";
                    }
                    ?>
                
            </table>
        </div>

        
    </div>

    <script src="kurs.js"></script>

    <script>
        function showUserForm() {
            document.getElementById("user-form").style.display = "block";
        }
    </script>
<?php include("../sidebar/footer.php")?>
   