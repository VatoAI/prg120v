<?php
require_once 'config.php';

$message = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $klassekode = $_POST['klassekode'] ?? '';
    $klassenavn = $_POST['klassenavn'] ?? '';
    $studiumkode = $_POST['studiumkode'] ?? '';

    if (empty($klassekode) || empty($klassenavn) || empty($studiumkode)) {
        $error = "Alle felt må fylles ut.";
    } else {
        try {
            $stmt = $pdo->prepare("INSERT INTO klasse (klassekode, klassenavn, studiumkode) VALUES (?, ?, ?)");
            $stmt->execute([$klassekode, $klassenavn, $studiumkode]);
            $message = "Klasse registrert!";
        } catch (PDOException $e) {
            $error = "Feil ved registrering av klasse. Klassekoden kan være i bruk.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrer Klasse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">Studentadministrasjon</a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Registrer ny klasse</h2>

                        <?php if ($message): ?>
                            <div class="alert alert-success"><?= htmlspecialchars($message) ?></div>
                        <?php endif; ?>

                        <?php if ($error): ?>
                            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                        <?php endif; ?>

                        <form method="post">
                            <div class="mb-3">
                                <label for="klassekode" class="form-label">Klassekode:</label>
                                <input type="text" class="form-control" id="klassekode" name="klassekode" maxlength="5" required>
                            </div>

                            <div class="mb-3">
                                <label for="klassenavn" class="form-label">Klassenavn:</label>
                                <input type="text" class="form-control" id="klassenavn" name="klassenavn" maxlength="50" required>
                            </div>

                            <div class="mb-3">
                                <label for="studiumkode" class="form-label">Studiumkode:</label>
                                <input type="text" class="form-control" id="studiumkode" name="studiumkode" maxlength="50" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Registrer klasse</button>
                                <a href="klasse_vis.php" class="btn btn-secondary">Tilbake til oversikt</a>
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