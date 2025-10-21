<?php
require_once dirname(__FILE__) . '/../config/config.php';

$message = '';
$error = '';

// Fetch all classes for the dropdown
$stmt = $pdo->query("SELECT klassekode, klassenavn FROM klasse ORDER BY klassekode");
$klasser = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $brukernavn = $_POST['brukernavn'] ?? '';
    $fornavn = $_POST['fornavn'] ?? '';
    $etternavn = $_POST['etternavn'] ?? '';
    $klassekode = $_POST['klassekode'] ?? '';

    if (empty($brukernavn) || empty($fornavn) || empty($etternavn) || empty($klassekode)) {
        $error = "Alle felt må fylles ut.";
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO student (brukernavn, fornavn, etternavn, klassekode) VALUES (?, ?, ?, ?)");
            $stmt->execute([$brukernavn, $fornavn, $etternavn, $klassekode]);
            $message = "Student registrert!";
        } catch (PDOException $e) {
            $error = "Feil ved registrering av student. Brukernavnet kan være i bruk.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrer Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="../studentadmin.php">Studentadministrasjon</a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Registrer ny student</h2>

                        <?php if ($message): ?>
                            <div class="alert alert-success"><?= htmlspecialchars($message) ?></div>
                        <?php endif; ?>

                        <?php if ($error): ?>
                            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                        <?php endif; ?>

                        <form method="post">
                            <div class="mb-3">
                                <label for="brukernavn" class="form-label">Brukernavn:</label>
                                <input type="text" class="form-control" id="brukernavn" name="brukernavn" maxlength="7" required>
                            </div>

                            <div class="mb-3">
                                <label for="fornavn" class="form-label">Fornavn:</label>
                                <input type="text" class="form-control" id="fornavn" name="fornavn" maxlength="50" required>
                            </div>

                            <div class="mb-3">
                                <label for="etternavn" class="form-label">Etternavn:</label>
                                <input type="text" class="form-control" id="etternavn" name="etternavn" maxlength="50" required>
                            </div>

                            <div class="mb-3">
                                <label for="klassekode" class="form-label">Klasse:</label>
                                <select class="form-select" id="klassekode" name="klassekode" required>
                                    <option value="">Velg klasse</option>
                                    <?php foreach ($klasser as $klasse): ?>
                                        <option value="<?= htmlspecialchars($klasse['klassekode']) ?>">
                                            <?= htmlspecialchars($klasse['klassekode'] . ' - ' . $klasse['klassenavn']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Registrer student</button>
                                <a href="student_vis.php" class="btn btn-secondary">Tilbake til oversikt</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>