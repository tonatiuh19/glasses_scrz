<?php
require_once('../../admin/cnn.php');
date_default_timezone_set('America/Mexico_City');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = test_input($_POST["mail"]);
    $street = test_input($_POST["street"]);
    $city = test_input($_POST["city"]);
    $cp = test_input($_POST["cp"]);
    $idProduct = test_input($_POST["idProduct"]);
    $link = test_input($_POST["link"]);
    $prescri = test_input($_POST["typeOf"]);
    $magni = test_input($_POST["magni"]);
    $today = date("Y-m-d H:i:s");

    $sql = "INSERT INTO orders (email, street, city, cp, sku, prescription, date, magnification)
    VALUES ('$mail', '$street', '$city', '$cp', '$idProduct', '$prescri', '$today', '$magni')";

    if ($conn->query($sql) === TRUE) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.location.href='".$link."';
        </SCRIPT>");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

}else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.location.href='../';
        </SCRIPT>");
}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>