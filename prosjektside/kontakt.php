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
<h1 class="overs">Kontakt oss!</h1>

<form action="bekreftelse.php" method="post" title="kontakt oss">


<fieldset title="Kontaktsjema">
<legend><strong>Kontaktskjema</strong></legend>

<table>
<tr>
<td>Ditt navn</td>
<td>
	<input type="text" name="Navn" title="Ditt navn" />
</td></tr>

<tr>
<td>E-postadresse</td>
<td>
	<input type="text" name="Email" title="Din e-post" />
</td></tr>

</table>


<p><strong>Hva omhandler forespørselen?</strong></p>

<table>

<tr><td>
Produkter
</td><td>
<input type="checkbox" name="gjelder[]" value="Produkter" title="Det handler om produkter" />
</td></tr>

<tr><td>
Fremtidige prosjekter
</td><td>
<input type="checkbox" name="gjelder[]" value="fremtid" title="Det handler om fremtidlige prosjekter" />
</td></tr>

<tr><td>
Priser
</td><td>
<input type="checkbox" name="gjelder[]" value="Priser" title="Det handler om priser" />
</td></tr>

<tr><td>
Jobb
</td><td>
<input type="checkbox" name="gjelder[]" value="Jobb" title="Det handler om jobb" />
</td></tr>

<tr><td>
Annet
</td><td>
<input type="checkbox" name="gjelder[]" value="Annet" title="Det handler om noe annet" />
</td></tr>

</table>

<p><strong>Skriv inn ditt spørsmål her:</strong></p>
<textarea name="sporsmal" title="Boks til å skrive inn henvendelse" rows="6" cols="35">
</textarea>

<br />


<input type="submit" name="Knapp" value="Send" title="Knapp for å sende skjemaet" />

</fieldset>
</form>


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
