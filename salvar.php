

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoDenúncia - registrada</title>
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
    <h1>Denúncia registrada com sucesso!</h1>

    <p>
        Sua denúncia ambiental foi cadastrada no sistema EcoDenúncia.
    </p>

    <a href="lista.php">
        Ver denúncias registradas
    </a>

    <br><br>

    <a href="denuncia.php">
        Fazer nova denúncia
    </a>

    <footer>
         <p>&copy; - 2026 - Site desenvolvido como projeto escolar.<p>
    </footer>

</body>
</html>