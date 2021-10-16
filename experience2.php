<button id="ajaxButton" type="button" onClick="caca()">Faire une requête</button>
<p id="cc"></p>
<form NAME="Choix">
    <select name="pets" id="pet-select" onChange="caca()">
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
    </select>
</form>


<script>
    po = ['e'];
    eee= document.getElementById('cc');
    function caca() {
        pipi(1);

        po.forEach(element => eee.innerText = eee.textContent + element);
    }
    var getHttpRequest = function () {
        var httpRequest = false;

        if (window.XMLHttpRequest) { // Mozilla, Safari,...
            httpRequest = new XMLHttpRequest();
        }
        else if (window.ActiveXObject) { // IE
            try {
                httpRequest = new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e) {
                try {
                    httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch (e) {}
            }
        }

        if (!httpRequest) {
            alert('Abandon :( Impossible de créer une instance XMLHTTP');
            return false;
        }

        return httpRequest
    }
    function ii(){
        return 'a';
    }

    function pipi(jours) {
        var xhr = getHttpRequest()
        for(i=1; i<7; i++) {


            xhr.open('GET', '/compta/bregars/Aout/' + jours + '-8-2021.json', true)
            // On envoit un header pour indiquer au serveur que la page est appellée en Ajax
            // On lance la requête
            xhr.send()
        }
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    jso = JSON.parse(xhr.responseText);
                    po.push(jso['TOTAL'][1]['Débit']);
                } else {
                    alert("C4EST LE CACA");
                }
            }

        }

    }
</script>



