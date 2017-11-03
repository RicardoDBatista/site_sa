<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
        <title>Equipe - SmartTech</title>
    </head>
    <style>
        * {
            margin: 0;
            padding: 0;
            color: #FFF;
        }
        body {
            font-family: Helvetica;
            font-size: 12px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #0066ff;
            border: 1px solid #005ce6;
        }
        footer {
            list-style-type: none;
            margin: 0;
            padding: 14px 16px;
            overflow: hidden;
            background-color: #0066ff;
            border: 1px solid #005ce6;
            text-align: center
        }
        li {
            float: left;
        }
        li a {
            display: block;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover:not(.active) {
            background-color: #005ce6;
        }
        .active {
            background-color: #005ce6;
        }
        .conteudo {
            padding: 10px;
            text-align: center;
            text-decoration: none;
            border: 1px solid #005ce6;
        }
        hr {
            border: 1px solid #333;
        }
        .gallery {
            margin: 1px;
            border: 2px solid #003d99;
            background-color: #0052cc;
            float: left;
            width: 32.88%;
        }
        .gallery:nth-child(even) {
            margin: 1px;
            border: 2px solid #003380;
            background-color: #0047b3;
            float: left;
            width: 32.88%;
        }
        .conteudo2 {
            background-color: #0066ff;
            border: 1px solid #005ce6;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <body background="img/background.png">
        <header>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="produ.php">Produtos </a></li>
                <li><a href="servi.php">Serviços</a></li>
                <li><a href="empre.php">Empresa</a></li>
                <li><a href="equip.php" class="active">Equipe</a></li>
                <li><a href="pr_de.php">Prog. de Descarte</a></li>
                <li><a href="f_a_q.php">F.A.Q</a></li>
            </ul>
        </header>
        <div class="conteudo">
            <h1 class="conteudo2">A Equipe SmartTech</h1>
            <br> <hr> <br>
            <div class="gallery">
                <img src="img/anonimo.jpg" alt="" width="300" height="300">
                <label>
                    <h2>
                        <u>Ricardo Davi Batista</u>
                    </h2>
                    <br>
                    <h3>
                        Um dos Fundadores da Empresa SmartTech, <br>atual Diretor da Empresa.
                    </h3>
                </label>
                <br>
            </div>
            <div class="gallery">
                <img src="img/anonimo.jpg" alt="" width="300" height="300">
                <label>
                    <h2>
                        <u>Ariano Giacomozzi</u>
                    </h2>
                    <br>
                    <h3>
                        Um dos Fundadores da Empresa SmartTech, <br>atual Presidente da Empresa.
                    </h3>
                </label>
                <br>
            </div>
            <div class="gallery">
                <img src="img/anonimo.jpg" alt="" width="300" height="300">
                <label>
                    <h2>
                        <u>Carlos Serena</u>
                    </h2>
                    <br>
                    <h3>
                        Um dos Melhores Funcionários da Empresa, <br>atual Gerente Geral da empresa.
                    </h3>
                </label>
                <br>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <hr>
            <label>
                <h2 class="conteudo2">
                    Funcionários
                </h2>
                <br>
                <br>
                <h3 class="conteudo2">
                    A SmartTech conta atualmente com mais de 50 Funcionários, divididos entre 2 Filiais, uma em Rio do Sul - SC e outra em Florianópolis - SC.<br><br>
                    Nós levamos muito a sério a qualidade de nossa empresa então todos os funcionários tem 2 periodos de lazer por dia, cada um com 45 Minutos,<br>
                    os funcionários também são muito bem remunerados, também há diversas palestras durante o ano para melhorar o rendimento e a segurança dos funcionários.
                </h3>
            </label>
            <hr>

        </div>
        <footer>
            <label>Todos os Direitos Reservados @ <a href="index.php">SmartTech</a> 2011-2017 &copy</label>
        </footer>
    </body>
</html>