<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EcoDenúncia - Denúncia Registrada</title>

    <link rel="stylesheet" href="salvar.css">

</head>

<body>

<?php

$nome = $_POST["nome"];
$bairro = $_POST["bairro"];
$problema = $_POST["problema"];
$gravidade = $_POST["gravidade"];
$descricao = $_POST["descricao"];

$denuncia = [
    "nome" => $nome,
    "bairro" => $bairro,
    "problema" => $problema,
    "gravidade" => $gravidade,
    "descricao" => $descricao
];

if (file_exists("dados.json")) {

    $conteudo = file_get_contents("dados.json");

    $denuncias = json_decode($conteudo, true);

} else {

    $denuncias = [];

}

$denuncias[] = $denuncia;

$json = json_encode($denuncias);

file_put_contents("dados.json", $json);

?>

    <header class="topo">

        <div class="overlay">

            <div class="header-conteudo">

                <h1 class="logo">

                    EcoDenúncia

                </h1>

                <nav class="menu">

                    <a href="index.php" class="menu-link">Início</a>

                    <a href="denuncia.php" class="menu-link">Fazer Denúncia</a>

                    <a href="lista.php" class="menu-link">Ver Denúncias</a>

                    <a href="impacto.php" class="menu-link">Impacto Ambiental</a>

                </nav>

            </div>

            <div class="banner-texto">

                <h2 class="banner-titulo">

                    Denúncia Registrada com Sucesso

                </h2>

                <p class="banner-subtitulo">

                    Sua participação ajuda na preservação ambiental da cidade.

                </p>

            </div>

        </div>

    </header>



    <main class="conteudo-principal">



        <section class="card sucesso-card">

            <div class="icone-sucesso">

                ✓

            </div>

            <span class="secao-mini">

                Registro Concluído

            </span>

            <h2 class="titulo-secao">

                Denúncia enviada para o sistema

            </h2>

            <p class="texto">

                Sua denúncia ambiental foi cadastrada com sucesso no sistema
                EcoDenúncia. As informações registradas ajudarão na organização
                dos problemas ambientais encontrados na cidade.

            </p>



            <div class="info-box">

                <p class="info-texto">

                    <strong>Nome:</strong> <?php echo $nome; ?>

                </p>

                <p class="info-texto">

                    <strong>Bairro:</strong> <?php echo $bairro; ?>

                </p>

                <p class="info-texto">

                    <strong>Problema:</strong> <?php echo $problema; ?>

                </p>

                <p class="info-texto">

                    <strong>Gravidade:</strong> <?php echo $gravidade; ?>

                </p>

            </div>



            <div class="botoes">

                <a href="lista.php" class="botao-link">

                    <button class="botao">

                        Ver denúncias registradas

                    </button>

                </a>



                <a href="denuncia.php" class="botao-link">

                    <button class="botao botao-secundario">

                        Fazer nova denúncia

                    </button>

                </a>

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