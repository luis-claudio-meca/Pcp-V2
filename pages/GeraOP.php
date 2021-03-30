<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar OP - PCP</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }

    button.active {
        background-color: #198754 !important;
        color: #fff;
    }
</style>

<body>
    <?php require_once('../components/Menu.php') ?>
    <div class="row">
        <div id="grupo-1" class="col-6">
            <div class="input-group  mt-3 m-2 " style="width: 63%">
                <span class="input-group-text" id="basic-addon1" style="height: 30px">Nº do produto</span>
                <input type="text" style="height: 30px" class="form-control" placeholder="Cód. Interno do Produto" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group  m-2 " style="width: 63%">
                <span class="input-group-text" id="basic-addon1" style="height: 30px">Descrição </span>
                <input type="text" style="height: 30px" class="form-control" placeholder="Descrição do Produto" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group  m-2  " style="width: 63%">
                <span class="input-group-text" id="basic-addon1" style="height: 30px">Quant. planejada</span>
                <input type="number" style="height: 30px" class="form-control" placeholder="Quantidade do Produto" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <input class="btn btn-success m-2" type="button" value="Atualiza agora">
        </div>

        <div id="grupo-2" class="col-6" style="padding-left: 7rem;">
            <div class="input-group  mt-3 m-2 " style="width: 93%;">
                <span class="input-group-text" id="basic-addon1" style="height: 30px">Nº da OP</span>
                <input type="text" style="height: 30px" class="form-control" placeholder="ID da O.P" aria-label="Username" aria-describedby="basic-addon1" disabled>
            </div>
            <div class="input-group  m-2 " style="width: 93%">
                <span class="input-group-text" id="basic-addon1" style="height: 30px">Data do pedido </span>
                <input type="text" style="height: 30px" class="form-control" placeholder="10/11/2020" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group  m-2 " style="width: 93%">
                <span class="input-group-text" id="basic-addon1" style="height: 30px">Data do Inicio </span>
                <input type="text" style="height: 30px" class="form-control" placeholder="10/11/2020" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group  m-2 " style="width: 93%">
                <span class="input-group-text" id="basic-addon1" style="height: 30px">Data do Vencimento </span>
                <input type="text" style="height: 30px" class="form-control" placeholder="10/11/2020" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group  m-2 " style="width: 93%">
                <span class="input-group-text" id="basic-addon1" style="height: 30px">Usuário </span>
                <input type="text" style="height: 30px" class="form-control" placeholder="Luis Claudio" aria-label="Username" aria-describedby="basic-addon1" disabled>
            </div>
            <div class="input-group  m-2 " style="width: 93%">
                <span class="input-group-text" id="basic-addon1" style="height: 30px">Cliente </span>
                <input type="text" style="height: 30px" class="form-control" placeholder="C00075" aria-label="Username" aria-describedby="basic-addon1" disabled>
            </div>
        </div>

        <!-- Tabs navs -->
    <div class="container">
        <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'Components')">Componentes</button>
            <button class="tablinks" onclick="openCity(event, 'Resumo')">Resumo</button>
        </div>

        <div id="Components" class="tabcontent active" style="display: block;">
            <table class="table table-bordered table-striped ">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Tipo</th>
                        <th scope="col">Nº do Item</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Quant. Liq. Planejada</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row">Item</th>
                        <td>03.133.133953.02-00</td>
                        <td>Borracha de MP Diversas</td>
                        <td>0.003752</td>
                        <td>
                            <p>
                                <a href="#" class="btn btn-info " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Disabled tooltip">


                                    <a href="#" class="btn btn-danger " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Remover">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </span>
                            </p>
                        </td>

                    </tr>
                    <tr>
                        <th scope="row">Item</th>
                        <td>1.1.05.06.0027</td>
                        <td>MONOBLOCO PLASTICO AZUL</td>
                        <td>0.003584</td>
                        <td>
                            <p>
                                <a href="#" class="btn btn-info " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Editar">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                                <span class="d-inline-block" tabindex="0" data-bs-toggle="tooltip" title="Disabled tooltip">


                                    <a href="#" class="btn btn-danger " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Remover">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </a>
                                </span>
                            </p>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>

        <div id="Resumo" class="tabcontent">
            <table class="table  table-striped ">
                <thead class="table-success">
                    <tr>
                        <th scope="col">Tipo</th>
                        <th scope="col">Nº do Item</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Quant. Liq. Planejada</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Item</th>
                        <td>03.133.133752.01-00</td>
                        <td>Monobloco Plástico Azul</td>
                        <td>10.000</td>

                    </tr>
                </tbody>
            </table>
        </div>
        </div>

        <button class="btn btn-success" style="width: 10%; margin: 2rem; height: 3rem">Gerar OP</button>
        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>

        <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>