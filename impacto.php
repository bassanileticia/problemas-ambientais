<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EcoDenúncia - Impacto Ambiental</title>

    <link rel="stylesheet" href="impacto.css">

</head>

<body>

<?php

if (file_exists("dados.json")) {

    $conteudo = file_get_contents("dados.json");

    $denuncias = json_decode($conteudo, true);

} else {

    $denuncias = [];

}

$totalDenuncias = count($denuncias);

$gravidadeAlta = 0;

foreach ($denuncias as $denuncia) {

    if ($denuncia["gravidade"] == "Alta") {

        $gravidadeAlta++;

    }

}

?>

     <header class="topo">

        <div class="overlay">

            <div class="header-conteudo">

                <div>
                    <h1 class="logo"> Impacto ambiental na cidade</h1>

                    <h3>Dados e infotmacoes sobre os problemas ambientais registrados</h3>
                </div>

            </div>

        </div>


    </header>



    <nav class="menu">

        <a href="index.php" class="menu-link">Início</a>

        <a href="denuncia.php" class="menu-link">Fazer Denúncia</a>

        <a href="lista.php" class="menu-link">Ver Denúncias</a>

        <a href="impacto.php" class="menu-link">Impacto Ambiental</a>

        <a href="sobre.php" class="menu-link">Sobre</a>

    </nav>




    <main class="conteudo-principal">



        <section class="card">

            <div class="card-texto">

                <span class="secao-mini">

                    Sistema EcoDenúncia

                </span>

                <h2 class="titulo-secao">

                    Impactos Ambientais Urbanos

                </h2>

                <p class="texto">

                    Esta página apresenta informações relacionadas aos impactos
                    ambientais registrados no sistema EcoDenúncia.

                </p>

                <p class="texto">

                    O objetivo é demonstrar como pequenos problemas ambientais
                    podem gerar grandes consequências para a cidade, afetando
                    a saúde pública, a limpeza urbana e a qualidade de vida da
                    população.

                </p>

            </div>

        </section>



        <section class="estatisticas">



            <div class="card-estatistica">

                <span class="numero">

                    <?php echo $totalDenuncias; ?>

                </span>

                <p class="estatistica-texto">

                    Total de denúncias registradas

                </p>

            </div>



            <div class="card-estatistica destaque">

                <span class="numero">

                    <?php echo $gravidadeAlta; ?>

                </span>

                <p class="estatistica-texto">

                    Denúncias com gravidade alta

                </p>

            </div>



        </section>



        <section class="card card-imagem-lado">

            <img src="img/Impacto- impacto.php (1).png" alt="" class="imagem-impacto">

            <div class="card-texto">

                <span class="secao-mini">

                    Consequências Ambientais

                </span>

                <h2 class="titulo-secao">

                    Problemas causados pela poluição urbana

                </h2>

                <p class="texto">

                    O descarte irregular de lixo e outros problemas ambientais
                    podem causar diversos impactos negativos para a cidade.

                </p>

                <p class="texto">

                    Entre os principais problemas estão o aumento da poluição,
                    a proliferação de insetos e doenças, o entupimento de bueiros
                    e o risco de enchentes em períodos de chuva.

                </p>

                <p class="texto">

                    Além disso, queimadas e poluição da água prejudicam diretamente
                    o meio ambiente e afetam a qualidade de vida da população.

                </p>

                <p class="texto">

                    A conscientização ambiental e a participação da comunidade
                    são fundamentais para reduzir esses impactos e preservar os
                    espaços urbanos.

                </p>

            </div>

        </section>



    </main>



    <footer class="rodape">

        <p class="rodape-texto">

            &copy; 2026 - Site desenvolvido como projeto escolar.

        </p>

    </footer>

</body>

</html>