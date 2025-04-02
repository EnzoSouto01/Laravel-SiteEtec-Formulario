<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC Zona Leste - Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url('{{ asset("imgs/cursos.jpg") }}') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 0;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .container {
            margin-top: 40px;
        }
        footer {
            background: #1c1c1c;
            color: white;
            padding: 20px 0;
            font-size: 1rem;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('site.home') }}">ETEC Zona Leste</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.departamento') }}">Departamentos</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('site.curso') }}">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="container">
            <h1>Nossos Cursos</h1>
            <p>Conheça os cursos oferecidos pela ETEC Zona Leste</p>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                <img src="{{ asset('build/assets/images/ds.jpg') }}" class="card-img-top" alt="Curso 1">
                    <div class="card-body">
                        <h5 class="card-title">Desenvolvimento de Sistemas</h5>
                        <p class="card-text">Aprenda a programar e desenvolver softwares com tecnologia de ponta.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <img src="{{ asset('build/assets/images/adm.jpg') }}" class="card-img-top" alt="Curso 2">
                    <div class="card-body">
                        <h5 class="card-title">Administração</h5>
                        <p class="card-text">Desenvolva habilidades para gerenciar empresas e negócios.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                <img src="{{ asset('build/assets/images/log.jpg') }}" class="card-img-top" alt="Curso 3">
                    <div class="card-body">
                        <h5 class="card-title">Logística</h5>
                        <p class="card-text">Aprenda a otimizar processos logísticos e a gestão de transportes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 ETEC Zona Leste. Todos os direitos reservados.</p>
        <p>Desenvolvido por Enzo de Paulo Souto - 3° DS A</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
