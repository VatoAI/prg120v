<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studentadministrasjon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .nav-link:hover {
            background-color: rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        .card {
            transition: transform 0.2s, box-shadow 0.2s;
            border: none;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 shadow">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-graduation-cap me-2"></i>
                Studentadministrasjon
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row g-4">
                    <!-- Klasse Management -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-chalkboard-teacher me-2"></i>
                                    Klassehåndtering
                                </h5>
                                <p class="card-text">Administrer klasser og studieprogram.</p>
                                <div class="d-grid gap-2">
                                    <a href="klasse/klasse_vis.php" class="btn btn-primary">
                                        <i class="fas fa-list me-2"></i>
                                        Vis alle klasser
                                    </a>
                                    <a href="klasse/klasse_registrer.php" class="btn btn-outline-primary">
                                        <i class="fas fa-plus me-2"></i>
                                        Registrer ny klasse
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Management -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <i class="fas fa-user-graduate me-2"></i>
                                    Studenthåndtering
                                </h5>
                                <p class="card-text">Administrer studentinformasjon.</p>
                                <div class="d-grid gap-2">
                                    <a href="student/student_vis.php" class="btn btn-primary">
                                        <i class="fas fa-list me-2"></i>
                                        Vis alle studenter
                                    </a>
                                    <a href="student/student_registrer.php" class="btn btn-outline-primary">
                                        <i class="fas fa-user-plus me-2"></i>
                                        Registrer ny student
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5 py-3 text-center">
        <div class="container">
            <p class="text-muted">Studentadministrasjonssystem</p>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>