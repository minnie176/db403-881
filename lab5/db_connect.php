<?php
$conn = new mysqli('db403-mysql', 'root', 'P@sswOrd', 'northwind');
if ($conn->connect_error) {
    die($conn->connrct_error);
}
?>