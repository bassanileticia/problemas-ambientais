<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoDenúncia - Registrar Denúncia</title>
</head>

<body>

    <header>

        <h1>EcoAlerta</h1>

        <nav>
            <a href="index.php">Início</a> |
            <a href="denuncia.php">Fazer Denúncia</a> |
            <a href="lista.php">Ver Denúncias</a> |
            <a href="impacto.php">Impacto Ambiental</a>
        </nav>

    </header>

    <main>

        <section>

            <h2>Registro de Denúncia Ambiental</h2>

            <p>
                Esta página foi desenvolvida para permitir o registro de problemas
                ambientais encontrados na cidade. O objetivo é organizar as
                informações sobre descarte irregular de lixo, queimadas,
                esgoto a céu aberto e outros problemas que afetam o meio ambiente.
            </p>

        </section>

        <section>

            <h2>Formulário de Denúncia</h2>

            <form action="salvar.php" method="POST">

                <p>
                    Nome:
                </p>

                <input type="text" name="nome">

                <br><br>

                <p>
                    Cidade/Bairro:
                </p>

                <input type="text" name="bairro">

                <br><br>

                <p>
                    Tipo de problema:
                </p>

                <select name="problema">

                    <option>Descarte irregular de lixo</option>
                    <option>Queimada</option>
                    <option>Esgoto a céu aberto</option>
                    <option>Bueiro entupido</option>
                    <option>Poluição de rios</option>
                    <option>Outros</option>

                </select>

                <br>

                <p>
                    Caso tenha marcado "Outros", descreva:
                </p>

                <input type="text" name="outroProblema">

                <br><br>

                <p>
                    Gravidade:
                </p>

                <select name="gravidade">

                    <option>Baixa</option>
                    <option>Média</option>
                    <option>Alta</option>

                </select>

                <br><br>

                <p>
                    Descrição:
                </p>

                <textarea name="descricao"></textarea>

                <br><br>

                <input type="submit" value="Enviar Denúncia">

            </form>

        </section>

        <section>

            <h2>Importância da Participação da População</h2>

            <p>
                A participação da população é muito importante para a preservação
                do meio ambiente. Pequenas ações podem ajudar na redução da
                poluição e na melhoria da qualidade de vida da comunidade.
            </p>

            <p>
                Através das denúncias registradas no sistema, é possível identificar
                os problemas ambientais mais frequentes e compreender quais áreas
                precisam de maior atenção.
            </p>

        </section>

    </main>

    <footer>
        <p>&copy; - 2026 - Site desenvolvido como projeto escolar.
        <p>
    </footer>


</body>

</html>