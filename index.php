<?php


?>
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/style.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

<title>Rainy</title>


<body style="background-image: url(img/background\ 2.gif);">

    <div class="header">
        <h1>Rainy</h1>
    </div>

    <br>
    <br>

    <div class="botoes">
        <button class="botao1" onclick="PlaySound('melody')"> <img src="img/chuva.png" width="78" height="78" alt="nuvem" id="nuvem1"> </button>
        <button class="botao2" onclick="PlaySound2('melody')"> <img src="img/xicara2.png" width="64" height="64" alt="xicara" id="xicara1"> </button>
        <button class="botao3" onclick="PlaySound3('melody')"> <img src="img/car.png" width="75" height="75" alt="carro" id="carro1"> </button>
        <button class="botao4" onclick="PlaySound4('melody')"> <img src="img/sea.png" width="75" height="75" alt="mar" id="mar1"> </button>
        <button class="botao5" onclick="PlaySound5('melody')"> <img src="img/fire.png" width="75" height="75" alt="fogo" id="fogo1"> </button>
        <button class="botao6" onclick="PlaySound6('melody')"> <img src="img/wind2.png" width="75" height="75" alt="vento" id="vento1"> </button>

        <button class="btn btn-primary" onclick="StopSound()" style="margin-top: 15px;">
            Parar todos
        </button>
    </div>
    <input type="range" id="weight" min="0" value="0.5" max="1" step="0.1" onchange="UpdateVolume(this.value)">

    <script>
        var snd = new Audio("./chuva.mp3");
        snd.loop = true
        var snd2 = new Audio("./cafe.mp3");
        snd2.loop = true
        var snd3 = new Audio("./carros passando.mp3");
        snd3.loop = true
        var snd4 = new Audio("./som de mar.mp3");
        snd4.loop = true
        var snd5 = new Audio("./fogueira.mp3");
        snd5.loop = true
        var snd6 = new Audio("./vento.mp3");
        snd6.loop = true

        function PlaySound(melody) {


            snd.play();
        }

        function PlaySound2(melody) {


            snd2.play();
        }

        function PlaySound3(melody) {

            snd3.play();
        }

        function PlaySound4(melody) {

            snd4.play();
        }

        function PlaySound5(melody) {

            snd5.play();
        }
        
        function PlaySound6(melody) {

        snd6.play();
        }




        function StopSound() {
            snd.pause()
            snd2.pause()
            snd3.pause()
            snd4.pause()
            snd5.pause()
            snd6.pause()
        }

        function UpdateVolume(value) {
            console.log(value);
            snd.volume = value
            snd2.volume = value
            snd3.volume = value
            snd4.volume = value
            snd5.volume = value
            snd6.volume = value
        }
    </script>


</body>

<footer class="footer"><a href="https://www.twitch.tv/axxpn" target=_blank> Support Us</a></footer>

</html>