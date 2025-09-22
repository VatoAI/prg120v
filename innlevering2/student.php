<?php
require_once 'db.php';
// Handle add and delete operations for student
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $brukernavn = trim($_POST['brukernavn'] ?? '');
        $fornavn = trim($_POST['fornavn'] ?? '');
        $etternavn = trim($_POST['etternavn'] ?? '');
        $klasse = trim($_POST['klassekode'] ?? '');
        if ($brukernavn && $fornavn && $etternavn && $klasse) {
            $stmt = $pdo->prepare('INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) VALUES (?, ?, ?, ?)');
            $stmt->execute([$brukernavn, $fornavn, $etternavn, $klasse]);
            header('Location: student.php');
            exit;
        }
    }
    if (isset($_POST['delete'])) {
        $brukernavn = $_POST['delete'];
        $stmt = $pdo->prepare('DELETE FROM student WHERE brukernavn = ?');
        $stmt->execute([$brukernavn]);
        header('Location: student.php');
        exit;
    }
}

$students = $pdo->query('SELECT s.*, k.klassenavn FROM student s LEFT JOIN klasse k ON s.klassekode = k.klassekode ORDER BY s.brukernavn')->fetchAll();
$classes = $pdo->query('SELECT * FROM klasse ORDER BY klassekode')->fetchAll();
?>
<!doctype html>
<html lang="no">
<head>
  <meta charset="utf-8">
  <title>Administrer studenter</title>
  <style>body{font-family:Arial,Helvetica,sans-serif;max-width:900px;margin:2rem auto;padding:1rem} form{margin-bottom:1rem}</style>
</head>
<body>
  <h1>Administrer studenter</h1>
  <p><a href="index.php">Tilbake</a></p>
  <h2>Registrer ny student</h2>
  <form method="post">
    <label>Brukernavn (max 7): <input name="brukernavn" maxlength="7" required></label><br>
    <label>Fornavn: <input name="fornavn" required></label><br>
    <label>Etternavn: <input name="etternavn" required></label><br>
    <label>Klasse: 
      <select name="klassekode" required>
        <option value="">Velg klasse</option>
        <?php foreach ($classes as $c): ?>
          <option value="<?php echo htmlspecialchars($c['klassekode']); ?>"><?php echo htmlspecialchars($c['klassekode'] . ' - ' . $c['klassenavn']); ?></option>
        <?php endforeach; ?>
      </select>
    </label><br>
    <button name="add" type="submit">Legg til</button>
  </form>

  <h2>Eksisterende studenter</h2>
  <?php if (count($students) === 0): ?>
    <p>Ingen studenter funnet.</p>
  <?php else: ?>
    <table border="1" cellpadding="6">
      <tr><th>Brukernavn</th><th>Fornavn</th><th>Etternavn</th><th>Klasse</th><th>Handling</th></tr>
      <?php foreach ($students as $s): ?>
        <tr>
          <td><?php echo htmlspecialchars($s['brukernavn']); ?></td>
          <td><?php echo htmlspecialchars($s['fornavn']); ?></td>
          <td><?php echo htmlspecialchars($s['etternavn']); ?></td>
          <td><?php echo htmlspecialchars($s['klassekode'] . ' ' . ($s['klassenavn'] ?? '')) ; ?></td>
          <td>
            <form method="post" style="display:inline">
              <button name="delete" value="<?php echo htmlspecialchars($s['brukernavn']); ?>" onclick="return confirm('Slett student?')">Slett</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>
</body>
</html>