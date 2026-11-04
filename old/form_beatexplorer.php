<?php

if (!empty($_POST)){ 
//if ((!empty($_POST["naam"])) AND (!empty($_POST["straat"])) AND 
//     (!empty($_POST["gemeente"])) AND (!empty($_POST["email"]))){ 
	/****************************************************************************
	*																			*
	*	Samenstelling van de tekst voor het formulier voor de sales-afdeling 	*
	*	Dit gaat de bezoeker niet ontvangen!!									*
	*																			*
	****************************************************************************/

	$mailForm=("Aanvraagformulier voor P.A.\n");
	$mailForm.=("---------------------------------------\n");
	$mailForm.=("Persoonlijke gegevens\r\n");
	$mailForm.=("*********************\r\n");
	$mailForm.=("Naam: " . $_POST["naam"] . "\n");
	$mailForm.=("Tel: " . $_POST["telefoon"] . "\n");
	$mailForm.=("GSM: " . $_POST["gsm"] . "\n");
	$mailForm.=("Mailadres: " . $_POST["email"] . "\n\n");
	$mailForm.=("Omschrijving evenement\r\n");
	$mailForm.=("**********************\r\n");
	$mailForm.=("Contactpersoon: " . $_POST["contactpersoon"] . "\n");
	$mailForm.=("Oppervlakte zaal: " . $_POST["oppervlakte"] . "\n");
	$mailForm.=("Adres zaal: " . $_POST["adres"] . "\n");
	$mailForm.=("Aantal personen: " . $_POST["aantal"] . "\n");
	$mailForm.=("Genre: " . $_POST["genre"] . "\n");
	$mailForm.=("Vermoedelijke tijdsduur: " . $_POST["tijdsduur"] . "\n");
	$mailForm.=("Extra aanmerkingen:" . $_POST["aanmerkingen"] . "\n");
	//echo ($mailForm);

	$headersForm=("From: " . $_POST["email"] . "\r\n");
	//echo ($header)
	mail("beat.explorer@pandora.be", "Aanvraagformulier voor P.A.", "$mailForm", "$headersForm");
    include ("pa_thanks.php");


}else{
	echo("<font face=Arial, Verdana, Helvetica, sans-serif size=1 color = \"red\"><b>Je dient alle velden in te vullen!</b></font>");
	include ("inc/inc_pa_aanvraag.php");

	//$home="http://www.beatexplorer.be";
	//header("Location: $home");
}
?>