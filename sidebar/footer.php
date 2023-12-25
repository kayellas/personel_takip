
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //retrieve from data
    
   
}
    //database connection

    $host = "localhost";
    $dbUsername = "root";
    $dbpassword = "";
    $dbName = "personel_takip";


    $conn = new mysqli($host, $dbUsername, $dbpassword, $dbName );

    if($conn-> connect_error){
        die("Bağlantı Hatası: ".$conn-> connect_error);
    }
    $conn->close();
 
?>
<script src="../sidebar/login.php"></script>

<script>
    function showUserForm() {
        document.getElementById("user-form").style.display = "block";
    }
</script>
</body>
</html>
