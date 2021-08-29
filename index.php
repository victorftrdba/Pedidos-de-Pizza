<!doctype html>
<html lang="en">

<head>
    <title>JavaScript</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container pb-5">
        <div class="row">
            <div class="col d-flex flex-column font-weight-bold">
                <?php if($_GET['pedidoSucesso']) { ?>
                <div class="bg-success w-25 mt-5 p-2 rounded text-white">Pedido enviado com sucesso!</div>
                <?php } ?>
                <form action="pedido.php" method='POST' class="pt-5">
                    Nome
                    <input name="nome" type="text" />
                    <div class="item">
                        Calabresa
                        <div class="preco-item">15.90</div>
                        <a class="btn btn-primary text-white" id="btn-incrementa">Adicionar</a>
                        <input type="number" readonly id="quantidade" value="0" name="calabresa" />
                        <a class="btn btn-danger text-white" id="btn-decrementa">Diminuir</a>
                    </div><br>
                    <hr>
                    <div class="item">
                        Queijo
                        <div class="preco-item">12.90</div>
                        <a class="btn btn-primary text-white" id="btn-incrementa">Adicionar</a>
                        <input type="number" readonly id="quantidade" value="0" name="queijo" />
                        <a class="btn btn-danger text-white" id="btn-decrementa">Diminuir</a>
                    </div><br>
                    <hr>
                    <div class="item">
                        Presunto
                        <div class="preco-item">11.90</div>
                        <a class="btn btn-primary text-white" id="btn-incrementa">Adicionar</a>
                        <input type="number" readonly id="quantidade" value="0" name="presunto" />
                        <a class="btn btn-danger text-white" id="btn-decrementa">Diminuir</a>
                    </div><br>
                    R$<input id="total" readonly name="total" value="0" />
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="app.js"></script>
</body>

</html>