<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETEC Zona Leste - Departamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                        url('{{ asset("imgs/departamentos.jpg") }}') no-repeat center center/cover;
            color: white;
            text-align: center;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        .department-section {
            padding: 60px 0; 
        }

        .department-card {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            transition: transform 0.3s;
            margin-bottom: 30px; 
        }

        .department-card:hover {
            transform: scale(1.05);
        }

        .content {
            min-height: 60vh; 
        }

        footer {
            margin-top: auto; 
        }
    </style>
</head>
<body class="d-flex flex-column">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('site.home') }}">ETEC Zona Leste</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('site.departamento') }}">Departamentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.curso') }}">Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('site.contato') }}">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero">
        <div class="container">
            <h1>Nossos Departamentos Administrativos</h1>
            <p>Conheça as áreas administrativas da ETEC Zona Leste</p>
        </div>
    </header>

    <div class="container department-section content">
        <div class="row">
            <div class="col-md-4">
                <div class="department-card text-center">
                    <h3>Direção</h3>
                    <p>Responsável pela gestão e administração geral da escola, incluindo decisões estratégicas e relacionamento com a comunidade escolar.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="department-card text-center">
                    <h3>Coordenação Pedagógica</h3>
                    <p>Coordena as atividades acadêmicas, apoio ao corpo docente e acompanhamento do desempenho dos alunos.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="department-card text-center">
                    <h3>Secretaria Escolar</h3>
                    <p>Responsável pelo atendimento aos alunos, matrículas, documentação e organização de registros acadêmicos.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="department-card text-center">
                    <h3>Departamento de TI</h3>
                    <p>Responsável pelo suporte técnico, infraestrutura de redes e manutenção de sistemas e equipamentos tecnológicos da escola.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="department-card text-center">
                    <h3>Marketing e Comunicação</h3>
                    <p>Cuida da divulgação de eventos, campanhas e comunicação interna e externa da escola.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="department-card text-center">
                    <h3>Financeiro</h3>
                    <p>Responsável pela gestão financeira da escola, incluindo pagamentos, orçamentos e controle de receitas e despesas.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center bg-dark text-white py-3">
        <p>&copy; 2025 ETEC Zona Leste. Todos os direitos reservados.</p>
        <p>Desenvolvido por Enzo de Paulo Souto - 3° DS A</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
