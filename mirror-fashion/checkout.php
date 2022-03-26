<!DOCTYPE html>
<html>

<head>
    <title>Mirror Fashion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap-flatly.css">
    <style>
        .navbar{
            margin: 0;
        }

        body{
            padding-top: 65px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-id">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <span class="glyphicon glyphicon-home"></span>
                Mirror Fasion
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-id">
            <ul class="nav navbar-nav">
                <li class="active"><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Perguntas frequentes</a></li>
                <li><a href="#">Entre em contato</a></li>            
            </ul>
        </div>
    </nav>
    <header class="jumbotron text-center">
        <div class="container">
            <h1>Ótima escolha!</h1>
            <p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-3">
                    <aside class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Sua Compra</h2>
                        </div>
                        <div class="panel-body">
                            <img src="img/produtos/foto1-<?= $_POST['cor'] ?>.png" alt="Imagem do produtona cor <?= $_POST['cor'] ?>" class="img-thumbnail img-responsive">
                            <dl>
                                <dt>Produto</dt>
                                <dd>
                                    <?php print $_POST['nome'] ?>
                                </dd>
                                <dt>Cor</dt>
                                <dd>
                                    <?php print $_POST['cor'] ?>
                                </dd>
                                <dt>tamanho</dt>
                                <dd>
                                    <?= $_POST['tamanho'] ?>
                                </dd>
                                <dd id="preco">
                                    <?= $_POST['preco'] ?>
                                </dd>
                            </dl>
                            <div class="form-group">
                                <label for="qt">Quantidade</label>
                                <input type="number" id="qt" class="form-control" min="0" max="99" value="1">
                            </div>
                            <div class="form-group">
                                <label for="total">Total</label>
                                <output for="qt preco" id="total" class="form-control">
                                    <?= $_POST["preco"] ?>
                                </output>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-sm-8 col-lg-9">
                    <section>
                        <form action="" method="post">
                            <div class="row">
                                <fieldset class="col-md-6">
                                    <legend>Dados Pessoais</legend>
                                    <div class="form-group">
                                        <label for="nome">Nome completo</label>
                                        <input type="text" id="nome" name="nome" class="form-control" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail</label>

                                        <div class="input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="email" id="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cpf">Cpf</label>
                                        <input type="text" id="cpf" name="cpf" class="form-control" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="sim" name="receberSpan" id="receberSpan" checked>
                                            Quero receber span da Mirror Fashion
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset  class="col-md-6">
                                    <legend>Cartão de crédito</legend>
                                    <div class="form-group">
                                        <label for="numeroCvv">Número - CVV</label>
                                        <input type="text" id="numeroCvv" name="numeroCvv" class="form-control" data-mask="9999 9999 9999 9999 - 999">
                                    </div>
                                    <div class="form-group">
                                        <label for="bandeira">bandeira</label>
                                        <select name="bandeira" id="bandeira" class="form-control">
                                            <option value="master">MasterCard</option>
                                            <option value="visa">Visa</option>
                                            <option value="amex">American Express</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="validade">Validade</label>
                                        <input type="month" id="validade" name="validade" class="form-control">
                                    </div>
                                </fieldset>
                            </div>
                            <button class="btn btn-primary btn-lg pull-right">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                Confirmar pedido
                            </button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </article>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/inputmask-plugin.js"></script>
    <script src="js/total.js"></script>
</body>

</html>