<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EcoDenúncia - Ver Denúncias</title>

    <link rel="stylesheet" href="lista.css">

</head>

<body>

<?php

if (file_exists("dados.json")) {

    $conteudo = file_get_contents("dados.json");

    $denuncias = json_decode($conteudo, true);

} else {

    $denuncias = [];

}

?>

    <header class="topo">

        <div class="overlay">

            <div class="header-conteudo">

                <h1 class="logo">

                    EcoDenúncia

                </h1>

                <nav class="menu">

                    <a href="index.php" class="menu-link">Início</a>

                     <a href="sobre.php" class="menu-link">Sobre</a>

                    <a href="denuncia.php" class="menu-link">Fazer Denúncia</a>

                    <a href="lista.php" class="menu-link">Ver Denúncias</a>

                    <a href="impacto.php" class="menu-link">Impacto Ambiental</a>

                </nav>

            </div>

            <div class="banner-texto">

                <h2 class="banner-titulo">

                    Denúncias Ambientais Registradas

                </h2>

                <p class="banner-subtitulo">

                    Visualize os problemas ambientais registrados pela população.

                </p>

            </div>

        </div>

    </header>



    <main class="conteudo-principal">



        <section class="card">

            <span class="secao-mini">

                Sistema EcoDenúncia

            </span>

            <h2 class="titulo-secao">

                Acompanhamento das Ocorrências

            </h2>

            <p class="texto">

                Esta página apresenta as denúncias ambientais registradas
                pelos usuários no sistema EcoDenúncia.

            </p>

            <p class="texto">

                O objetivo do sistema é organizar informações sobre problemas
                ambientais encontrados na cidade e incentivar a conscientização
                da população.

            </p>

        </section>



        <section class="card tabela-card">

            <span class="secao-mini">

                Lista de Ocorrências

            </span>

            <h2 class="titulo-secao">

                Denúncias Registradas

            </h2>



            <div class="tabela-responsiva">

                <table class="tabela">

                    <tr>

                        <th>Nome</th>

                        <th>Bairro</th>

                        <th>Problema</th>

                        <th>Gravidade</th>

                        <th>Descrição</th>

                    </tr>

                    <?php

                    foreach ($denuncias as $denuncia) {

                        echo "<tr>";

                        echo "<td>" . $denuncia["nome"] . "</td>";

                        echo "<td>" . $denuncia["bairro"] . "</td>";

                        echo "<td>" . $denuncia["problema"] . "</td>";

                        echo "<td>" . $denuncia["gravidade"] . "</td>";

                        echo "<td>" . $denuncia["descricao"] . "</td>";

                        echo "</tr>";

                    }

                    ?>

                </table>

            </div>

        </section>



        <section class="card destaque">

            <span class="secao-mini">

                Conscientização Ambiental

            </span>

            <h2 class="titulo-secao">

                Importância do Registro das Denúncias

            </h2>

            <p class="texto">

                O registro das denúncias ambientais ajuda na organização das
                informações sobre os problemas mais frequentes encontrados
                na cidade.

            </p>

        </section>



    </main>



    <footer class="rodape">

        <p class="rodape-texto">

            &copy; 2026 - Site desenvolvido como projeto escolar.

        </p>

    </footer>

</body>

</html>