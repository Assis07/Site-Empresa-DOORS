<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Produtos Doors</title>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link rel="shortout icon" href="favicon.ico.png"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="styleprodutos.css" type="text/css"/>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#accordion").accordion({
                    collapsible: true
                });
            });
        </script>
        <style>
            .ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active, a.ui-button:active, .ui-button:active, .ui-button.ui-state-active:hover {
    border: 1px solid #262626;
    background: #262626;
    font-weight: normal;
    color: #ffffff;
}
        </style>
    </head>
    <body>
        <?php
        include_once './topo.php';
        ?>
        <div id="montagem">
            <img src="imagens/montagem.png">
        </div> 
        <div id="accordion">
            <h2>PC - Goomba Basic</h2>
            <div>
                <div class="produtos">
                    <img src="imagens/basicoprod.png" alt="Computador Básico">
                </div>
                <br>
                <p>Configuração Básica</p>
                <br>
                <p>Montamos esse computador para pessoas que não tem condições financeiras para comprar um computador bom e pessoas que usam o computador para coisas básicas como: entrar no facebook, fazer trabalhos de escola etc.</p>
                <br>
                <p>Peças do Computador</p>
                <br>
                <ul>
                    <li>Placa-mãe: GIGABYTE GA-F2A55M-S1 Micro ATX 2 DDR3</li>
                    <li>Processador: AMD A45300 3.4 Ghz </li>
                    <li>Memória Ram: Gell 1x 4Gb</li>
                    <li>Armazenamento: WD Green 1x SSD 120Gb</li>
                    <li>Fonte: One Power ATX 12V 250W</li>
                    <li>Gabinete: C3 Tech</li>
                    <li>Mouse: Multilaser MO179</li>
                    <li>Teclado: Multilaser TC065</li>
                    <li>Monitor: Acer 19 Polegadas</li>
                    <br>
                    <li>Preço: R$ 1.215,00</li>
                </ul>
                <br>
                <button class="botao" >
                    <a href="contato.php">Encomendar</a>
                </button>
            </div>
            <h2>Boo Gamer</h2>
            <div>
                <div class="produtos">
                    <img src="imagens/intermediarioprod.png" alt="Computador Intermediário">
                </div>
                <br>
                <p>Configuração Intermediária</p>
                <br>
                <p>Montamos esse computador para pessoas gamers que querem um bom desempenho, mas que não querem gastar muito dinheiro com um computador.</p>
                <br>
                <p>Peças do Computador</p>
                <br>
                <ul>
                    <li>Placa-mãe: Gigabyte GA-H110M-GAMING 3 ATX 2 DDR4</li>
                    <li>Processador: Intel Core I7-8700k 3.20 GHz</li>
                    <li>Memória Ram: 2x Kingston HyperX 8Gb</li>
                    <li>Armazenamento: WD HD 1Tb</li>
                    <li>Placa de Vídeo: Gigabyte Geforce GTX 1060</li>
                    <li>Fonte: Corsair ATX 12V 450W</li>
                    <li>Gabinete: Nox</li>
                    <li>Mouse: Razer Deathadder Expert</li>
                    <li>Teclado: C3 Tech KG-30BK</li>
                    <li>Monitor: Asus 24 Polegadas</li>
                    <br>
                    <li>Preço: R$ 5.368,00</li>
                </ul>
                <br>
                 <button class="botao" >
                    <a href="contato.php">Encomendar</a>
                </button>
            </div>
            <h2>Bullet Bill AD</h2>
            <div>
                <div class="produtos">
                    <img src="imagens/avancadoprod.png" alt="Computador Avançado">
                </div>               
                <br>
                <p>Configuração Avançada</p>
                <br>
                <p>Montamos esse computador para pessoas que tem uma condição financeira boa para comprar um pc bom para jogos em geral e youtubers. </p>
                <br>
                <p>Peças do Computador</p>
                <br>
                <ul>
                    <li>Placa-mãe: Gigabyte Z370 Aorus Gaming 7 ATX 4x DDR4</li>
                    <li>Processador: Intel Core I7-8700k 3.20 GHz</li>
                    <li>Memória Ram: 2x G.Skill 16Gb</li>
                    <li>Armazenamento: Seagate HD 3Tb</li>
                    <li>Placa de Vídeo: Gigabyte Geforce GTX 1080Ti</li>
                    <li>Fonte: Corsair ATX 12V 650W</li>
                    <li>Gabinete: Sharkoon TG5</li>
                    <li>Mouse: Razer Deathadder</li>
                    <li>Teclado: Logitech</li>
                    <li>Monitor: LG 29 Polegadas</li>  
                    <br>
                    <li>Preço: R$ 12.975,00</li>
                </ul>
                <br>
                 <button class="botao" >
                    <a href="contato.php">Encomendar</a>
                </button>
            </div>
            <h2>King Bowser Gamer Pro</h2>
            <div>
                <div class="produtos">
                    <img src="imagens/extremeprod.png" alt="Computador Extremo">
                </div>
                <br>
                <p>Configuração Extrema</p>
                <br>
                <p>Escolhemos essas peças para quem busca um computador com ótimo desempenho em jogos.Que possuem condições financeiras boas para comprar um computador deste valor.</p>
                <br>
                <p>Peças do Computador</p>
                <br>
                <ul>
                    <li>Placa-mãe: Asus Prime X299-Deluxe</li>
                    <li>Processador: Intel Core I9-7900-X 3.30 GHz</li>
                    <li>Memória Ram: 2x Corsair 32Gb</li>
                    <li>Armazenamento: Seagate HD 10Tb</li>
                    <li>Placa de Vídeo: 2x Gigabyte Geforce GTX 1080Ti</li>
                    <li>Fonte: Corsair ATX 12V 1.000W</li>
                    <li>Gabinete: Deepcool Genome II Rog</li>
                    <li>Mouse: Razer Mamba 2015</li>
                    <li>Teclado: Blackwidow Chroma V2</li>
                    <li>Monitor: Samsung 49 Polegadas</li>
                    <br>
                    <li>Preço: R$ 29.400,00</li>
                </ul>
                <br>
                <button class="botao" >
                    <a href="contato.php">Encomendar</a>
                </button>
            </div>
        </div>

        <?php
        include_once './rodape.php';
        
        ?>
    </body>
</html>

