<style>
    .footer {
        background-color: #000000;
        color: #e0e0e0;
        padding: 40px 60px;
        position: relative;
        font-size: 0.9rem;
    }

    .footerMain {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 30px;
        padding-bottom: 30px;
        position: relative;
        z-index: 2;
    }

    .colunaFooter {
        flex: 1;
        min-width: 220px;
    }

    .informacoes {
        flex-basis: 40%;
    }

    .logo {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .logo img {
        height: 60px;
        margin-right: 15px;
        border-radius: 50%;
    }

    .textoFooter {
        display: flex;
        flex-direction: column;
    }

    .titulo {
        font-size: 1.1rem;
        font-weight: bold;
        color: #ffffff;
    }

    .brand-tagline {
        font-size: 0.9rem;
        color: #a0a0a0;
    }

    .brand-description {
        color: #c0c0c0;
        line-height: 1.6;
        margin: 0;
    }

    .colunaFooter h3 {
        color: #ffffff;
        font-size: 1.1rem;
        margin-bottom: 20px;
    }

    .links ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .links li {
        margin-bottom: 12px;
    }

    .links a {
        color: #e0e0e0;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .links a:hover {
        color: #3498db;
    }

    .informacoesContato p {
        margin: 0 0 12px 0;
        line-height: 1.5;
    }

    .botaoFooter {
        border-top: 1px solid #333;
        padding-top: 25px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 0.85rem;
        color: #a0a0a0;
        position: relative;
        z-index: 2;
    }

    .copyright,
    .qualidade {
        margin: 0;
    }

    .qualidade strong {
        color: #3498db;
        font-weight: bold;
    }


    .decoracaoFooter {
        position: absolute;
        z-index: 1;
        opacity: 0.7;
    }

    .imgEsquerda {
        top: 10px;
        left: 10px;
        transform: rotate(180deg);
        transform-origin: center;
    }

    .imgDireita {
        bottom: 10px;
        right: 10px;
    }

    .imgFooter {
        height: 40px;
        margin: 0;
    }

    .imgLogo {
        height: 55px;
        margin-right: 12px;
    }
</style>
<footer class="footer">

    <img src="../assets/cristalAzul.webp" alt="Decoração" class="imgFooter decoracaoFooter imgEsquerda">
    <img src="../assets/cristalAzul.webp" alt="Decoração" class="imgFooter decoracaoFooter imgDireita">


    <div class="footerMain">

        <div class="footerColuna informacoes">
            <div class="logo">
                <img class="imgLogo" src="../assets/logo.png" alt="Logo Los Pollos Hermanos Tech">
                <div class="textoFooter">
                    <span class="titulo">Los Pollos Hermanos Tech</span>
                    <span class="brand-tagline">Excelência em inovação</span>
                </div>
            </div>
            <p class="brand-description">
                Transformando ideias em realidade com a mais alta pureza
                tecnológica. Seu parceiro de confiança para soluções digitais.
            </p>
        </div>

        <div class="footer-column links">
            <h3>Empresa</h3>
            <ul>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Portfólio</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>

        <div class="footer-column informacoesContato">
            <h3>Contato</h3>
            <p>Lospollostech@gmail.com</p>
            <p>+55 34 9971-68699</p>
        </div>

    </div>

    <div class="botaoFooter">
        <p class="copyright">© 2025 Los Pollos Hermanos Tech. Todos os direitos reservados.</p>
        <p class="qualidade">Padrão de Qualidade: <strong>99,1%</strong></p>
    </div>

</footer>