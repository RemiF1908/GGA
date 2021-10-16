<!DOCTYPE html>
<html>

<head>
    <?php include("./inc/head.php"); ?>
    <title>Historique des classements</title>
</head>
<body onload="getFileMois('Septembre', 9, 30);">
<?php include("./inc/header.php"); ?>

<h1>Historique :</h1>

<div id="historique">
    <a onclick="getFileMois('Juillet', 7, 31);" class="mois">Juillet</a>
    <a onclick="getFileMois('Aout', 8, 31);" class="mois">Août</a>
    <a onclick="getFileMois('Septembre', 9, 30);" class="mois">Septembre</a>
</div>
<p id="check"></p>
<h2 id="mois"></h2>
<table id="classement">
    <tbody>
    <tr>
        <td>
            <p class="numero">1</p>
        </td>
        <td><img id='img1' src=""/></td>
        <td id="1"></td>
        <td id="gain1"></td>
    </tr>
    <tr>
        <td>
            <p class="numero">2</p>
        </td>
        <td><img id='img2' src=""/></td>
        <td id="2"></td>
        <td id="gain2"></td>
    </tr>
    <tr>
        <td>
            <p class="numero">3</p>
        </td>
        <td><img id='img3' src=""/></td>
        <td id="3"></td>
        <td id="gain3"></td>
    </tr>
    <tr>
        <td>
            <p class="numero">4</p>
        </td>
        <td><img id='img4' src=""/></td>
        <td id="4"></td>
        <td id="gain4"></td>
    </tr>
    <tr>
        <td>
            <p class="numero">5</p>
        </td>
        <td><img id='img5' src=""/></td>
        <td id="5"></td>
        <td id="gain5"></td>
    </tr>
    <tr>
        <td>
            <p class="numero">6</p>
        </td>
        <td><img id='img6' src=""/></td>
        <td id="6"></td>
        <td id="gain6"></td>
    </tr>
    <tr>
        <td>
            <p class="numero">7</p>
        </td>
        <td><img id='img7' src=""/></td>
        <td id="7"></td>
        <td id="gain7"></td>
    </tr>
    <tr>
        <td>
            <p class="numero">8</p>
        </td>
        <td><img id='img8' src=""/></td>
        <td id="8"></td>
        <td id="gain8"></td>
    </tr>
    </tbody>
</table>

</body>
<style>
    #historique {
        display: flex;
        justify-content: space-around;
        width: 30%;

    }

    .mois {
        border: black solid 2px;
        padding: 5px;
        font-family: "Roboto Light";
        font-size: 20px;

    }

    #tempo {
        display: none;
    }

    img {
        width: 100px;
        height: auto;
    }

    td {
        width: 100px;
        height: 100px;
        border: 1px solid black;
        border-collapse: collapse;
        font-family: "Roboto Medium";
        font-size: 20px;
        text-align: center;
    }

    table {
        border-collapse: collapse;
        margin: auto;
        width: 40%;
        margin-bottom: 5%;
        display: none;
    }

    .numero {
        text-align: center;
        font-size: 50px;
    }

    h2 {
        text-align: center;
    }
</style>


<script>

    function triCA(CA) {
        console.log(CA);
        CA.sort(function (b, a) {
            return a[1] - b[1];
        });
    }


    var stations = ['alpeblanche', 'bregars', 'valrige', 'federia', 'cevert', 'capleit', 'bourgbahnen', 'hautacam'];
    var stationComp = ["Alpe Blanche", "Brégars", "Valrige", "Federia", "Cevert", "Capleit", "Bourgbahnen", "Hautacam"];
    var stationsAbr = ['alpe', 'breg', 'val', 'fed', 'cev', 'cap', 'bourg', 'haut'];
    var logos = ["logolab2.svg", "logo-bregars-2.svg", "logo-valrige.svg", "Federia.png", "logo-les-ceverts.png", "logo-capleit.png", "logo-bourgbahnen.jpg", "logo-hautacam.png"];

    function getFileMois(mois, nmois, nbjmois) {
        CA = [];
        document.getElementById('classement').style.display = "table";
        document.getElementById('mois').innerText = mois;
        for (var i = 0; i < stations.length; i++) {
            getFile(nbjmois, mois, nmois, stations[i], 'gain' + stationsAbr[i], i, stationComp[i], logos[i], returnCallback);

        }


    }

    function getFile(numFile, mois, nmois, station, stationabr, index, stationComp, logos, callback) {

        var getHttpRequest = function () {
            var httpRequest = false;

            if (window.XMLHttpRequest) { // Mozilla, Safari,...
                httpRequest = new XMLHttpRequest();
                if (httpRequest.overrideMimeType) {
                    httpRequest.overrideMimeType('text/json');
                }
            } else if (window.ActiveXObject)// IE
            {
                try {
                    httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e) {
                    try {
                        httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e) {
                    }
                }
            }

            if (!httpRequest) {
                alert('Abandon :( Impossible de créer une instance XMLHTTP');
                return false;
            }
            return httpRequest
        }

        var xhr = getHttpRequest()
        xhr.open('GET', 'compta/' + station + '/' + mois + '/' + numFile + '-' + nmois + '-2021.json', true) //recup du fichier gain
        xhr.send()
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    document.getElementById('check').innerText = "";
                    req = xhr.responseText;
                    compta = JSON.parse(req);
                    callback([stationComp, compta.TOTAL[1].Débit, logos]);
                } else {
                    document.getElementById('check').innerText = 'Erreur 404';
                }
            }
            if (xhr.readyState !== 4) {
                document.getElementById('check').innerText = 'Chargement';
            }
        }


    }

    function returnCallback(data) {
        CA.push(data);
        if (CA.length === 8) {
            triCA(CA);
            for (var i = 0; i < stations.length; i++) {
                document.getElementById("gain" + (i + 1)).innerText = String(CA[i][1]).replace(/(.)(?=(\d{3})+$)/g, '$1 ') + "€";
                document.getElementById(i + 1).innerText = CA[i][0];
                document.getElementById("img" + (i + 1)).setAttribute('src', '/logos/' + CA[i][2]);

            }


        }

    }


</script>