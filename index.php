<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRG120V - Studentadministrasjon</title>
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
        .hero {
            padding: 4rem 0;
            text-align: center;
            margin-bottom: 2rem;
        }
        .hero h1 {
            margin-bottom: 1.5rem;
            color: #2c3e50;
        }
        .hero p {
            color: #34495e;
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-graduation-cap me-2"></i>
                PRG120V
            </a>
        </div>
    </nav>

    <div class="hero bg-white shadow-sm">
        <div class="container">
            <h1>
                <i class="fas fa-university me-3"></i>
                Velkommen til PRG120V
            </h1>
            <p>
                Dette er et studentadministrasjonssystem utviklet som del av PRG120V-kurset. 
                Systemet lar deg administrere klasser og studenter på en enkel og effektiv måte.
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center g-4">
            <!-- Innlevering 2 -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-tasks me-2"></i>
                            Innlevering 2
                        </h5>
                        <p class="card-text">
                            Student- og klassehåndteringssystem med database-integrasjon.
                            Her kan du registrere og administrere studenter og klasser.
                        </p>
                        <div class="d-grid">
                            <a href="innlevering2/" class="btn btn-primary">
                                <i class="fas fa-arrow-right me-2"></i>
                                Gå til Innlevering 2
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tema Oversikt -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-book me-2"></i>
                            Temaer og Eksempler
                        </h5>
                        <div class="list-group">
                            <a href="tema01/" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-folder me-2"></i>Tema 1</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <a href="tema02/" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-folder me-2"></i>Tema 2</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <a href="tema03/" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-folder me-2"></i>Tema 3</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <a href="tema04/" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-folder me-2"></i>Tema 4</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <a href="tema05/" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-folder me-2"></i>Tema 5</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <a href="tema06/" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-folder me-2"></i>Tema 6</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resources -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-file-alt me-2"></i>
                            Dokumentasjon
                        </h5>
                        <div class="list-group">
                            <a href="PRG120V_NotebookLM_Overview.md" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><i class="fab fa-markdown me-2"></i>Notebook Overview</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <a href="PRG120V_Oversikt_og_Notater.ipynb" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-book-open me-2"></i>Oversikt og Notater</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <a href="DEPLOY.md" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-cloud-upload-alt me-2"></i>Deployment Guide</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Development -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-code me-2"></i>
                            Utvikling
                        </h5>
                        <div class="list-group">
                            <a href="Dockerfile" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><i class="fab fa-docker me-2"></i>Dockerfile</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                            <a href=".dockerignore" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span><i class="fab fa-docker me-2"></i>Docker Ignore</span>
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="mt-5 py-3">
        <div class="container text-center">
            <p class="text-muted">
                <i class="fas fa-code me-2"></i>
                Utviklet for PRG120V
            </p>
        </div>
    </footer>
</body>
</html>