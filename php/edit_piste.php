<?php 
   try
{
    $bdd = new PDO('mysql:host=mysql-grand-groupe-alpin.alwaysdata.net;dbname=grand-groupe-alpin_test;charset=utf8', '203722', 'Ggaski2020');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}  


 $nvnom=$_POST['nom'];
  $ID=$_POST['ID'];
   $nvEtat=$_POST['Etat'];
$supprimer=$_POST['supprimer'];
$Type=$_POST['Type'];



if (!(empty($nvnom)) AND ($_POST['Etat']=='Choisir un etat') AND ($_POST['Type']=='Choisir un type'))
{
$req = $bdd->prepare('UPDATE piste_rm SET nom = :nvnom WHERE ID = :ID');
$req->execute(array(
	'nvnom' => $nvnom,
	'ID' => $ID));
	echo 'marche';
}

elseif (!(empty($nvnom)) AND ($_POST['Etat']!='Choisir un etat') AND ($_POST['Type']=='Choisir un type'))
{
$req = $bdd->prepare('UPDATE piste_rm SET nom = :nvnom, Etat =:nvEtat WHERE ID = :ID');
$req->execute(array(
	'nvnom' => $nvnom,
	'nvEtat' => $nvEtat,
	'ID' => $ID));
echo 'marche';
}

elseif (!(empty($nvnom)) AND ($_POST['Etat']=='Choisir un etat') AND ($_POST['Type']!='Choisir un type'))
{
$req = $bdd->prepare('UPDATE piste_rm SET nom = :nvnom, type =:Type WHERE ID = :ID');
$req->execute(array(
	'nvnom' => $nvnom,
	'Type' => $Type,
	'ID' => $ID));
echo 'marche';
}

elseif ((empty($nvnom)) AND ($_POST['Etat']!='Choisir un etat') AND ($_POST['Type']!='Choisir un type'))
{
$req = $bdd->prepare('UPDATE piste_rm SET Etat = :nvEtat, type =:Type WHERE ID = :ID');
$req->execute(array(
	'nvEtat' => $nvEtat,
	'Type' => $Type,
	'ID' => $ID));
echo 'marche';
}


elseif (!(empty($nvnom)) AND ($_POST['Etat']!='Choisir un etat') AND ($_POST['Type']!='Choisir un type'))
{
$req = $bdd->prepare('UPDATE piste_rm SET nom = :nvnom, Etat =:nvEtat, type=:Type WHERE ID = :ID');
$req->execute(array(
	'nvnom' => $nvnom,
	'nvEtat' => $nvEtat,
	'Type' => $Type,
	'ID' => $ID));

}


elseif ((empty($nvnom)) AND ($_POST['Etat']=='Choisir un etat') AND ($_POST['Type']!='Choisir un type'))
{
$req = $bdd->prepare('UPDATE piste_rm SET type=:Type WHERE ID = :ID');
$req->execute(array(
	
	'Type' => $Type,
	'ID' => $ID));

}
elseif ((empty($nvnom)) AND ($_POST['Etat']!='Choisir un etat') AND ($_POST['Type']=='Choisir un type'))
{
$req = $bdd->prepare('UPDATE piste_rm SET  Etat =:nvEtat WHERE ID = :ID');
$req->execute(array(
	
	'nvEtat' => $nvEtat,
	'ID' => $ID));


}



elseif (isset($supprimer))
{
$req = $bdd->prepare('DELETE FROM piste_rm WHERE ID = :ID');
$req->execute(array(
	'ID' => $ID));

}

else{
	echo 'error';
	header('Location: /interface2.php');
}
header('Location: /interface2.php');

?>