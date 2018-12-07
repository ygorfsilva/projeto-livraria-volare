<?php require_once("header.php"); ?>
    <div class="container-fluid col-md-6 margintop">
        <h1>Meu carrinho</h1>
        <table class="table text-center">
            <thead>
                <tr>
                <th scope="col">Produto</th>
                <th scope="col">#</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="https://placeholder.com"><img src="http://via.placeholder.com/150"></a>
                    </td>
                    <td>
                        Nome do produto
                    </td>
                    <td>
                        <div class="form-group"><!--tentar alinhar-->
                            <input type="number" class="form-control col-2" name="qtdProduto" min="1">
                        </div>
                    </td>
                    <td>R$00,00</td>
                    <td><!--fazer um js-->R$00,00</td>
                </tr>
                <tr>
            </tbody>
        </table>
    </div>
<?php require_once("footer.php"); ?>