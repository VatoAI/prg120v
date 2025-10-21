<!DOCTYPE html>
<html lang="no">
<head><base href="/app/stpet1155-prg120v/">
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
        .accordion-button:not(.collapsed) {
            background-color: #e3f2fd;
            color: #0d6efd;
        }
        .accordion-button:focus {
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        }
        .list-group-item:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand" href=".">
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
            <div class="col-12">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-4">
                            <i class="fas fa-book me-2"></i>
                            Temaer og Eksempler
                        </h5>
                        <div class="accordion" id="temaAccordion">
                            <!-- Tema 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tema1Collapse">
                                        <i class="fas fa-folder me-2"></i>Tema 1
                                    </button>
                                </h2>
                                <div id="tema1Collapse" class="accordion-collapse collapse show" data-bs-parent="#temaAccordion">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <a href="tema01/eksempler/eksempel-1.html" class="list-group-item list-group-item-action">Eksempel 1</a>
                                            <a href="tema01/eksempler/eksempel-2.html" class="list-group-item list-group-item-action">Eksempel 2</a>
                                            <a href="tema01/eksempler/eksempel-3.html" class="list-group-item list-group-item-action">Eksempel 3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tema 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tema2Collapse">
                                        <i class="fas fa-folder me-2"></i>Tema 2
                                    </button>
                                </h2>
                                <div id="tema2Collapse" class="accordion-collapse collapse" data-bs-parent="#temaAccordion">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <a href="tema02/eksempler/eksempel-1.html" class="list-group-item list-group-item-action">Eksempel 1</a>
                                            <a href="tema02/eksempler/eksempel-2.html" class="list-group-item list-group-item-action">Eksempel 2</a>
                                            <a href="tema02/eksempler/eksempel-3.html" class="list-group-item list-group-item-action">Eksempel 3</a>
                                            <a href="tema02/eksempler/eksempel-4.html" class="list-group-item list-group-item-action">Eksempel 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tema 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tema3Collapse">
                                        <i class="fas fa-folder me-2"></i>Tema 3
                                    </button>
                                </h2>
                                <div id="tema3Collapse" class="accordion-collapse collapse" data-bs-parent="#temaAccordion">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <a href="tema03/eksempler/eksempel-1.html" class="list-group-item list-group-item-action">Eksempel 1</a>
                                            <a href="tema03/eksempler/eksempel-2.html" class="list-group-item list-group-item-action">Eksempel 2</a>
                                            <a href="tema03/eksempler/eksempel-3.html" class="list-group-item list-group-item-action">Eksempel 3</a>
                                            <a href="tema03/eksempler/eksempel-4.html" class="list-group-item list-group-item-action">Eksempel 4</a>
                                            <a href="tema03/eksempler/eksempel-5.html" class="list-group-item list-group-item-action">Eksempel 5</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tema 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tema4Collapse">
                                        <i class="fas fa-folder me-2"></i>Tema 4
                                    </button>
                                </h2>
                                <div id="tema4Collapse" class="accordion-collapse collapse" data-bs-parent="#temaAccordion">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <a href="tema04/eksempler/eksempel-1.html" class="list-group-item list-group-item-action">Eksempel 1</a>
                                            <a href="tema04/eksempler/eksempel-2.html" class="list-group-item list-group-item-action">Eksempel 2</a>
                                            <a href="tema04/eksempler/eksempel-3.html" class="list-group-item list-group-item-action">Eksempel 3</a>
                                            <a href="tema04/eksempler/eksempel-4.html" class="list-group-item list-group-item-action">Eksempel 4</a>
                                            <a href="tema04/eksempler/eksempel-5.html" class="list-group-item list-group-item-action">Eksempel 5</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tema 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tema5Collapse">
                                        <i class="fas fa-folder me-2"></i>Tema 5
                                    </button>
                                </h2>
                                <div id="tema5Collapse" class="accordion-collapse collapse" data-bs-parent="#temaAccordion">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <a href="tema05/eksempler/eksempel-1.html" class="list-group-item list-group-item-action">Vis alle poststeder</a>
                                            <a href="tema05/eksempler/eksempel-2.html" class="list-group-item list-group-item-action">Registrer poststed</a>
                                            <a href="tema05/eksempler/eksempel-3.html" class="list-group-item list-group-item-action">Slett poststed</a>
                                            <a href="tema05/eksempler/eksempel-4.html" class="list-group-item list-group-item-action">Endre poststed</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Tema 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tema6Collapse">
                                        <i class="fas fa-folder me-2"></i>Tema 6
                                    </button>
                                </h2>
                                <div id="tema6Collapse" class="accordion-collapse collapse" data-bs-parent="#temaAccordion">
                                    <div class="accordion-body">
                                        <div class="list-group">
                                            <a href="tema06/eksempler/eksempel-1-1.html" class="list-group-item list-group-item-action">Statisk listeboks</a>
                                            <a href="tema06/eksempler/eksempel-1-2.html" class="list-group-item list-group-item-action">Statisk listeboks med valgt rad</a>
                                            <a href="tema06/eksempler/eksempel-1-3.html" class="list-group-item list-group-item-action">Statisk listeboks med tom rad</a>
                                            <a href="tema06/eksempler/eksempel-2-1.html" class="list-group-item list-group-item-action">Statiske sjekkbokser</a>
                                            <a href="tema06/eksempler/eksempel-2-2.html" class="list-group-item list-group-item-action">Statiske sjekkbokser med valgte bokser</a>
                                            <a href="tema06/eksempler/eksempel-3.html" class="list-group-item list-group-item-action">Dynamisk listeboks</a>
                                            <a href="tema06/eksempler/eksempel-4.html" class="list-group-item list-group-item-action">Dynamiske sjekkbokser</a>
                                            <a href="tema06/eksempler/eksempel-5.html" class="list-group-item list-group-item-action">Slett poststed</a>
                                            <a href="tema06/eksempler/eksempel-6.html" class="list-group-item list-group-item-action">Slett flere poststeder</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>