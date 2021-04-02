<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "energy";

$conn = new mysqli($server, $user, $pass, $database);

if($conn->connect_error){
    die("connection failed");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Niels Bos">
    <meta name="keywords" content="">
<title>aanbiedingen</title>
<link rel="stylesheet" href="aanbiedingen2.css">
</head>
    <body>
<header>
</header>

<?php

$sql = "SELECT * FROM aanbiedingen WHERE aanbiedingen_id=".$_GET['id'];
if($result = $conn->query($sql)){
    $row = $result->fetch_object();
    echo "<section id='titel'>".$row->titel."</section>";
    echo "<section id='begindatum'>".$row->begindatum."</section>";
    echo "<section id='omschrijving'>".$row->omschrijving."</section>";

}else{
    echo "Geen aanbiedingen.";
}
$result->close();
?>
</body>
</html>

<?php
$conn->close();
?>