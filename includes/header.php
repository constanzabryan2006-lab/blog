<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Profesional - Equipo 5</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            color: #1e2a3a;
            background-color: #ffffff;
        }
        .navbar {
            background-color: #0a1929 !important;
            padding: 1rem 0;
        }
        .navbar-brand {
            font-weight: 700;
            letter-spacing: -0.5px;
        }
        .nav-link {
            font-weight: 500;
            color: rgba(255,255,255,0.9) !important;
            margin: 0 0.5rem;
        }
        .nav-link:hover {
            color: white !important;
        }
        .btn-outline-dark {
            border-color: #eaeef2;
            color: #1e2a3a;
        }
        .btn-outline-dark:hover {
            background-color: #0a1929;
            border-color: #0a1929;
            color: white;
        }
        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            cursor: pointer;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
        }
        .rounded-circle {
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .bg-light {
            background-color: #f8fafc !important;
        }
        .hero {
            background-color: #f8fafc;
            border-bottom: 1px solid #eaeef2;
        }
        .badge.bg-light {
            background-color: #f0f3f7 !important;
            color: #1e2a3a !important;
            font-weight: 500;
            padding: 0.5rem 1rem;
        }
        .modal-content {
            border: none;
            border-radius: 1rem;
        }
        .modal-header {
            padding: 1rem 1rem 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Blog<span class="fw-light">Profesional</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="acerca.php">Acerca del Equipo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categorias.php">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>