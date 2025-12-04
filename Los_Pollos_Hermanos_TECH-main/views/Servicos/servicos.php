<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Serviços</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/servicos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <?php include "../includes/header.php" ;?>
    <section class="services-section">
        <div class="container text-center">

            <span class="title-badge">Nossos Serviços</span>
            <h2 class="section-title">Soluções premium para o seu negócio</h2>
            <p class="section-description">
                Escolha entre nossa linha completa de serviços tecnológicos. Cada solução é 
                desenvolvida com o mais alto padrão de qualidade.
            </p>

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card">
                        <div class="card-body">
                            <div class="card-header">
                                <div class="service-icon">
                                    <i class="bi bi-code-slash"></i>
                                </div>
                                <span class="tech-tag">Tecnologia</span>
                            </div>

                            <h5 class="card-title-custom text-start">Desenvolvimento Web Premium</h5>
                            <p class="card-text-custom text-start">
                                Soluções web completas com tecnologia de ponta e 
                                design responsivo
                            </p>
                            
                            <ul class="features-list">
                                <li>Design responsivo</li>
                                <li>SEO otimizado</li>
                                <li>Performance máxima</li>
                                <li>Suporte 24/7</li>
                            </ul>
                            
                            <h4 class="price">R$ 15.000</h4>
                            <a href="../Contratar/contratar.php?id=1" class="btn btn-primary w-100 btn-contratar">Contratar Serviço</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card">
                        <div class="card-body">
                            <div class="card-header">
                                <div class="service-icon">
                                    <i class="bi bi-code-slash"></i>
                                </div>
                                <span class="tech-tag">Tecnologia</span>
                            </div>
                            <h5 class="card-title-custom text-start">Consultoria e Otimização de Performance</h5>
                            <p class="card-text-custom text-start">
                                Nossa missão é reduzir o tempo de carregamento, cortar custos de servidor e garantir estabilidade máxima durante picos de acesso.
                            </p>
                            <ul class="features-list">
                                <li>Auditoria de Código e Segurança</li>
                                <li>Refatoração de Sistemas Legados</li>
                                <li>Otimização de Banco de Dados</li>
                                <li>Melhoria no Core Web Vitals</li>
                            </ul>
                            <h4 class="price">R$ 12.000</h4>
                            <a href="../Contratar/contratar.php?id=2" class="btn btn-primary w-100 btn-contratar">Contratar Serviço</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card service-card">
                        <div class="card-body">
                            <div class="card-header">
                                <div class="service-icon">
                                    <i class="bi bi-code-slash"></i>
                                </div>
                                <span class="tech-tag">Tecnologia</span>
                            </div>
                            <h5 class="card-title-custom text-start">Desenvolvimento de Aplicações Customizadas</h5>
                            <p class="card-text-custom text-start">
                                Criamos softwares sob medida desenhados especificamente para as regras do seu negócio.
                            </p>
                            <ul class="features-list">
                                <li>Arquitetura de Microsserviços</li>
                                <li>Integração de APIs Complexas</li>
                                <li>Automação de Processos</li>
                                <li>Painéis de Gestão</li>
                            </ul>
                            <h4 class="price">R$ 24.000</h4>
                            <a href="../Contratar/contratar.php?id=3" class="btn btn-primary w-100 btn-contratar">Contratar Serviço</a>
                        </div>
                    </div>
                </div>

            </div> 

            <div class="footer-link">
                <p>Tem alguma dúvida ou problema? <a href="../Contato/contato.php">Entre em contato</a></p>
            </div>

        </div> 
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php include "../includes/footer.php" ;?>
</body>
</html>