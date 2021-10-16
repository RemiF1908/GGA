<style type="text/css">
	h1{
		  font-family: 'Roboto', sans-serif;
		font-size: 80px;
		text-align: center;
	}
	.photo{
		width: 	100%;
		height: 	auto;	
		margin-bottom: 	1%;
	}
	div{display: 	flex;	
		margin: auto	;
		width: 	50%;
		flex-direction: 	column;}	
		 @media (max-width: 1000px){
		 	div{
		 		width: 	95%;
		 	}
		 }
</style>
<h1>Bonne fête des père !</h1>
<div>
<?php 
$nb = 1; 

while ($nb<=23) {
	
	echo "<img class='photo' src='/image/pap/pho (".$nb.").jpg'>";
	$nb++;

} ?>
</div>