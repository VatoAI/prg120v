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

            <!-- Coming Soon -->
            <div class="col-md-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">
                            <i class="fas fa-clock me-2"></i>
                            Kommer Snart
                        </h5>
                        <p class="card-text">
                            Flere spennende funksjoner og innleveringer kommer snart. 
                            Følg med for oppdateringer!
                        </p>
                        <div class="d-grid">
                            <button class="btn btn-secondary" disabled>
                                <i class="fas fa-hourglass-half me-2"></i>
                                Under Utvikling
                            </button>
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