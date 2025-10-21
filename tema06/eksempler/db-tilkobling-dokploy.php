<?php  /* db-tilkobling for dokploy */
/*
/*  Programmet foretar tilkobling til database-server og valg av database
*/

// Sjekk om miljøvariablene er satt
$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');

if (!$host || !$username || !$password || !$database) {
    die("Manglende databasekonfigurasjon. Kontakt systemadministrator.");
}

// Prøv å koble til databasen
$db = mysqli_connect($host, $username, $password, $database);
if (!$db) {
    die("Kunne ikke koble til databasen: " . mysqli_connect_error());
}

// Sett karaktersett
mysqli_set_charset($db, 'utf8mb4');
 







