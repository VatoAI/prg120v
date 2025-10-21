<?php
require_once dirname(__FILE__) . '/../config/config.php';

// Handle deletion if requested
if (isset($_POST['delete']) && isset($_POST['klassekode'])) {
    $stmt = $pdo->prepare("DELETE FROM klasse WHERE klassekode = ?");
    try {
        $stmt->execute([$_POST['klassekode']]);
        $message = "Klasse slettet.";
    } catch (PDOException $e) {
        $error = "Kan ikke slette klassen. Det kan være studenter registrert i denne klassen.";
    }
}

// Fetch all classes
$stmt = $pdo->query("SELECT * FROM klasse ORDER BY klassekode");
$klasser = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vis Klasser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="../studentadmin.php">Studentadministrasjon</a>
        </div>
    </nav>

    <div class="container">
        <h2 class="mb-4">Klasseoversikt</h2>
        
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
                                <th>Klassekode</th>
                                <th>Klassenavn</th>
                                <th>Studiumkode</th>
                                <th>Handling</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($klasser as $klasse): ?>
                            <tr>
                                <td><?= htmlspecialchars($klasse['klassekode']) ?></td>
                                <td><?= htmlspecialchars($klasse['klassenavn']) ?></td>
                                <td><?= htmlspecialchars($klasse['studiumkode']) ?></td>
                                <td>
                                    <form method="post" style="display: inline;" onsubmit="return confirm('Er du sikker på at du vil slette denne klassen?');">
                                        <input type="hidden" name="klassekode" value="<?= htmlspecialchars($klasse['klassekode']) ?>">
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
            <a href="klasse_registrer.php" class="btn btn-primary">Registrer ny klasse</a>
            <a href="index.php" class="btn btn-secondary">Tilbake til forsiden</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>