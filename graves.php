<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EcoDenúncia - Denúncias Graves</title>

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

            <div>

                <h1 class="logo">Denúncias Graves</h1>

                <h3>Ocorrências com gravidade alta registradas no sistema</h3>

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

    <section class="card tabela-card">

    <span class="secao-mini">

        Lista de Ocorrências Graves

    </span>

    <h2 class="titulo-secao">

        Denúncias de Gravidade Alta

    </h2>

    <div class="tabela-responsiva">

        <table class="tabela">

            <tr>

                <th>Nome</th>

                <th>Bairro</th>

                <th>Problema</th>

                <th>Descrição</th>

            </tr>

            <?php

            foreach ($denuncias as $denuncia) {

                if ($denuncia["gravidade"] == "Alta") {

                    echo "<tr>";

                    echo "<td>" . $denuncia["nome"] . "</td>";

                    echo "<td>" . $denuncia["bairro"] . "</td>";

                    echo "<td>" . $denuncia["problema"] . "</td>";

                    echo "<td>" . $denuncia["descricao"] . "</td>";

                    echo "</tr>";

                }

            }

            ?>

        </table>

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