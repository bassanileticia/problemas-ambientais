<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoDenúncia - Impacto Ambiental</title>
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

            <h2>Impacto Ambiental</h2>

            <p>
                Esta página apresenta informações relacionadas aos impactos
                ambientais registrados no sistema EcoDenúncia.
            </p>

            <p>
                O objetivo é demonstrar como pequenos problemas ambientais
                podem gerar grandes consequências para a cidade, afetando
                a saúde pública, a limpeza urbana e a qualidade de vida da
                população.
            </p>

        </section>

        <section>

            <h2>Informações Registradas</h2>

            <p>
                Total de denúncias registradas:
            </p>

            <h3>
                <?php echo $totalDenuncias; ?>
            </h3>

            <br>

            <p>
                Denúncias classificadas com gravidade alta:
            </p>

            <h3>
                <?php echo $gravidadeAlta; ?>
            </h3>

        </section>

        <section>

            <h2>Consequências dos Problemas Ambientais</h2>

            <p>
                O descarte irregular de lixo e outros problemas ambientais
                podem causar diversos impactos negativos para a cidade.
            </p>

            <p>
                Entre os principais problemas estão o aumento da poluição,
                a proliferação de insetos e doenças, o entupimento de bueiros
                e o risco de enchentes em períodos de chuva.
            </p>

            <p>
                Além disso, queimadas e poluição da água prejudicam diretamente
                o meio ambiente e afetam a qualidade de vida da população.
            </p>

            <p>
                A conscientização ambiental e a participação da comunidade
                são fundamentais para reduzir esses impactos e preservar os
                espaços urbanos.
            </p>

        </section>

    </main>

    <br>

    <footer>
     <p>&copy; - 2026 - Site desenvolvido como projeto escolar.<p>
    </footer>

</body>
</html>