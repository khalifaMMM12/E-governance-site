<?php

    $_SERVER = "sql109.epizy.com";
    $username = "epiz_32810375";
    $password = "bv6t8rp6rT5y";
    $dbname = "epiz_32810375_governancedb";

$conn = mysqli_connect($_SERVER, $username, $password, $dbname);

if (!$conn) {
  echo "Connection failed!";
}