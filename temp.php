<?php

$conn = mysqli_connect("localhost", "H", '', "esp32");

if (mysqli_connect_errno()) {
    die('Unable to connect to database ' . mysqli_connect_error());
}

$temperature = $_GET['temperature'];

$qry = $conn->prepare("INSERT INTO dht (temperature) VALUES ('" . $temperature . "')");

if ($qry->execute()) {
    echo "Add Success";
} else {
    echo "Add Failed";
}
