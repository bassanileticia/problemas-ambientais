<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EcoDenúncia - Registrar Denúncia</title>

    <link rel="stylesheet" href="denuncia.css">

</head>

<body>

    <header class="topo">

        <div class="overlay">

            <div class="header-conteudo">

                <h1 class="logo">EcoDenúncia</h1>

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

                    Registro de Denúncias Ambientais

                </h2>

                <p class="banner-subtitulo">

                    Ajude a preservar sua cidade registrando problemas ambientais.

                </p>

            </div>

        </div>

    </header>



    <main class="conteudo-principal">

        <section class="card formulario-card">

            <span class="secao-mini">

                Formulário

            </span>

            <h2 class="titulo-secao">

                Formulário de Denúncia

            </h2>



            <form action="salvar.php" method="POST" class="formulario">



                <div class="grupo-form">

                    <label class="label">

                        Nome:

                    </label>

                    <input type="text" name="nome" class="input">

                </div>



                <div class="grupo-form">

                    <label class="label">

                        Cidade/Bairro:

                    </label>

                    <input type="text" name="bairro" class="input">

                </div>



                <div class="grupo-form">

                    <label class="label">

                        Tipo de problema:

                    </label>

                    <select name="problema" class="input">

                        <option>Descarte irregular de lixo</option>
                        <option>Queimada</option>
                        <option>Esgoto a céu aberto</option>
                        <option>Bueiro entupido</option>
                        <option>Poluição de rios</option>
                        <option>Outros</option>

                    </select>

                </div>



                <div class="grupo-form">

                    <label class="label">

                        Caso tenha marcado "Outros", descreva:

                    </label>

                    <input type="text" name="outroProblema" class="input">

                </div>



                <div class="grupo-form">

                    <label class="label">

                        Gravidade:

                    </label>

                    <select name="gravidade" class="input">

                        <option>Baixa</option>
                        <option>Média</option>
                        <option>Alta</option>

                    </select>

                </div>



                <div class="grupo-form">

                    <label class="label">

                        Descrição:

                    </label>

                    <textarea name="descricao" class="textarea"></textarea>

                </div>



                <input type="submit" value="Enviar Denúncia" class="botao">



            </form>

        </section>



        <section class="card">

            <div class="card-texto">

                <span class="secao-mini">

                    Conscientização

                </span>

                <h2 class="titulo-secao">

                    Importância da Participação da População

                </h2>

                <p class="texto">

                    A participação da população é muito importante para a preservação
                    do meio ambiente. Pequenas ações podem ajudar na redução da
                    poluição e na melhoria da qualidade de vida da comunidade.

                </p>

                <p class="texto">

                    Através das denúncias registradas no sistema, é possível identificar
                    os problemas ambientais mais frequentes e compreender quais áreas
                    precisam de maior atenção.

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