<!DOCTYPE html>
<html>
<head>
    <title>ORACLE-PROPHET</title>

    <!-- META TAGS COMPATIBILIDADE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" >
    <meta charset="UTF-8">

    <!-- META TAGS SEO -->
    <meta name="author" content="Saulo Candeira">
    <meta name="description" content="Projeto Web Design Para Negócios">
    <meta name="keyword" content="Design, Programação, Vendas, Marketing">
    
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./img/logo.png">

    
    <!-- META TAGS SMO ESSENCIAS -->
    <meta name="og:title" content="Fullstack Growth - Projeto Base">
    <meta name="og:description" content="Veja os nossos produtos">
    <meta name="og:image" content="img/logo.png">
    <meta name="og:url" content="fullstackgrowth.com.br/base">

    <!-- FONTES E ESTILOS -->
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- ANALYTICS E PIXELS -->
    
</head>


<body>
    

    <!-- HEADER -->
    <header class="nav-bar">
        <img src="./img/logo.png" alt="Logo Floricultura">
    </header>
    <!-- HEADER -->

    <!-- SESSAO LINKS-->
    <section class="container-master btn">

        <!-- LINKS -->

        <?php include 'web-scrap.php'; ?>

        <?php foreach($values as $value): ?>

        <a href="#" > 
            <?php
            
            echo "<br>PRICE........: ".$value['price'];
	        echo "<br>SYMBOL........: ".$value['name'];
            ?>
        </a>

        <?php endforeach; ?>    
      <!-- LINKS -->

    </section>
    <!-- SESSAO LINKS -->
    
    <!-- FOOTER -->
    <footer>

    </footer>
    <!-- FOOTER -->

</body>
</html>