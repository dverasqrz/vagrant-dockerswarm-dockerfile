<html>

<head>
<title>Exemplo PHP Diego</title>
</head>
<body>

<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "150.165.250.207";
$username = "root";
$password = "K5+wHDKz3Gf";
$database = "meubanco";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();
$host_ip = $_SERVER['REMOTE_ADDR'];


$query = "INSERT INTO dados (id, data1, data2, hostname, ip) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$host_name', '$host_ip')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}

?>
</body>
</html>