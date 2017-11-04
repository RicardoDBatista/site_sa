<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
        <title>Empresa - SmartTech</title>
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
        .imagem {
            width: 1280px;
            height: 360px;
            border: 1px solid black;
        }
        hr {
            border: 1px solid #333;
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
                <li><a href="empre.php" class="active">Empresa</a></li>
                <li><a href="equip.php">Equipe</a></li>
                <li><a href="pr_de.php">Prog. de Descarte</a></li>
                <li><a href="f_a_q.php">F.A.Q</a></li>
            </ul>
        </header>
        <div class="conteudo">
            <h1 class="conteudo2">A Empresa SmartTech</h1>
            <br> <hr> <br>
            <img class="imagem" src="img/brancohd.png">
            <label>
                <h3 class="conteudo2">
                    A SmartTech é uma empresa relacionada as tecnologias da computação,<br>
                    desde computadores inteiros a pronta entrega a até mesmo uma cadeira ou uma mesa gamer!<br>
                    <br>
                    Como qualquer empresa de confiança a SmartTech visa a qualidade desde o atendimento até a entrega,<br>
                    A SmartTech tem 2 Filiais no Estado de Santa Catarina, uma em Rio do Sul e outra em Florianópolis,<br>
                    temos a capacidade de entregar em todo o Brasil.<br>
                </h3>
            </label>
            <img class="imagem" src="img/brancohd.png">
            <br><br><hr>
        </div>
        <footer>
            <label>Todos os Direitos Reservados @ <a href="index.php">SmartTech</a> 2011-2017 &copy</label>
        </footer>
    </body>
</html>