<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="shortout icon" href="favicon.ico.png"/>
        <link rel="shortout icon" href="#"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <title>Empresa Doors</title>
    </head>
    <body>
        <?php
        include_once './topoIngles.php';
        ?>
        <div id="slider">
            <ul class="slides">
                <input type="radio" name="radio-btn" id="img-1" checked />
                <li class="slide-container">
                    <div class="slide">
                        <img src="imagens/basico.png" alt="computador básico" />
                    </div>
                    <div class="nav">
                        <label for="img-6" class="prev">&#x2039;</label>
                        <label for="img-2" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-2" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="imagens/intermediario.png" alt="computador intermediario" />
                    </div>
                    <div class="nav">
                        <label for="img-1" class="prev">&#x2039;</label>
                        <label for="img-3" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-3" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="imagens/avancado.png" alt="computador avançado" />
                    </div>
                    <div class="nav">
                        <label for="img-2" class="prev">&#x2039;</label>
                        <label for="img-4" class="next">&#x203a;</label>
                    </div>
                </li>

                <input type="radio" name="radio-btn" id="img-4" />
                <li class="slide-container">
                    <div class="slide">
                        <img src="imagens/extreme.png" alt="computador extremo" />
                    </div>
                    <div class="nav">
                        <label for="img-3" class="prev">&#x2039;</label>
                        <label for="img-5" class="next">&#x203a;</label>
                    </div>
                </li>


                <li class="nav-dots">
                    <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                    <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                    <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                    <label for="img-4" class="nav-dot" id="img-dot-4"></label>

                </li>
            </ul>
        </div>
        <div id="banner">
            <div id="textoBanner">
                <p>COME AND SEE</p>
                <p>OUR PRODUCTS</p>
            </div>
            <div id="botaoBanner" style="width: 200px;">
                <a href="produtos.php">Learn More</a>
            </div>
        </div>
        <?php      
        include_once './rodapeingles.php';
        ?>
    </body>
</html>
