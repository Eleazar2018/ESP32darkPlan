<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
    header("location: index.php");
    exit;
}
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Projeto</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <a href="sair.php">SAIR do SISTEMA</a>
    </div>
    <div class="container-privado">
        <form method="post" action="leds.php">            
            <input type="submit" class="btn btn-primary" value="sim" name="enviou">
            <input type="submit" class="btn btn-primary" value="LIGAR LED" name="ligar">
            <input type="submit" class="btn btn-primary" value="DESLIGAR LED" name="desligar">
        </form>
        
    </div>

    <div class="container-privado">
        <form method="post" action="leds.php">
            <!--<input type="submit" value="LIGAR LED" name="ligar"> 
			<input type="submit" value="DESLIGAR LED" name="desligar">-->
            <input type="hidden" value="sim" name="enviou">
            <input type="submit" class="btn btn-primary" value="LIGAR ARDUINO" name="ligar">
            <input type="submit" class="btn btn-primary" value="DESLIGAR ARDUINO" name="desligar">
        </form>
    </div>
    <div class="container-privado">
        <form method="post" action="leds.php">
            <!--<input type="submit" value="LIGAR LED" name="ligar"> 
			<input type="submit" value="DESLIGAR LED" name="desligar">-->
            <input type="hidden" value="sim" name="enviou">
            <input type="submit" class="btn btn-primary" value="GERAR GRÁFICO" name="ligar">
            <input type="submit" class="btn btn-primary" value="GERAR RELATÓRIO" name="desligar">
            <button type="button" class="btn btn-outline-info-meustilo">Info</button>
            <button type="button" class="btn btn-outline-info">Info2</button>
        </form>
    </div>

    <div class="container-privado">
        <form method="post" action="leds.php">
            <!--<input type="submit" value="LIGAR LED" name="ligar"> 
			<input type="submit" value="DESLIGAR LED" name="desligar">-->
            <input type="hidden" value="sim" name="enviou">
            <input type="submit" class="btn btn-primary" value="TREINAMENTOS" name="ligar">
            <input type="submit" class="btn btn-primary" value="INDICADORES" name="desligar">
        </form>
    </div>

    <div class="container mt-3">
        <h2>Tabela de dados lidos pelo arduino</h2>
        <h3>Dados coletados:</h3>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Operador</th>
                    <th>Date time</th>
                    <th>Humidity(%)</th>
                    <th>Temperature(C)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Turma A</th>
                    <td>29-09-2022 07:00</td>
                    <td>15</td>
                    <td>13</td>
                </tr>
                <tr>
                    <th>Turma B</th>
                    <td>29-09-2022 07:30</td>
                    <td>16</td>
                    <td>19</td>
                </tr>
                <tr>
                    <th>Turma C</th>
                    <td>29-09-2022 07:45</td>
                    <td>16.5</td>
                    <td>22</td>
                </tr>
            </tbody>
        </table>
    </div>
    <main class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <img src="https://picsum.photos/id/233/600/400" alt="" class="img-fluid" />
                </div>
                <div class="col-md-5">
                    <h1 class="mt-5">Tagline</h1>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                        veniam suscipit accusantium quibusdam dicta nesciunt esse? Id
                        itaque incidunt sint distinctio voluptatem tempore tempora aliquam
                        sunt, vel, repellat velit. Vel!
                    </p>
                    <button type="button" class="btn btn-primary mt-3">
                        Call to action!
                    </button>
                </div>
            </div>
            <!-- <div class="row my-5"> -->
                <!-- <div class="col"> -->
                    <!-- <div class="bg-secondary text-white my-3 py-3 card text-center"> -->
                        <!-- <div class="card-body"> -->
                            <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, -->
                            <!-- facere. -->
                        <!-- </div> -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div> -->
            <div class="row my-5">
                <div class="col">
                    <div class="card-group">
                        <div class="card">
                            <img src="https://picsum.photos/id/200/320/200" class="card-img-top" alt="..." />

                            <div class="card-body">
                                <h5 class="card-title">INDICADORES</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This card has even longer
                                    content than the first to show that equal height action.
                                </p>

                                <div class="">
                                    <a href="#"><button type="button" class="btn btn-primary">
                                            Saiba mais
                                        </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://picsum.photos/id/201/320/200" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">RELATÓRIOS</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This card has even longer
                                    content than the first to show that equal height action.
                                </p>

                                <div class="">
                                    <a href="#"><button type="button" class="btn btn-primary">
                                            Saiba mais
                                        </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <img src="https://picsum.photos/id/202/320/200" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">TREINAMENTOS</h5>
                                <p class="card-text">
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This card has even longer
                                    content than the first to show that equal height action.
                                </p>

                                <div class="">
                                    <a href="#"><button type="button" class="btn btn-primary">
                                            Para saber mais
                                        </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer mt-auto py-3 bg-dark">
                <div class="container">
                    <span class="text-muted">Copyrights
                        <a href="https://mdbootstrap.com">MDBootstrap.com</a></span>
                </div>
            </footer>

</body>

</html>
<?php
if (isset($_POST["enviou"])) {
    $enviou = $_POST['enviou'];
    //Variáveis que vieram do formulário, Controlam o ligar e desligar dos leds 

    if ($enviou == "sim") //Verifica se usuário enviou formulário 
    {
        $Object = new DateTime();

        if (isset($_POST["ligar"])) //Envia informação para a porta serial que será lida pelo arduino 
        {
            $porta = fopen("/dev/ttyACM0", 'w+');
            sleep(2);
            fwrite($porta, 'l'); //Liga led 
            sleep(1);
            $valor = fread($porta, 1024);
            echo "Valor recebido = {$valor}";
            fclose($porta);

            $DateAndTime = $Object->format("d-m-Y h:i:s a");
            $arq = fopen("dados.txt", "a+");
            fwrite($arq, "Valor Recebido = {$valor} - {$DateAndTime}\n");
            fclose($arq);
        } else if (isset($_POST["desligar"])) {
            $porta = fopen("/dev/ttyACM0", 'w+');
            sleep(2);
            fwrite($porta, 'd'); //Desliga led 
            sleep(1);
            $valor = fread($porta, 1024);
            echo "Valor recebido = {$valor}";
            fclose($porta);
            $arq = fopen("dados.txt", "a+");
            $DateAndTime = $Object->format("d-m-Y h:i:s a");
            fwrite($arq, "Valor Recebido = {$valor} - {$DateAndTime}\n");
            fclose($arq);
        }
    }
} // fecha o if principal
?>