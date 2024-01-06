<?php include("header.php")?>

<!--DASHBOARD Başlangıcı-->
<script>

             google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart1() {
            var data = google.visualization.arrayToDataTable([ 
              ['Kurs Kategorilendirme', 'Kurs Sayısı'],
              ['Silahlı Eğitim',     11],
              ['Silahsız Eğitim',      13],
              ['İlk Yardım',  5],
              ['Temel Eğitim', 7],
              ['Yenileme',    2]
            ]);
    
            var options = {
              title: 'Kurs Kategorilendirme',
            };
    
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
          }


            google.charts.load('upcoming', {'packages': ['vegachart']}).then(drawChart1);
 
            function drawChart() {
        const dataTable = new google.visualization.DataTable();
        dataTable.addColumn({type: 'string', 'id': 'category'});
        dataTable.addColumn({type: 'number', 'id': 'amount'});
        dataTable.addRows([
          ['Ocak', 28],
          ['Şubat', 55],
          ['Mart', 43],
          ['Nisan', 91],
          ['Mayıs', 81],
          ['Haziran', 53],
          ['Temmuz', 19],
          ['Ağustos', 87],
          ['Eylül', 81],
          ['Ekim', 53],
          ['Kasım', 19],
          ['Aralık', 87],
        ]);
        

        const options = {
          "vega": {
            "$schema": "https://vega.github.io/schema/vega/v4.json",
            "width": 500,
            "height": 200,
            "padding": 5,

            'data': [{'name': 'table', 'source': 'datatable'}],

            "signals": [
              {
                "name": "tooltip",
                "value": {},
                "on": [
                  {"events": "rect:mouseover", "update": "datum"},
                  {"events": "rect:mouseout",  "update": "{}"}
                ]
              }
            ],

            "scales": [
              {
                "name": "xscale",
                "type": "band",
                "domain": {"data": "table", "field": "category"},
                "range": "width",
                "padding": 0.05,
                "round": true
              },
              {
                "name": "yscale",
                "domain": {"data": "table", "field": "amount"},
                "nice": true,
                "range": "height"
              }
            ],

            "axes": [
              { "orient": "bottom", "scale": "xscale" },
              { "orient": "left", "scale": "yscale" }
            ],

            "marks": [
              {
                "type": "rect",
                "from": {"data":"table"},
                "encode": {
                  "enter": {
                    "x": {"scale": "xscale", "field": "category"},
                    "width": {"scale": "xscale", "band": 1},
                    "y": {"scale": "yscale", "field": "amount"},
                    "y2": {"scale": "yscale", "value": 0}
                  },
                  "update": {
                    "fill": {"value": "steelblue"}
                  },
                  "hover": {
                    "fill": {"value": "red"}
                  }
                }
              },
              {
                "type": "text",
                "encode": {
                  "enter": {
                    "align": {"value": "center"},
                    "baseline": {"value": "bottom"},
                    "fill": {"value": "#333"}
                  },
                  "update": {
                    "x": {"scale": "xscale", "signal": "tooltip.category", "band": 0.5},
                    "y": {"scale": "yscale", "signal": "tooltip.amount", "offset": -2},
                    "text": {"signal": "tooltip.amount"},
                    "fillOpacity": [
                      {"test": "datum === tooltip", "value": 0},
                      {"value": 1}
                    ]
                  }
                }
              }
            ]
          }
        };

        const chart = new google.visualization.VegaChart(document.getElementById('chart-div'));
        chart.draw(dataTable, options);
      }


