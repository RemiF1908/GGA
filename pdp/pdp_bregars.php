



<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="297mm"
   height="210mm"
   viewBox="0 0 297 210"
   version="1.1"
   id="svg8"
   inkscape:version="0.92.4 (5da689c313, 2019-01-14)"
   sodipodi:docname="PDP BREGARS SANS ARBRE.svg">
  <defs
     id="defs2" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.98994949"
     inkscape:cx="407.97941"
     inkscape:cy="493.14265"
     inkscape:document-units="mm"
     inkscape:current-layer="layer5"
     showgrid="false"
     inkscape:window-width="1920"
     inkscape:window-height="1017"
     inkscape:window-x="-8"
     inkscape:window-y="-8"
     inkscape:window-maximized="1" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title />
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:groupmode="layer"
     id="layer5"
     inkscape:label="Calque 5"
     transform="translate(0,-87)">
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 104.10136,126.03686 14.54157,-3.58684 24.28036,-19.45167"
       id="path842"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="ccc" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 178.11455,274.74203 c -2.07534,-1.85344 -6.74488,-13.16913 -6.74488,-13.16913 l -1.36786,-1.1706 -2.78285,-12.68137 2.78285,-6.97475 -5.28271,-10.1451 -5.84872,-6.82842 -5.75439,-13.46178 4.85822,-9.85246 -10.32959,-18.68064 6.98072,-18.92451 0.15591,-4.38154"
       id="path844"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="cccccccccccc" />
      
    <path 
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="M 0.17599631,294.34216 C 94.212799,266.68191 195.4045,274.53552 296.36247,281.22903"
       id="path846"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="cc" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 57.47503,277.16674 c -0.533636,-6.18499 -1.334084,-16.84515 -1.86772,-20.41737"
       id="path848"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="cc" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 55.60731,256.74937 3.1351,-15.10609"
       id="path850"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 65.679663,244.88524 7.470886,-18.76191"
       id="path852"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 69.014879,227.70982 -2.601467,-53.5266"
       id="path854"
       inkscape:connector-curvature="0" />
    <path onclick="document.getElementById('Altitude_Haut').innerHTML = 
      <?php try
    {
        $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', "Ggaski2020", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }  
    $reponse = $bdd->query('SELECT * FROM piste_rm WHERE nom=\'Flanchette\''); $donnees = $reponse->fetch(); echo $donnees['Altitude_haut']; ?>


      document.getElementById('Altitude_Bas').innerHTML = 
      <?php echo $donnees['Altitude_bas']; ?>

      document.getElementById('Largeur').innerHTML = 
      <?php echo $donnees['Largeur']; ?>

      document.getElementById('Débit_Longueur').innerHTML = 
      <?php echo $donnees['Longueur_debit']; ?>

      document.getElementById('2').innerHTML = 'Débit'


    

    "
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="M 65.079324,173.76936 33.461465,264.95771"
       id="path856"
       inkscape:connector-curvature="0" /></a>
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="M 69.548512,176.80435 112.63952,132.72768"
       id="path858"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="M 110.63839,149.35128 70.615786,227.02004"
       id="path860"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="M 110.10475,169.35478 63.678534,276.40799"
       id="path862"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 114.10702,202.87788 14.67495,-77.66875"
       id="path864"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 142.12285,147.83377 -7.73771,48.28431"
       id="path866"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#00a300;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 55.60731,256.74937 c 0,0 -10.062681,-0.79557 -22.145845,8.20834"
       id="path868"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="cc" />
    <path
       style="fill:none;stroke:#00a300;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 33.461465,264.95771 c 0,0 -3.335217,14.89915 24.013565,12.20903"
       id="path870"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#00a300;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 55.60731,256.74937 c 0,0 7.00395,-2.48317 10.072353,-11.86413"
       id="path872"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 65.679663,244.88524 c 0,0 -0.867161,-3.37992 -6.937253,-3.24196"
       id="path874"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#00a300;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 73.150549,226.12333 c 0,0 -10.539289,1.51751 -7.470886,18.76191"
       id="path876"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#0090eb;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 33.461465,264.95771 c -23.669493,-62.02182 31.617859,-91.18835 31.617859,-91.18835 0,0 1.700955,-1.37958 4.469188,3.03499"
       id="path878"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#0090eb;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 66.413412,174.18322 c 0,0 0.600337,-23.45239 46.226108,-41.45554"
       id="path880"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;fill-opacity:1;stroke:#0090eb;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 124.91312,146.59218 c 0,-0.68978 -8.00452,-14.62326 3.86885,-21.38305"
       id="path882"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#0090eb;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 124.91312,146.59218 c 0,0 5.73658,17.24439 5.46976,22.90055"
       id="path884"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#0090eb;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 142.12285,147.83377 c 0,0 -25.61449,39.0413 -7.73771,48.28431"
       id="path886"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 110.10475,169.35478 c 0,0 5.2304,13.25217 0.79669,20.56836"
       id="path888"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#00a300;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 73.828111,209.7256 c 0,0 31.979279,-7.12109 37.073329,-19.80246"
       id="path890"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#d5001f;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 114.10702,202.87788 c 0,0 -9.71464,-11.29642 3.96382,-21.34397"
       id="path894"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#d5001f;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 128.73061,161.53636 c 0,0 -4.14787,6.74314 1.65227,7.95637"
       id="path896"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#d5001f;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 118.07084,181.53391 c 0,0 2.35837,-2.14607 3.20737,-7.02352"
       id="path900"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#d5001f;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 121.27821,174.51039 c 0,0 5.00255,-5.45052 9.10467,-5.01766"
       id="path902"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#d5001f;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 134.38514,196.11808 c 0,0 -2.25849,-2.19544 1.04319,-4.82926 0,0 15.46439,-27.60029 6.69452,-43.45505"
       id="path904"
       inkscape:connector-curvature="0" />
    <path onclick="document.getElementById('Altitude_Haut').innerHTML = 
      <?php try
    {
        $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', "Ggaski2020", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }  
    $reponse = $bdd->query('SELECT * FROM piste_rm WHERE nom=\'Le mouflon\''); $donnees = $reponse->fetch(); echo $donnees['Altitude_haut']; ?>


    document.getElementById('Altitude_Bas').innerHTML = 
      <?php echo $donnees['Altitude_bas']; ?>

      document.getElementById('Largeur').innerHTML = 
      <?php echo $donnees['Longueur_debit']; ?>

      document.getElementById('Débit_Longueur').innerHTML = 
      <?php echo $donnees['Largeur']; ?>

      document.getElementById('2').innerHTML = 'Largeur'


    "
       style="fill:none;stroke:#000000;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 110.10475,169.35478 c 0,0 -22.503849,23.29972 -19.013489,35.29825 0,0 6.272962,58.44228 -27.412727,71.75496"
       id="path906"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#d5001f;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 69.014879,227.70982 c 0,0 -5.136234,-4.20763 -0.733745,-12.48494 0,0 14.007903,-27.31514 1.267378,-38.42053"
       id="path908"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#0090eb;stroke-width:0.71783823;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       d="m 70.615786,227.02004 c 0,0 8.817927,-66.63719 40.022604,-77.66876"
       id="path910"
       inkscape:connector-curvature="0" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179787px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.37985605"
       x="-179.27975"
       y="205.23711"
       id="text918"
       transform="matrix(0.49892652,-0.87629675,0.84741731,0.51592961,0,0)"><tspan
         sodipodi:role="line"
         id="tspan916"
         x="-179.27975"
         y="205.23711"
         style="stroke-width:0.37985605">Le mouflon</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:3.39612532px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#00a300;fill-opacity:1;stroke:none;stroke-width:0.31838673"
       x="-39.298828"
       y="256.72748"
       id="text922"
       transform="matrix(0.94090734,-0.29733741,0.28535049,0.97262991,0,0)"
       inkscape:transform-center-x="3.7110833"
       inkscape:transform-center-y="16.733655"><tspan
         sodipodi:role="line"
         id="tspan920"
         x="-39.298828"
         y="256.72748"
         style="fill:#00a300;fill-opacity:1;stroke-width:0.31838673">Marmotte</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:3.38709259px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.3175399"
       x="-257.39395"
       y="49.15416"
       id="text926"
       transform="matrix(-0.03856286,-1.0842728,0.92066185,-0.04541587,0,0)"><tspan
         sodipodi:role="line"
         id="tspan924"
         x="-257.39395"
         y="49.15416"
         style="stroke-width:0.3175399">Marmotte</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179787px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#0090eb;fill-opacity:1;stroke:none;stroke-width:0.14356765;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       x="-204.27322"
       y="89.988983"
       id="text930"
       transform="matrix(0.28501612,-0.97324918,0.9411746,0.29472928,0,0)"><tspan
         sodipodi:role="line"
         id="tspan928"
         x="-204.27322"
         y="89.988983"
         style="fill:#0090eb;fill-opacity:1;stroke:none;stroke-width:0.14356765;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1">L'épicéa</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:3.92271256px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.36775425"
       x="-201.84834"
       y="110.93398"
       id="text934"
       transform="matrix(0.30178943,-0.96891154,0.93508043,0.31144159,0,0)"><tspan
         sodipodi:role="line"
         id="tspan932"
         x="-201.84834"
         y="110.93398"
         style="stroke-width:0.36775425">L'épicéa</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:3.25978732px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.30560499"
       x="-232.83958"
       y="101.96346"
       id="text938"
       transform="matrix(0.18299073,-1.0222286,0.94584396,0.18105409,0,0)"><tspan
         sodipodi:role="line"
         id="tspan936"
         x="-232.83958"
         y="101.96346"
         style="stroke-width:0.30560499">L'écureuil</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:2.51538706px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#00a300;fill-opacity:1;stroke:none;stroke-width:0.23581754"
       x="-166.79938"
       y="199.27034"
       id="text942"
       transform="matrix(0.58606911,-0.796553,0.79513483,0.62557974,0,0)"><tspan
         sodipodi:role="line"
         id="tspan940"
         x="-166.79938"
         y="199.27034"
         style="fill:#00a300;fill-opacity:1;stroke-width:0.23581754">L'écureuil</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:2.99599814px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#00a300;fill-opacity:1;stroke:none;stroke-width:0.28087479"
       x="-176.05215"
       y="168.53943"
       id="text946"
       transform="matrix(0.46899147,-0.91671291,0.85231005,0.46626941,0,0)"><tspan
         sodipodi:role="line"
         id="tspan944"
         x="-176.05215"
         y="168.53943"
         style="fill:#00a300;fill-opacity:1;stroke-width:0.28087479">Le vallon</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:3.49546623px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.32769996"
       x="-182.28101"
       y="170.29802"
       id="text950"
       transform="matrix(0.42974448,-0.93524228,0.87229689,0.428606,0,0)"><tspan
         sodipodi:role="line"
         id="tspan948"
         x="-182.28101"
         y="170.29802"
         style="stroke-width:0.32769996">Le vallon</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:3.23556161px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.30333391"
       x="-195.06866"
       y="178.43597"
       id="text954"
       transform="matrix(0.43124027,-0.9040421,0.88967246,0.45380419,0,0)"><tspan
         sodipodi:role="line"
         id="tspan952"
         x="-195.06866"
         y="178.43597"
         style="stroke-width:0.30333391">Fraise des bois</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:2.88452411px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#00a300;fill-opacity:1;stroke:none;stroke-width:0.2704241"
       x="-81.398445"
       y="202.3793"
       id="text958"
       transform="matrix(0.61792269,-0.79728273,0.73419883,0.67101591,0,0)"><tspan
         sodipodi:role="line"
         id="tspan956"
         x="-81.398445"
         y="202.3793"
         style="fill:#00a300;fill-opacity:1;stroke-width:0.2704241">Fraise des bois</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179787px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#0090eb;fill-opacity:1;stroke:none;stroke-width:0.14356765;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       x="-67.136055"
       y="160.5865"
       id="text962"
       transform="matrix(0.68804131,-0.72654133,0.70259728,0.71148932,0,0)"><tspan
         sodipodi:role="line"
         id="tspan960"
         x="-67.136055"
         y="160.5865"
         style="fill:#0090eb;fill-opacity:1;stroke:none;stroke-width:0.14356765;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1">Bourgeons</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179787px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.37985605"
       x="-39.490582"
       y="173.858"
       id="text966"
       transform="matrix(0.73667435,-0.67362526,0.65142512,0.76177973,0,0)"><tspan
         sodipodi:role="line"
         id="tspan964"
         x="-39.490582"
         y="173.858"
         style="stroke-width:0.37985605">L'espartar</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:3.63659906px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#d5001f;fill-opacity:1;stroke:none;stroke-width:0.34093115"
       x="189.6662"
       y="-0.37895051"
       id="text970"
       transform="matrix(0.3781046,0.93627511,-0.91115982,0.38852672,0,0)"><tspan
         sodipodi:role="line"
         id="tspan968"
         x="189.6662"
         y="-0.37895051"
         style="fill:#d5001f;fill-opacity:1;stroke-width:0.34093115">Cagnas</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179834px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.37985605"
       x="-206.46533"
       y="42.795109"
       id="text974"
       transform="matrix(-0.12072259,-1.0092052,0.97594558,-0.12483675,0,0)"><tspan
         sodipodi:role="line"
         id="tspan972"
         x="-206.46533"
         y="42.795109"
         style="stroke-width:0.37985605">Cagnas</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179787px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.37985605"
       x="-121.90679"
       y="167.43031"
       id="text978"
       transform="matrix(0.46635413,-0.89527482,0.86576995,0.48224717,0,0)"><tspan
         sodipodi:role="line"
         id="tspan976"
         x="-121.90679"
         y="167.43031"
         style="stroke-width:0.37985605">Flocon</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179787px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.37985605"
       x="-149.26447"
       y="151.95486"
       id="text982"
       transform="matrix(0.19695931,-0.99629173,0.96345775,0.20367156,0,0)"><tspan
         sodipodi:role="line"
         x="-149.26447"
         y="151.95486"
         style="stroke-width:0.37985605"
         id="tspan984">Le rocher blanc</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:3.20599103px;line-height:1;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#0090eb;fill-opacity:1;stroke:none;stroke-width:0.14356765;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       x="-175.8381"
       y="98.77282"
       id="text990"
       transform="matrix(-0.00920311,-0.85183894,1.1737009,-0.02128104,0,0)"><tspan
         sodipodi:role="line"
         id="tspan988"
         x="-175.8381"
         y="98.77282"
         style="line-height:1;fill:#0090eb;fill-opacity:1;stroke:none;stroke-width:0.14356765;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1">Trompette de</tspan><tspan
         sodipodi:role="line"
         x="-175.8381"
         y="101.97881"
         style="line-height:1;fill:#0090eb;fill-opacity:1;stroke:none;stroke-width:0.14356765;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
         id="tspan1000">       la mort</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179834px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#d5001f;fill-opacity:1;stroke:none;stroke-width:0.37985608"
       x="-143.52509"
       y="186.92863"
       id="text994"
       transform="matrix(0.24347281,-0.9852366,0.95276688,0.25177021,0,0)"><tspan
         sodipodi:role="line"
         id="tspan992"
         x="-143.52509"
         y="186.92863"
         style="fill:#d5001f;fill-opacity:1;stroke-width:0.37985608">Vesse de loup</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:2.5986793px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#0090eb;fill-opacity:1;stroke:none;stroke-width:0.14356765;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       x="-54.9203"
       y="200.03596"
       id="text998"
       transform="matrix(0.53629062,-0.85893687,0.80850004,0.56974614,0,0)"><tspan
         sodipodi:role="line"
         id="tspan996"
         x="-54.9203"
         y="200.03596"
         style="fill:#0090eb;fill-opacity:1;stroke:none;stroke-width:0.14356765;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1">Jas du bert</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179834px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.37985608"
       x="-153.5298"
       y="171.53711"
       id="text994-4"
       transform="matrix(0.20612421,-0.99430728,0.96153865,0.21314879,0,0)"><tspan
         sodipodi:role="line"
         id="tspan992-2"
         x="-153.5298"
         y="171.53711"
         style="stroke-width:0.37985608">Vesse de loup</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:2.61343646px;line-height:1;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#d5001f;fill-opacity:1;stroke:none;stroke-width:0.24500968"
       x="-45.539455"
       y="212.17421"
       id="text982-9"
       transform="matrix(0.64890397,-0.77708177,0.70753003,0.69377185,0,0)"><tspan
         sodipodi:role="line"
         x="-45.539455"
         y="212.17421"
         style="line-height:1;fill:#d5001f;fill-opacity:1;stroke-width:0.24500968"
         id="tspan984-8">Le rocher </tspan><tspan
         sodipodi:role="line"
         x="-45.539455"
         y="214.78764"
         style="line-height:1;fill:#d5001f;fill-opacity:1;stroke-width:0.24500968"
         id="tspan1038">   blanc</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179787px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#0090eb;fill-opacity:1;stroke:none;stroke-width:0.14356765;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
       x="-95.940292"
       y="170.0424"
       id="text1042"
       transform="matrix(0.57947139,-0.82159324,0.79451664,0.59921941,0,0)"><tspan
         sodipodi:role="line"
         id="tspan1040"
         x="-95.940292"
         y="170.0424"
         style="fill:#0090eb;fill-opacity:1;stroke:none;stroke-width:0.14356765;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1">Le bouquetin</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:9.06086445px;line-height:1;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.30889308"
       x="193.92203"
       y="162.39383"
       id="text1046"
       transform="scale(0.82869947,1.2067101)"><tspan
         sodipodi:role="line"
         id="tspan1044"
         x="193.92203"
         y="162.39383"
         style="font-size:9.06086445px;line-height:1;stroke-width:0.30889308">Domaine skiable du </tspan><tspan
         sodipodi:role="line"
         x="193.92203"
         y="171.4547"
         style="font-size:9.06086445px;line-height:1;stroke-width:0.30889308"
         id="tspan1048">grand groupe alpin</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179834px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.37985608"
       x="130.13832"
       y="92.517929"
       id="text1052"
       transform="scale(0.98338382,1.0168969)"><tspan
         sodipodi:role="line"
         x="130.13832"
         y="92.517929"
         style="stroke-width:0.37985608"
         id="tspan1054">Cime de Brégars</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179834px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.37985608"
       x="139.44337"
       y="96.738777"
       id="text1060"
       transform="scale(0.98338382,1.0168969)"><tspan
         sodipodi:role="line"
         id="tspan1058"
         x="139.44337"
         y="96.738777"
         style="stroke-width:0.37985608">2956m</tspan></text>
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 142.92329,102.99835 30.00009,-7.786844 11.75986,6.548104 12.96257,12.2944 17.90706,4.67721 11.09169,17.90706 17.10525,9.75534 15.23436,26.86059 18.57523,12.82893 15.50164,14.69983 4.2763,2.80633"
       id="path4045"
       inkscape:connector-curvature="0" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 172.92338,95.211506 -5.47993,29.242364 -5.85863,9.4494 -2.07887,13.98512 -4.7247,10.58334"
       id="path4047"
       inkscape:connector-curvature="0" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:4.05179787px;line-height:8;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.37985605"
       x="165.82333"
       y="90.730331"
       id="text1052-3"
       transform="scale(0.98338386,1.0168969)"><tspan
         sodipodi:role="line"
         x="165.82333"
         y="90.730331"
         style="stroke-width:0.37985605"
         id="tspan1054-1">Ton sommet</tspan></text>
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m -0.80180859,105.36775 6.94900759,-5.21176 6.681738,-8.151718 5.61266,10.423508 12.561669,8.8199 7.750815,1.87088 h 6.681737 l 19.510677,1.06908 8.018084,0.53454 7.750818,1.06908 8.552624,2.6727 3.207234,2.13815 4.543581,3.20724 7.082524,2.22751 v 0 l -11.091564,2.85061 -5.87993,-0.53454 -2.939965,-1.87089 -4.543582,-1.06908 -4.276312,-0.53454 -4.543582,0.53454 -4.543582,1.06908 -17.10525,0.26727 -5.61266,-1.06908 -9.354433,-2.67269 -4.543582,-0.53454 -10.156242,-2.13816 h -5.87993 -9.6217031 l -4.27631243,0.80181"
       id="path909"
       inkscape:connector-curvature="0"
       sodipodi:nodetypes="cccccccccccccccccccccccccccccc" />
    <path
       style="fill:none;stroke:#000000;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
       d="m 12.828937,92.004272 -0.267269,7.483547 0.267269,2.672691 3.474504,7.48355 4.810851,0.53454 3.207235,1.33635 6.681739,-0.26727"
       id="path911"
       inkscape:connector-curvature="0" />
  </g>
  <g
     inkscape:label="Calque 1"
     inkscape:groupmode="layer"
     id="layer1"
     transform="translate(0,-87)" />
  <g
     inkscape:groupmode="layer"
     id="layer3"
     inkscape:label="Calque 3"
     transform="translate(0,-87)" />
  <g
     inkscape:groupmode="layer"
     id="layer4"
     inkscape:label="Calque 4"
     transform="translate(0,-87)" />
  <g
     inkscape:groupmode="layer"
     id="layer2"
     inkscape:label="Calque 2"
     transform="translate(0,-87)" />
</svg>
