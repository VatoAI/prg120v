<?php
// Simple index for innlevering2 - links to functionality
?>
<!doctype html>
<html lang="no">
<head>
  <meta charset="utf-8">
  <title>PRG120V - Innlevering 2</title>
  <style>body{font-family:Arial,Helvetica,sans-serif;max-width:800px;margin:2rem auto;padding:1rem} a{display:inline-block;margin:.5rem 0}</style>
</head>
<body>
  <h1>PRG120V - Innlevering 2</h1>
  <p>Velg en funksjon:</p>
  <ul>
    <li><a href="klasse.php">Administrer klasser (registrer, vis, slett)</a></li>
    <li><a href="student.php">Administrer studenter (registrer, vis, slett)</a></li>
  </ul>
  <p>Instruks: Legg inn dine DB-variabler i Dokploy under miljøvariabler: <code>DB_HOST</code>, <code>DB_NAME</code>, <code>DB_USER</code>, <code>DB_PASS</code>. Kjør <code>innlevering2/setup.sql</code> mot databasen for å opprette tabeller og prøve-data.</p>
</body>
</html>