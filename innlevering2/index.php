<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studentadministrasjon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link:hover {
            background-color: rgba(0,0,0,0.1);
            border-radius: 5px;
        }
        .card {
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">Studentadministrasjon</a>
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
                                <h5 class="card-title">Klassehåndtering</h5>
                                <p class="card-text">Administrer klasser og studieprogram.</p>
                                <div class="d-grid gap-2">
                                    <a href="klasse_vis.php" class="btn btn-primary">Vis alle klasser</a>
                                    <a href="klasse_registrer.php" class="btn btn-outline-primary">Registrer ny klasse</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Management -->
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Studenthåndtering</h5>
                                <p class="card-text">Administrer studentinformasjon.</p>
                                <div class="d-grid gap-2">
                                    <a href="student_vis.php" class="btn btn-primary">Vis alle studenter</a>
                                    <a href="student_registrer.php" class="btn btn-outline-primary">Registrer ny student</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5 py-3 text-center text-muted">
        <div class="container">
            <p>Studentadministrasjonssystem - USN</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>