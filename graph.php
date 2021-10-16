<html>
<head>

<?php $stations=array("bregars", "alpeblanche", "capleit", "valrige", "cevert", "federia", "hautacam", "bourgbahnen"); ?>
<?php $mois=array("Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"); ?>
    <form method="post" action="./php/compta">
        <p>Stations :</p>
        <select name="station" id="station">
        <?php
        foreach ($stations as $station){
            echo '<option value="',$station,'">',$station,'</option>';
        }
        ?>
        </select>
        <p>Mois :</p>
        <select name="mois" id="mois">
            <?php
            for ($moisj = 1; $moisj <= 12; $moisj++){
                echo '<option value="',$moisj,'">',$mois[$moisj-1],'</option>';
            }
            ?>
        </select>
        <p>Jours :</p>
        <select name="jours" id="jours">
            <?php
            for ($jours = 1; $jours <= 31; $jours++){
                echo '<option value="',$jours,'">',$jours,'</option>';
            }
            ?>
        </select>
        <input type="submit">

    </form>

</head>
<body>

<div id="linechart_material" style="width: 900px; height: 500px"></div>
</body>
</html>
<?php $pass_hache = password_hash("Ketchup78", PASSWORD_DEFAULT);
echo $pass_hache; ?>

