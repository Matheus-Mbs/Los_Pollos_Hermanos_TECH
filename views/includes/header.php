<style>
    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        background-color: #f9f9f9;
    }

    .header {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        align-items: center;
        padding: 10px 30px;
        background-color: #ffffff;
        border-bottom: 1px solid #e0e0e0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .logoContainer {
        grid-column: 1;
        justify-self: start;
        display: flex;
        align-items: center;
        text-decoration: none;
        color: inherit;
    }

    .logoImg {
        height: 55px;
        margin-right: 12px;
    }

    /* Textos do Logo */
    .logoText {
        display: flex;
        flex-direction: column;
        line-height: 1.3;
    }

    .logoText strong {
        font-size: 17px;
        font-weight: 600;
        color: #222;
    }

    .logoText span {
        font-size: 13px;
        color: #888;
    }

    .navPrincipal {
        grid-column: 2;
        justify-self: center;
    }

    .navPrincipal ul {
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        gap: 30px;
    }

    .navPrincipal a {
        text-decoration: none;
        color: #555;
        font-size: 16px;
        font-weight: 500;
        padding: 5px 0;
        transition: color 0.2s ease-in-out;
    }

    .navPrincipal a:hover {
        color: #000;
    }
</style>
<header class="header">

    <a href="#" class="logoContainer">
        <img src="img/logo.png" alt="Los Pollos Hermanos Tech Logo" class="logoImg">
        <div class="logoText">
            <strong>Los Pollos Hermanos Tech</strong>
            <span>Excelência em inovação</span>
        </div>
    </a>

    <nav class="navPrincipal">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Sobre nós</a></li>
            <li><a href="#">Contato</a></li>
            <li><a href="#">Carreiras</a></li>
        </ul>
    </nav>

</header>