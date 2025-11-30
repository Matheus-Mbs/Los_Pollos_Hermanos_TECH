<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações Especiais</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/servicosilegais.css">
</head>
<body class="body-dark">
    <?php include "../includes/header.php" ;?>

    <section class="header-section text-center">
        <div class="container">
            <span class="title-badge-special">Operações Especiais</span>
            
            <div class="banner-confidential">
                <p>ÁREA ultra-confidencial: todas operações são criptografadas</p>
            </div>
            
            <p class="catalogo-subtitle">Catálogo disponível somente para parceiros de extrema confiança</p>
        </div>
    </section>

    <section class="stats-bar text-center">
        <div class="container">
            <div class="row justify-content-center gy-3">
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="stat-box">
                        <h5>99.1%</h5>
                        <p>pureza mínima</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="stat-box">
                        <h5>100%</h5>
                        <p>Descrição</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="stat-box">
                        <h5>24-48h</h5>
                        <p>Entrega Expressa</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="stat-box">
                        <h5>15+</h5>
                        <p>Rotas Ativas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card-special">
                        <div class="card-body">
                            
                            <div class="card-header-with-icon">
                                <div class="icon-image-wrapper">
                                    <!-- ADICIONEI O id="rh-icon" AQUI -->
                                    <img src="../assets/imgs/servicoilegal/cappucino assassino.png" alt="Ícone de Consultoria de RH" class="icon-image" id="rh-icon">
                                </div>
                                <h5 class="card-title-special">Consultoria de Recursos Humanos</h5>
                            </div>

                            <p class="card-text">
                                Mike cuida de "problemas pessoais" e concorrência que
                                ameaçam a estabilidade da sua operação
                            </p>
                            
                            <ul class="features-list-special">
                                <li>Solução permanente</li>
                                <li>Não deixa rastros</li>
                            </ul>
                            
                            <h4 class="card-price">R$ 25.000</h4>
                            <a href="#" class="btn btn-primary w-100 btn-special">Contratar Serviço</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card-special">
                        <div class="card-body">
                           
                           <div class="card-header-with-icon">
                                <div class="icon-image-wrapper">
                                    <img src="../assets/imgs/servicoilegal/dinheiro.png" alt="Ícone de Lavanderia" class="icon-image">
                                </div>
                                <h5 class="card-title-special">Lavanderia</h5>
                           </div>

                            <p class="card-text">
                                Nossa parceria com a lavanderia permite que você
                                torne seus ativos limpos
                            </p>
                            <ul class="features-list-special">
                                <li>Processo highly seguro</li>
                                <li>Lavamos até 50.000 por dia</li>
                            </ul>
                            <h4 class="card-price">Taxa de 15%</h4>
                            <a href="#" class="btn btn-primary w-100 btn-special">Contratar Serviço</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card-special">
                        <div class="card-body">
                            
                            <div class="card-header-with-icon">
                                <div class="icon-image-wrapper">
                                    <img src="../assets/imgs/servicoilegal/meta.png" alt="Ícone de Cristal Azul" class="icon-image">
                                </div>
                                <h5 class="card-title-special">Plataforma Cristal Azul</h5>
                            </div>

                            <p class="card-text">
                                Encomenda do cristal
                            </p>
                            <ul class="features-list-special">
                                <li>Nível de pureza de 91,1%</li>
                                <li>Laboratório de ponta</li>
                                <li>Altamente aditivo</li>
                                <li>Alto poder de revenda</li>
                            </ul>
                            <h4 class="card-price">R$ 70.000 <span class="price-note">por kilo, frete grátis!</span></h4>
                            <a href="#" class="btn btn-primary w-100 btn-special">Comprar Pacote</a>
                        </div>
                    </div>
                </div>

            </div>
        </div> 
    </section>
    <?php include "../includes/footer.php" ;?>
</body>
</html>