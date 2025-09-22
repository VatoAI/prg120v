<?php
require_once 'db.php';
// Handle add and delete operations for klasse
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $kode = trim($_POST['klassekode'] ?? '');
        $navn = trim($_POST['klassenavn'] ?? '');
        $stud = trim($_POST['studiumkode'] ?? '');
        if ($kode && $navn && $stud) {
            $stmt = $pdo->prepare('INSERT INTO klasse (klassekode, klassenavn, studiumkode) VALUES (?, ?, ?)');
            $stmt->execute([$kode, $navn, $stud]);
            header('Location: klasse.php');
            exit;
        }
    }
    if (isset($_POST['delete'])) {
        $kode = $_POST['delete'];
        $stmt = $pdo->prepare('DELETE FROM klasse WHERE klassekode = ?');
        $stmt->execute([$kode]);
        header('Location: klasse.php');
        exit;
    }
}

$classes = $pdo->query('SELECT * FROM klasse ORDER BY klassekode')->fetchAll();
?>
<!doctype html>
<html lang="no">
<head>
  <meta charset="utf-8">
  <title>Administrer klasser</title>
  <style>body{font-family:Arial,Helvetica,sans-serif;max-width:900px;margin:2rem auto;padding:1rem} form{margin-bottom:1rem}</style>
</head>
<body>
  <h1>Administrer klasser</h1>
  <p><a href="index.php">Tilbake</a></p>
  <h2>Registrer ny klasse</h2>
  <form method="post">
    <label>Klassekode (max 5): <input name="klassekode" maxlength="5" required></label><br>
    <label>Klassenavn: <input name="klassenavn" required></label><br>
    <label>Studiumkode: <input name="studiumkode" required></label><br>
    <button name="add" type="submit">Legg til</button>
  </form>

  <h2>Eksisterende klasser</h2>
  <?php if (count($classes) === 0): ?>
    <p>Ingen klasser funnet.</p>
  <?php else: ?>
    <table border="1" cellpadding="6">
      <tr><th>Klassekode</th><th>Klassenavn</th><th>Studiumkode</th><th>Handling</th></tr>
      <?php foreach ($classes as $c): ?>
        <tr>
          <td><?php echo htmlspecialchars($c['klassekode']); ?></td>
          <td><?php echo htmlspecialchars($c['klassenavn']); ?></td>
          <td><?php echo htmlspecialchars($c['studiumkode']); ?></td>
          <td>
            <form method="post" style="display:inline">
              <button name="delete" value="<?php echo htmlspecialchars($c['klassekode']); ?>" onclick="return confirm('Slett klasse?')">Slett</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  <?php endif; ?>
</body>
</html>