<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Beatriz V. | Formulário</title>

        <link rel="stylesheet" href="estilo.css">
        <script src="https://kit.fontawesome.com/df07cb0f03.js" crossorigin="anonymous"></script>
    </head>
    <body>

        <div id="navbar" class="ret"> <!-- BARRA DE NAVEGAÇÃO -->

            <table> <!-- TABELA NAVBAR -->

                <tr>
                    <th>
                        <i class="fas fa-bars"></i> MENU
                    </th>
                </tr>

                <tr>
                    <td>
                        <a href="site_simples.html">Home</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="airsoft.html">Airsoft</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="recomendacoes.html">Lojas BR</a>
                    </td>
                </tr>

            </table> <!-- FIM TABELA NAVBAR -->

        </div> <!-- FIM BARRA DE NAVEGAÇÃO -->

        <div id="main"> <!-- CONTEUDO PRINCIPAL -->

            <h1>Formulario enviado com sucesso</h1>
            <p>
                <h3>Dados:</h3> 
                <?php
                    // Pegando as variaveis recebidas do form recomendacoes.html
                    $nome = $_GET['nome'];
                    $email = $_GET['email'];
                    $telefone = $_GET['telefone'];
                    $estado = $_GET['estado'];

                    echo "<ul><li>  <strong> Nome enviado:     </strong> ".$nome;
                    echo "</li><li> <strong> Email enviado:    </strong>".$email;
                    echo "</li><li> <strong> Telefone enviado: </strong> ".$telefone;
                    echo "</li><li> <strong> Estado enviado:   </strong> ".$estado;
                    echo "</li></ul>";
                ?>
            </p> 

        </div> <!-- FIM CONTEUDO PRINCIPAL -->
        
    </body>
</html>