</script>
    </head>
    <body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="#" class="nav__logo">ETAD GRUP</a>
                    </div>
                    <div class="nav__list">
                        <div class="sidebar"> <!-- eklendi-->
               

                        <a href="home.php" class="nav__link active">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Dashboard</span>
                        </a>
                        <!-- <div  class="nav__link collapse"> her sekmede vardı-->
                            <a href="../admin/panel.php" class="nav__link">
                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Personel</span>

                            <a href="../egitmen/egitmen.php" class="nav__link">
                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Eğitmen</span>

                            <a href="../kursiyer/kursiyer.php" class="nav__link">
                            <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Kursiyer</span>
                            </a>

                            <a href="../kurslar/kurs.php" class="nav__link">
                            <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Kurslar</span>
                            </a>
                        
                        </div> <!-- eklendi-->
                    </div>
                </div>
                <a href="../sidebar/login.html" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        
        
        
        
        <h1>Dashboard</h1>
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script src="assets/js/main.js"></script>
    </body>
    <body>
        <div class="container">
            <div class="header" style="width: 2700px; height: -10px;">
                <div class="nav">
                    <div class="search">
                        <!-- <input type="text" placeholder="Ara.."> -->
                        <!-- <button type="submit"><img src="search.png" alt=""></button>  -->
                        <div class="user" >
                            <div class="img-case" style="width: 50px; height: 50px; position:fixed">
                                <img src="user.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="content">
                <div class="cards">
                    <div class="card">
                        <div class="box">
                        <?php
                            $servername= "localhost";
                            $username="root";
                            $password="";
                            $database="personel_takip";
                            
                            $connection= new mysqli($servername,$username,$password,$database);
                            if($connection->connect_error){
                                die("Connection failed". $connection->connect_error);
                            }
                            $sql= "SELECT COUNT(*) as kursiyer FROM kursiyer";
                            $result=$connection->query($sql);

                            if ($result->num_rows > 0) {
                              $row = $result->fetch_assoc();
                              $kursiyer = $row['kursiyer'];
                          } else {
                              $kursiyer = 0;
                          }
                          ?>

                            <!-- Replace the static content with PHP variable -->
                            <div class="box">
                                <h1><?php echo $kursiyer; ?></h1>
                                <h3>Toplam Kursiyer</h3>
                            </div>

                        </div>
                        <div class="icon-case">
                            <img src="students (1).png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                        <?php
                            $servername= "localhost";
                            $username="root";
                            $password="";
                            $database="personel_takip";
                            
                            $connection= new mysqli($servername,$username,$password,$database);
                            if($connection->connect_error){
                                die("Connection failed". $connection->connect_error);
                            }
                            $sql= "SELECT COUNT(*) as kurs FROM kurs";
                            $result=$connection->query($sql);

                            if ($result->num_rows > 0) {
                              $row = $result->fetch_assoc();
                              $kurs = $row['kurs'];
                          } else {
                              $kurs = 0;
                          }
                          ?>
                            <!-- Replace the static content with PHP variable -->
                            <div class="box">
                                <h1><?php echo $kurs; ?></h1>
                                <h3>Toplam Kurs</h3>
                            </div>
                        </div>
                        <div class="icon-case">
                            <img src="income.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                        <?php
                            $servername= "localhost";
                            $username="root";
                            $password="";
                            $database="personel_takip";
                            
                            $connection= new mysqli($servername,$username,$password,$database);
                            if($connection->connect_error){
                                die("Connection failed". $connection->connect_error);
                            }
                            $sql= "SELECT COUNT(*)as personel FROM personel,personel_tur where personel.personel_tur_id=personel_tur.personel_tur_id and personel_tur_ad='Eğitmen'";
                            $result=$connection->query($sql);

                            if ($result->num_rows > 0) {
                              $row = $result->fetch_assoc();
                              $personel = $row['personel'];
                          } else {
                              $personel = 0;
                          }
                          ?>
                            <!-- Replace the static content with PHP variable -->
                            <div class="box">
                                <h1><?php echo $personel; ?></h1>
                                <h3>Toplam Eğitmen</h3>
                            </div>
                        </div>
                        <div class="icon-case">
                            <img src="income.png" alt="">
                        </div>
                    </div>
                    <div class="card">
                      <div class="box">
                      <?php
                            $servername= "localhost";
                            $username="root";
                            $password="";
                            $database="personel_takip";
                            
                            $connection= new mysqli($servername,$username,$password,$database);
                            if($connection->connect_error){
                                die("Connection failed". $connection->connect_error);
                            }
                            $sql = "SELECT SUM(kursiyer_odeme) as kursiyerO FROM kursiyer";
                            $result = $connection->query($sql);
                            
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $kursiyerO = $row['kursiyerO'];
                            } else {
                                $kursiyerO = 0;
                            }
                            ?>
                            <!-- Replace the static content with PHP variable -->
                            <div class="box">
                                <h1><?php echo $kursiyerO; ?></h1>
                                <h3>Günlük Ödeme</h3>
                            </div>
                        </div>
                        <div class="icon-case">
                            <img src="students (1).png" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="graphBox">
                    <h2>Grafikler</h2>
                    <br>
                    
                    <div class="box">
                        <div id="piechart" class= "pie" style="width: 500px; height: 250px;"></div>
                    </div>
                    <div class="box">
                        <div id="chart-div"  class="bar" style="width: 500px; height: 250px;"></div>
                    </div>
                   <br>
                </div>

                <div class="content-2">
                    <div class="recent-payments">
                        <div class="title">
                            <h2>Güncel Durum</h2>
                            <a href="#" class="btn">Tamamı</a>
                        </div>
                       
                        <table>
                            <tr>
                                <th>Adı</th>
                                <th>Soyadı</th>
                                <th>Kurs Başlangıç Tarihi</th>
                                <th>Kurs Bitiş Tarihi</th>
                                <th>Kurs Ödeme Tutarı</th>
                                <th>Kurs Adı</th>
                            </tr>
                            <tr>

                            <?php
                              $servername= "localhost";
                              $username="root";
                              $password="";
                              $database="personel_takip";
                              
                              $connection= new mysqli($servername,$username,$password,$database);
                              if($connection->connect_error){
                                  die("Connection failed". $connection->connect_error);
                              }
                              $sql = "SELECT * FROM kursiyer ORDER BY kursiyer_baslangic DESC LIMIT 5";

                              $result = $connection->query($sql);

                              if ($result->num_rows > 0) {
                                  while ($row = $result->fetch_assoc()) {
                                      echo "<tr>";
                                      echo "<td>{$row['kursiyer_ad']}</td>";
                                      echo "<td>{$row['kursiyer_soyad']}</td>"; 
                                      echo "<td>{$row['kursiyer_baslangic']}</td>"; 
                                      echo "<td>{$row['kursiyer_bitis']}</td>"; 
                                      echo "<td>{$row['kursiyer_odeme']}</td>"; 
                                      echo "<td>{$row['kurs_ad']}</td>";
                                      echo "</tr>";
                                    }
                              } else {
                                  echo "<tr><td colspan='4'>No records found</td></tr>";
                              }

                              ?></tr>
                        </table>
                    </div>
                    <div class="new-students">
                        <div class="title">
                          
                            <h2>Yeni Öğrenci</h2>
                            <a href="#" class="btn">Tamamı</a>
                        </div>
                        <Table>
                          <tbody>
                            <tr>
                                <th>Profil</th>
                                <th>Adı</th>
                                <th>Soyadı</th>
                                <th>Kurs Adı</th>
                            </tr>
                            <tr>
                            <?php
                              $servername= "localhost";
                              $username="root";
                              $password="";
                              $database="personel_takip";
                              
                              $connection= new mysqli($servername,$username,$password,$database);
                              if($connection->connect_error){
                                  die("Connection failed". $connection->connect_error);
                              }
                              $sql = "SELECT * FROM kursiyer ORDER BY kursiyer_id DESC LIMIT 3"; // Fetch the latest 2 records

                              $result = $connection->query($sql);

                              if ($result->num_rows > 0) {
                                  while ($row = $result->fetch_assoc()) {
                                      echo "<tr>";
                                      echo "<td><img src='user.png' alt=''></td>";
                                      echo "<td>{$row['kursiyer_ad']}</td>";
                                      echo "<td>{$row['kursiyer_soyad']}</td>"; 
                                      echo "<td>{$row['kurs_ad']}</td>";
                                      echo "</tr>";
                                    }
                              } else {
                                  echo "<tr><td colspan='4'>No records found</td></tr>";
                              }

                              ?>
                          </tbody>
                        </Table>
                    </div>
                </div>
            </div>
    </body>
<?php include("../sidebar/footer.php")?>
   