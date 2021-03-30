<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carteira- PCP</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<style>
    .card-marg {
        margin: 0 auto !important;
        border-radius: 20px;
        overflow: hidden;
        -webkit-box-shadow: 15px 15px 27px #e1e1e3, -15px -15px 27px #ffffff;
        box-shadow: 15px 15px 27px #e1e1e3, -15px -15px 27px #ffffff;
    }

    .card-marg img {
        width: 160px;
        height: 170px;
        margin: auto;
    }
</style>

<body>
    <?php require_once('../components/Menu.php') ?>

    <div class="row mt-5 ">
        <div class="card col-4 card-marg" style="width: 20rem;">
            <img class="card-img-top" src="../img/wallet.png" alt="Imagem de capa do card">
            <div class="card-body text-center">
                <h5 class="card-title"> Carteira Geral Auzimar</h5>
                <p class="card-text">A carteira de vendas geral Auzimar.</p>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#carteirageral">
                    Consultar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="carteirageral" tabindex="-1" aria-labelledby="carteiragerallabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="carteiragerallabel">Carteira Geral Auzimar</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr class="table-success">
                                            <th>Cod. Cliente/Fornecedor</th>
                                            <th>Cod. Interno Item</th>
                                            <th>Quantidade do Item</th>
                                            <th>DelivrdQty</th>
                                            <th>Quantidade Pendente </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>C00133</td>
                                            <td>03.133.133953.02-00</td>
                                            <td>210.000</td>
                                            <td>70.000</td>
                                            <td>140.000</td>
                                        </tr>
                                        <tr>
                                            <td>C00133</td>
                                            <td>03.133.133953.02-00</td>
                                            <td>150.000</td>
                                            <td>80.000</td>
                                            <td>70.000</td>
                                        </tr>
                                        <tr>
                                            <td>C00133</td>
                                            <td>03.133.133953.02-00</td>
                                            <td>50.000</td>
                                            <td>40.000</td>
                                            <td>10.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card col-4 card-marg" style="width: 20rem;">
            <img class="card-img-top" src="../img/wallet.png" alt="Imagem de capa do card">
            <div class="card-body text-center">
                <h5 class="card-title"> Carteira Auzimar por Cliente</h5>
                <p class="card-text">A carteira de vendas Auzimar por cliente.</p>


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#carteiraporcliente">
                    Consultar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="carteiraporcliente" tabindex="-1" aria-labelledby="carteiraporclientelabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="carteiraporclientelabel">Carteira Auzimar por Cliente</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Forms -->
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="datas">
                                    <label for="floatingInput">Linha da data de entrega</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput2" placeholder="codigo">
                                    <label for="floatingPassword">Código do Cliente/Fornecedor</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#carteiraporclienteok">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="carteiraporclienteok" tabindex="-1" aria-labelledby="carteiraporclienteoklabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="carteiraporclienteoklabel">Carteira Auzimar por Cliente</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr class="table-success">
                                            <th>Cod. Cliente/Fornecedor</th>
                                            <th>Cod. Interno Item</th>
                                            <th>Quantidade do Item</th>
                                            <th>DelivrdQty</th>
                                            <th>Quantidade Pendente </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>C00133</td>
                                            <td>03.133.133953.02-00</td>
                                            <td>210.000</td>
                                            <td>70.000</td>
                                            <td>140.000</td>
                                        </tr>
                                        <tr>
                                            <td>C00133</td>
                                            <td>03.133.133953.02-00</td>
                                            <td>150.000</td>
                                            <td>80.000</td>
                                            <td>70.000</td>
                                        </tr>
                                        <tr>
                                            <td>C00133</td>
                                            <td>03.133.133953.02-00</td>
                                            <td>50.000</td>
                                            <td>40.000</td>
                                            <td>10.000</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>

    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>