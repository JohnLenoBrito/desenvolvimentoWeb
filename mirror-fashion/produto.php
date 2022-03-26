<html>

<?php
    $tituloPagina = "Produto Mirror Fashion";
    $cssPagina = '<link rel="stylesheet" href="css/produto.css">';
    include('head.php');
?>

<body>
    <?php include('header.php'); ?>
    <div class='container'>
        <article class='produto'>
            <h1>Camiseta EckoCaveira Bad to The Bone</h1>
            <h2>Por apenas R$ 48,95</h2>
            <form action="checkout.php" method="POST">
                <fieldset class="cores">
                    <legend>Escolha a cor:</legend>
                    <input type="radio" id="azul" name="cor" value="azul">
                    <label for="azul">
                        <img src="img/produtos/foto2-azul.png">
                    </label>
                    <input type="radio" id="rosa" name="cor" value="rosa" checked>
                    <label for="rosa">
                        <img src="img/produtos/foto2-rosa.png">
                    </label>
                    <input type="radio" id="verde" name="cor" value="verde">
                    <label for="verde">
                        <img src="img/produtos/foto2-verde.png">
                    </label>
                </fieldset>
                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho</legend>
                    <input type="range" min="36" max="46" step="2" name="tamanho" value="42" id="tamanho">
                    <output>42</output>
                </fieldset>

                <input type="hidden" name="nome" value="Fuzzy Cardigan">
                <input type="hidden" name="preco" value="129,00">

                <button type="submit" class="comprar">Comprar</button>
            </form>
        </article>
        <div class="detalhes">
            <h2>Detalhes do Produto</h2>

            <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega ajato.</p>
        </div>
    </div>
    <?php include('footer.php') ?>
    <script>

        var inputTamanho = document.querySelector('[name=tamanho]')
        var outputTamanho = document.querySelector('output')
        function atualizaTamanho(){
            outputTamanho.value = inputTamanho.value
        }

        inputTamanho.oninput = atualizaTamanho
        
    </script>
</body>