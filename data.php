<html>
    <body>
        <h1>Data Yang Terdaftar</h1>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="progate";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error) {
    die("Connection failed:".$conn->connect_error);
}

$sql="SELECT*FROM tugas";
$result=$conn->query($sql);
if($result->num_rows>0){
    //output data of each row
    while($row=$result->fetch_assoc()) {
        echo "no:" . $row["no"]. "-Name:" . $row["email"]." " . $row["nama"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<a href="http:/index.php">Hubungi Kami</a>
    </body>
</html>