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
<link rel="stylesheet" type="text/css" href="aanbiedingen.css">
</head>
<body>
<header>
</header>

<nav id="navigatie">
       <ul>
            <li> <a class="navigatie-menu" href="">menu</a></li>
            <li> <a class="navigatie-menu" href="">menu</a></li>
            <li> <a class="navigatie-menu" href="">menu</a></li>
            <li> <a class="navigatie-menu" href="">menu</a></li>
            <li> <a class="navigatie-menu" href="">menu</a></li>
            <li> <a class="navigatie-menu" href="">menu</a></li>
       </ul>
</nav>

</header>

<div class="nav">
        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        <div class="menu">
            <a href="#">Menu</a>
            <a href="#">Menu</a>
            <a href="#">Menu</a>
            <a href="#">Menu</a>
            <a href="#">Menu</a>
            <a href="#">Menu</a>
        </div>
    </div>

   <main>
<?php

$sql = "SELECT * FROM aanbiedingen";
if($result = $conn->query($sql)){

while($row = $result->fetch_object()){
    echo "<section><a href='aanbiedingen2.php?id=".$row->aanbiedingen_id."'>".$row->titel."</section>";
}

}else{
    echo "Geen aanbiedingen weer te geven.";
}
$result->close();

?>
<main>
</body>
</html>
<?php
$conn->close();
?>

