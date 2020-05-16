<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "orsrmt"; /* Database name */

$koneksi = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$koneksi) {
 die("Connection failed: " . mysqli_connect_error());
}