<?php
$dp = new mysqli("localhost", "root", "", "usm");

if ($dp->connect_error) {
    die("<p>No se ha podido establecer la conexión con MySQL: " . $dp->connect_error . "</p>");
}
?>