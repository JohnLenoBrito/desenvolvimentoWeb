<!DOCTYPE html>
<html>

<head>
    <title>Sobre a Mirror Fashion</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/sobre.css">
    <link href="https://fonts.googleapis.com/css?family=Rye" rel="stylesheet">
</head>

<body>
    <header>

        <h1>
            <img src="img/logo.png" alt="Mirror Fashion">
        </h1>
        <div class="sacola">
            <span>Nenhum item na sacola de compras</span>
        </div>
        <nav class="menu-opcoes">
            <a href="#">Sua Conta</a>
            <a href="#">Lista de Desejos</a>
            <a href="#">Cartão Fidelidade</a>
            <a href="sobre.html">Sobre</a>
            <a href="#">Ajuda</a>
        </nav>
    </header>
    <section>
        <h1>A Mirror Fashion</h1>
        <p>
            A <strong>Mirror Fashion</strong> é a maior empresa comércio eletrônico no segmento de moda em todo o mundo.
            Fundada à <?php print date('Y') - 1932 ?> anos, possui filiais em 124 países, sendo líder de mercado com mais de 90% de participação em 118
            deles.
        </p>
        <p>
            Nosso centro de distribuição fica em <a href="http://maps.google.com.br/?q=Jacarezinho" target="_blank">Jacarezinho, no Paraná</a>.
            De lá, saem 48 aviões que distribuem nossos produtos às casas do mundo todo. Nosso centro de distribuição:
        </p>
        <figure id="centro-distribuicao">
            <img src="img/centro-distribuicao.png" alt="Centro de distribuição">
            <figcaption>Centro de distribuição da Mirror Fashion</figcaption>
        </figure>
        <p>
            Compre suas roupas e acessórios na Mirror Fashion. Acesse <a href="index.html">nossa loja</a> ou entre em contato
            se tiver dúvidas. Conheça também nossa <a href="#historia">história</a> e nossos <a href="#diferenciais">diferenciais</a>.
        </p>
        <h2 id="historia">História</h2>
        <figure id="familia-pelho">
            <img id="familia-pelho" src="img/familia-pelho.jpg">
            <figcaption>Familília Pelho</figcaption>
        </figure>
        <p>
            A fundação em 1932 ocorreu no momento da descoberta econônica do interior do Paraná. A família Pelho, tradicional da região,
            investiu todas as suas economias nessa nova iniciativa, revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>,
            dotado de particular visão administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles
            ao lado de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.
        </p>
        <p>
            O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. Bateu a marca de 100 países
            em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões de usuários diferentes, em bilhões de diferentes
            pedidos.
        </p>
        <p>
            O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do Brasil, mas mesmo após apenas
            5 anos de sua existência, já possuía 30 mil funcionários. Fora do Brasil, há 240 mil funcionários, além dos 890
            mil brasileiros nas instalações de Jacarezinho e nos escritórios em todo país.
        </p>
        <p>
            Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, homenagens e condecorações.
            Todos os presidentes do Brasil já visitaram as instalações da Mirror Fashion, além de presidentes da União Européia,
            Ásia e o secretário-geral da ONU.
        </p>
        <h2 id="diferenciais">Diferenciais</h2>
        <ul>
            <li>Menor preço do varejo, garantido</li>
            <li>Se você achar uma loja mais barata, leva o produto de graça</li>
            <li>Pague em reais, dólares, euros ou bitcoins</li>
            <li>Todas as compras com frete grátis para o mundo todo</li>
            <li>Maior comércio eletrônico de moda do mundo</li>
            <li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama</li>
            <li>Presente em 124 países</li>
            <li>Mais de um milhão de funcionários em todo o mundo</li>
        </ul>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Tb06abHE4hY" frameborder="0" allowfullscreen></iframe>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58692.97053520256!2d-50.00335840524649!3d-23.158859180226475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c026544d26f253%3A0xc66dac11dad56f73!2sJacarezinho%2C+PR%2C+86400-000!5e0!3m2!1spt-BR!2sbr!4v1507336099157" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmirrorfashion&tabs=timeline&width=180&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="180" height="70" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </section>
    <footer id="rodape">
        <img src="img/logo.png"> &copy; Copyright Mirror Fashion <?php print date('Y') ?>
    </footer>
</body>

</html>