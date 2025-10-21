<?php
require_once '../config/config.php';

// Handle deletion if requested
if (isset($_POST['delete']) && isset($_POST['brukernavn'])) {
    $stmt = $pdo->prepare("DELETE FROM student WHERE brukernavn = ?");
    try {
        $stmt->execute([$_POST['brukernavn']]);
        $message = "Student slettet.";
    } catch (PDOException $e) {
        $error = "Kunne ikke slette studenten.";
    }
}

// Fetch all students with their class names
$stmt = $pdo->query("
    SELECT s.*, k.klassenavn 
    FROM student s 
    JOIN klasse k ON s.klassekode = k.klassekode 
    ORDER BY s.etternavn, s.fornavn
");
$studenter = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vis Studenter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">Studentadministrasjon</a>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4">Studentoversikt</h2>
        
        <?php if (isset($message)): ?>
            <div class="alert alert-success"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Brukernavn</th>
                                <th>Fornavn</th>
                                <th>Etternavn</th>
                                <th>Klasse</th>
                                <th>Handling</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($studenter as $student): ?>
                            <tr>
                                <td><?= htmlspecialchars($student['brukernavn']) ?></td>
                                <td><?= htmlspecialchars($student['fornavn']) ?></td>
                                <td><?= htmlspecialchars($student['etternavn']) ?></td>
                                <td><?= htmlspecialchars($student['klassenavn']) ?></td>
                                <td>
                                    <form method="post" style="display: inline;" onsubmit="return confirm('Er du sikker på at du vil slette denne studenten?');">
                                        <input type="hidden" name="brukernavn" value="<?= htmlspecialchars($student['brukernavn']) ?>">
                                        <button type="submit" name="delete" class="btn btn-danger btn-sm">Slett</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <a href="student_registrer.php" class="btn btn-primary">Registrer ny student</a>
            <a href="index.php" class="btn btn-secondary">Tilbake til forsiden</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>