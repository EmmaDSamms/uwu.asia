<?php
    session_start();
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UwU.asia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="inc/css/main.css">
    <meta name="Description" content="THE UWU'st PLACE ">
    <meta name="Keywords" content="uwu, asia, owo">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to UwU.asia</h1>
            <h2>The UwU'st Place on the internet</h2>
            <div class="pick">
                <p id="poison">Pick your Poison</p>
                <div class="buttons">
                    <button onclick="heyWeeaboo();" class="btn btn-primary">Hey Weeaboo</button>
                    <button onclick="badCopypasta();" class="btn btn-primary">Bad Copypasta Rap</button>
                    <button onclick="bitchL();" class="btn btn-primary">bitch lasagnya</button>
                    <button onclick="cancer();" class="btn btn-danger">PURE CANCER</button>
                </div>
            </div>
            <br>
            <div class="wea" id="wea">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/BNglFBKxcvk?autoplay=1"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <footer class="footer">
            <!-- <p>Owned By Emma#6775</p> -->
        </footer>
    </div>
    <script>
        function heyWeeaboo() {
            var wea = document.getElementById("wea");
            wea.innerHTML = `<iframe width="560" height="315" src="https://www.youtube.com/embed/BNglFBKxcvk?autoplay=1"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>`;
        }

        function badCopypasta() {
            var wea = document.getElementById("wea");
            wea.innerHTML =
                `<iframe width="560" height="315" src="https://www.youtube.com/embed/h6DNdop6pD8?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
        }
        function bitchL() {
            var wea = document.getElementById("wea");
            wea.innerHTML = `<iframe width="560" height="315" src="https://www.youtube.com/embed/fYzwAoD1KI0?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
        }
        function cancer() {
            var wea = document.getElementById("wea");
            wea.innerHTML = `<iframe width="560" height="315" src="https://www.youtube.com/embed/Mz3Mi_OZYno?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`
        }
    </script>
    </div>
</body>

</html>