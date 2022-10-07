<html>
<head>
    <meta charset="utf-8">
    <title>PHP-Post - Heróis</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
</head>

<body>
<form id="hero_form" action="destino.php" method="post">
    <section id="container">
        <div class="form-area">
            <div class="changes-area">
            <div id="hero_image"><img src="img/marvel/oneaboveall.jpg"></div>
                <div class="input-h-area">
                    <div class="input-block">
                        <label for="hero_name"><b>Nome do Herói</b></label>
                        <div id="hero_area">
                            <select id="hero_options" name="hero_name" onchange="hero_image_marvel()">
                                <option value="oneaboveall">One Above All</option>
                                <option value="panteranegra">Pantera Negra</option>
                                <option value="homemaranha">Homem Aranha</option>
                                <option value="homemdeferro">Homem de Ferro</option>
                                <option value="capitaoamerica">Capitão América</option>
                                <option value="homemformiga">Homem Formiga</option>
                                <option value="hulk">Hulk</option>
                                <option value="thor">Thor</option>
                                <option value="visao">Visão</option>
                                <option value="wolverine">Wolverine</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-block">
                        <label for="hero_number"><b>Quantidade</b></label>
                        <input id="hero_repeat" type="number" name="hero_number" value="1" min="1" max="50">
                    </div>
                </div>
                
                <div class="input-h-area">
                    <div class="radio-universe">
                        <label for="marvel">Marvel</label>
                        <input type="radio" id="marvel" name="hero_universe" value="marvel" checked="true" onclick="marvel_check(), hero_image_marvel()">
                        <label for="dc">DC</label>
                        <input type="radio" id="dc" name="hero_universe" value="dc" onclick="dc_check(), hero_image_dc()">
                    </div>
                </div>
            </div>
            <div id="submit-block" class="submit-button">
                <input type="submit" value="Enviar">
            </div>
        </div>   
    </section>
</form>
</body>
</html>