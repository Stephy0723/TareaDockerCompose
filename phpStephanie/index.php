<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Stephanie</title>
</head>

<body>
  
<?php
$servername = getenv('MYSQL_HOST');
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$database = getenv('MYSQL_DATABASE');

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<div class="container">
<h1>Stephanie Lopez Frias</h1>
<h2><?php
echo "Connected successfully to MySQL"; ?></h1>
</div>
<?php
$conn->close();
?>
</body>
</html>