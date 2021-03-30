<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PCP</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<style>
.titu{
    font-size: 20px !important;
    font-weight: bold;
    color: green !important;
}
</style>
<body>
    <?php require_once('../components/Menu.php') ?>
    <h1 class="text-center mt-2" style="color: green">Plano de Produção</h1>
    <div class="container mt-5">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed titu" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        120/5
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">Data</th>
                                    <th scope="col">Molde</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">StatusOP</th>
                                    <th scope="col">OP</th>
                                    <th scope="col">CódItem</th>
                                    <th scope="col">DescriçãoItem</th>
                                    <th scope="col">QtdeOP</th>
                                    <th scope="col">Concluído</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">17/02/2021</th>
                                    <td>M1S1040</td>
                                    <td>TRANSIRE</td>
                                    <td>LIB</td>
                                    <td>62261</td>
                                    <td>03.191.13040.01-00</td>
                                    <td>TAMPA DA BATERIA D155</td>
                                    <td>9900</td>
                                    <td>1000</td>
                                </tr>
                                <tr>
                                    <th scope="row">18/03/2021</th>
                                    <td>M098086</td>
                                    <td>VISTEON</td>
                                    <td>PLAN</td>
                                    <td>60781</td>
                                    <td>03.694.098006.01-00</td>
                                    <td>RESET SHAFT KVSK - HONDA</td>
                                    <td>9400</td>
                                    <td>0</td>
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed titu" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        135/2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">Data</th>
                                    <th scope="col">Molde</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">StatusOP</th>
                                    <th scope="col">OP</th>
                                    <th scope="col">CódItem</th>
                                    <th scope="col">DescriçãoItem</th>
                                    <th scope="col">QtdeOP</th>
                                    <th scope="col">Concluído</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <th scope="row">18/03/2021</th>
                                    <td>M1S1040</td>
                                    <td>TRANSIRE</td>
                                    <td>LIB</td>
                                    <td>62261</td>
                                    <td>03.191.13040.01-00</td>
                                    <td>TAMPA DA BATERIA D155</td>
                                    <td>9900</td>
                                    <td>1000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed titu" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        160/1
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">Data</th>
                                    <th scope="col">Molde</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">StatusOP</th>
                                    <th scope="col">OP</th>
                                    <th scope="col">CódItem</th>
                                    <th scope="col">DescriçãoItem</th>
                                    <th scope="col">QtdeOP</th>
                                    <th scope="col">Concluído</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <th scope="row">20/02/2021</th>
                                    <td>M098086</td>
                                    <td>VISTEON</td>
                                    <td>PLAN</td>
                                    <td>60781</td>
                                    <td>03.694.098006.01-00</td>
                                    <td>RESET SHAFT KVSK - HONDA</td>
                                    <td>9400</td>
                                    <td>0</td>
                                </tr>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
 
</body>

</html>