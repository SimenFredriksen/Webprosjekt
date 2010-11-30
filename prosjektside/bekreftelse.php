<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE HTML>

<html lang="no">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/img/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/css.css" />

<title>Phunsystems</title>
</head>


<body>

<div id="boks">

<div id="header">

<p class="senter">
<img src="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/img/overhoved.png" alt="Phunsystems logo" class="bilde2" />
</p>

<ul id="nav" title="Meny">
	<li><a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/index.html">Hjem</a></li>
    <li><a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/omoss.html">Om oss</a></li>
    <li><a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/ansatte.html">Ansatte</a>
    	<ul>
    	<li><a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/vaarstab.html">Vår stab</a></li>
    	<li class="noBorder"><a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/jobbhososs.html">Jobb hos oss</a></li>
    	</ul>
    </li>
	<li><a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/prosjekter.html">Prosjekter</a></li>
    <li><a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/produkter.html">Produkter</a></li>
	<li class="noBorder"><a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/support.html">Support</a>
		<ul>
		<li><a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/faq.html">FAQ</a></li>
		<li class="noBorder"><a href="kontakt.php">Kontakt oss</a></li>
		</ul>
	</li>
</ul>
</div>

<div id="midten">
<h1 class="overs">Bekreftelse</h1>

<?php


if(isset($_REQUEST["Knapp"]))
{
	$navn=$_REQUEST["Navn"];
	$email=$_REQUEST["Email"];

	$gjelder=$_REQUEST["gjelder"];

	$sporsmal=$_REQUEST["sporsmal"];


	//Her er e-posten som skal sendes:

	if(count($gjelder)==0)
	{
		$gjelderalle="ikke spesifisert";
	}
	elseif(count($gjelder)==1)
	{
		$gjelderalle=$gjelder[0];
	}
	elseif(count($gjelder)==2)
	{
		$gjelderalle=$gjelder[0]." ".$gjelder[1];
	}
	elseif(count($gjelder)==3)
	{
		$gjelderalle=$gjelder[0]." ".$gjelder[1]." ".$gjelder[2];
	}
	elseif(count($gjelder)==4)
	{
		$gjelderalle=$gjelder[0]." ".$gjelder[1]." ".$gjelder[2]." ".$gjelder[3];
	}
	elseif(count($gjelder)==5)
	{
		$gjelderalle=$gjelder[0]." ".$gjelder[1]." ".$gjelder[2]." ".$gjelder[3]." ".$gjelder[4];
	}

	$epost=
	"Navn: ".$navn.
	"\nE-mail: ".$email.

	"\nGjelder: ".$gjelderalle.
	"\n\nSpørsmålet er: \n".$sporsmal.
	"\n\nSendt: ".date("d/m-Y, H:i");

	$to = "s171639@stud.hio.no";
	$subject = "Forespoersel om ".$gjelderalle;
	$headers = "From: $email";
	mail($to,$subject,$epost,$headers);

	//Her kommer det som vil vises på siden:

	if (mail($to,$subject,$epost,$headers))
	{
		echo "<p>Din forespørsel er sendt ".date("d/m-Y, H:i").". Du vil få svar innen 1-3 virkedager.</p>";

		echo "<p>Her er dataene som ble skrevet inn:</p>";

		echo "<p>";
		echo "<strong>Navn:</strong> $navn <br />";
		echo "<strong>E-post:</strong> $email";
		echo "</p>";


		echo "<p><strong>Forespørselen gjelder:</strong></p>";

		echo "<ul title='Liste over hva foresporselen gjelder'>";

		foreach($gjelder as $kategori)
		{
			echo "<li class='generell'>$kategori</li>";
		}
		echo "</ul>";

		echo "<p><strong>Ditt spørsmål var:</strong></p>";
		echo "<textarea readonly rows=6 cols=35>$sporsmal</textarea>";
	}
	
	else
	{
		echo "<p>Det oppsto en feil ved sending av hendvendelsen. Vennligst prøv igjen senere.</p>";
		echo "<p>Trykk <a href='kontakt.php'>her</a> for å gå tilbake til kontaktskjemaet.</p>";
	}
}

?>


<p class="senter">
<img src="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/img/logo.png" alt="Phunsystems logo" class="bilde2"/>
</p>


</div>

<div id="footer">
<!-- Valideringsknapp vil ikke fungere på denne serveren, men den er validert ved file-uploader -->
</div>
</div>

</body>
</html>
