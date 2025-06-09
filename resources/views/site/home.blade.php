<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC Zona Leste - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilização da Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url('{{ asset("imgs/etec_zl.jpg") }}') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 120px 0;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .hero .btn {
            font-size: 1.2rem;
            padding: 12px 30px;
            border-radius: 25px;
            transition: 0.3s;
        }

        .hero .btn:hover {
            transform: scale(1.1);
        }

        /* Navbar */
        .navbar {
            background: #1c1c1c;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: orange !important;
        }

        /* Botões de seção */
        .btn-lg {
            font-size: 1.2rem;
            padding: 15px;
            border-radius: 10px;
            transition: 0.3s;
        }

        .btn-outline-primary:hover {
            background: #007bff;
            color: white;
        }

        .btn-outline-success:hover {
            background: #28a745;
            color: white;
        }

        .btn-outline-warning:hover {
            background: #ffc107;
            color: black;
        }

        .carousel-item img {
            width: 50%;
            height: 800px; 
            object-fit: cover; 
        }

        /* Rodapé */
        footer {
            background: #1c1c1c;
            color: white;
            padding: 20px 0;
            font-size: 1rem;
        }
    </style>
</head>
<body>

    <<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a style="color: orange;" class="navbar-brand" href="{{ route('site.home') }}">ETEC Zona Leste</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <!-- Links principais mais para a esquerda -->
                <li class="nav-item"><a class="nav-link" href="{{ route('site.home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('site.departamento') }}">Departamentos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('site.curso') }}">Cursos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('site.contato') }}">Contato</a></li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>


    <!-- Seção Hero com Imagem de Fundo -->
    <header class="hero">
         
        <div class="container">
            <h1>Bem-vindo à ETEC Zona Leste</h1>
            <p>Educação de qualidade para seu futuro!</p>
            <a href="{{ route('site.curso') }}" class="btn btn-warning btn-lg">Conheça Nossos Cursos</a>
        </div>
    </header>

    <!-- Carrossel -->
<div id="carouselExampleIndicators" class="carousel slide carousel-container" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('build/assets/images/etec01.jpg') }}" class="d-block w-100 img-fluid" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('build/assets/images/etec02.jpg') }}" class="d-block w-100 img-fluid" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('build/assets/images/etec03.jpeg') }}" class="d-block w-100 img-fluid" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>


    <!-- Conteúdo -->
    <div class="container text-center my-5">
        <h2 class="mb-4">Explore a ETEC</h2>
        <p>Confira as seções para mais informações:</p>
        <div class="row mt-4">
            <div class="col-md-4">
                <a href="{{ route('site.departamento') }}" class="btn btn-outline-primary btn-lg w-100">Departamentos</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('site.contato') }}" class="btn btn-outline-success btn-lg w-100">Fale Conosco</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('site.curso') }}" class="btn btn-outline-warning btn-lg w-100">Cursos</a>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="text-center">
        <p>&copy; 2025 ETEC Zona Leste. Todos os direitos reservados.</p>
        <p>Desenvolvido por Enzo de Paulo Souto 3° DS A</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
