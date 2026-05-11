<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoDenúncia - Ver Denúncia</title>
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

    <header>

        <h1>EcoDenúncia</h1>

        <nav>
            <a href="index.php">Início</a> |
            <a href="denuncia.php">Fazer Denúncia</a> |
            <a href="lista.php">Ver Denúncias</a> |
            <a href="impacto.php">Impacto Ambiental</a>
        </nav>

    </header>

    <main>

        <section>

            <h2>Denúncias Registradas</h2>

            <p>
                Esta página apresenta as denúncias ambientais registradas
                pelos usuários no sistema EcoDenúncia.
            </p>

            <p>
                O objetivo do sistema é organizar informações sobre problemas
                ambientais encontrados na cidade e incentivar a conscientização
                da população.
            </p>

        </section>

        <section>

            <h2>Lista de Ocorrências</h2>

            <table border="1">

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

        </section>


        <section>

            <h2>Importância do Registro das Denúncias</h2>

            <p>
                O registro das denúncias ambientais ajuda na organização das
                informações sobre os problemas mais frequentes encontrados
                na cidade.
            </p>

        </section>

    </main>

    <footer>
       <p>&copy; - 2026 - Site desenvolvido como projeto escolar.<p>
    </footer>

</body>
</html>