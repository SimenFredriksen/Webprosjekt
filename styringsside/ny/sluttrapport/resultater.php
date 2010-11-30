<!DOCTYPE HTML>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<Link rel="stylesheet" href="../css.css" />

<title>Webprosjekt 2010 gruppe 33</title>
</head>


<body>
<div id="boks">
<div id="header"><h1>Webprosjekt 2010 gruppe 33</h1></div>

<?php include "meny1.html"; ?>


<div id="midten">
<h3 class="overs">Resultater</h3>
<ul>
<li><a href="#resutseendet">Resultatet for produktets utseende</a></li>
<li><a href="#resfunksjonalitet">Resultatet for produktets funksjonalitet</a></li>
<li><a href="#resuu">Universell utforming</a></li>
<li><a href="#WCAG">WCAG</a></li>
</ul>


<h4><a id="resutseendet"></a>Resultatet for produktets utseende</h4>
<p>
Vi har valgt en hovedbakgrunn som har en stigningsgrad fra det
<a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/img/backgr.png">mørke til det lyse</a>.
På det mørkeste øverst på siden ser man
<a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/img/overhoved.png">en lys logo</a>, som
har gjennomsiktig bakgrunn. Dette gjør at hovedbakgrunnen på siden blir bakgrunnen til logoen, og resultatet er at menyen under og
informasjonsboksen under den igjen tar oppmerksomheten. Dette har vi prøvd å få til ved å gi menyen en gulaktig farge som også brukes
som bakgrunn i stigningsgrad fra <a href="http://www.stud.hio.no/~s168943/prosjekt2010/hovedside/img/backgr2.png">gult til hvitt</a>.</p>

<p>Vi brukte også et <a href="http://www.accesskeys.org/tools/color-contrast.html">kontrast-verktøy</a> som sjekker om kontrasten er god.
Denne ble godkjent på alle punkter, både på fargeforskjeller og på fargekontraster.</p>


<h4><a id="resfunksjonalitet"></a>Resultatet for produktets funksjonalitet</h4>
<p>
Styringsdokumentsiden vår er lagret i PHP, mens vi gikk
for vanlig HTML på prosjektets produktside. Eneste grunnen til at vi valgte å lagre styringsdokumentsiden i PHP var at siden alltid
ekspanderte, og hvis vi tok med en liten "include"-tag så kunne vi outsource menyen og spare oss for litt jobb.
</p>
<p>Menyen vår er enkel, med store ikoner og tekst som vil ta deg dit man måtte ønske.
På menyvalgene "Ansatte" og "Support" er det drop-down-funksjon, som gjør at menyen ekspanderes (nedover) med flere valg.
"Ansatte"- og "Support"-kategorien er også klikkbar, der man kommer inn på en side som lister opp undersidene.
Dette gjorde vi så hele siden skal være tilgjengelig fra (kun) tastaturet, så man kan "tabbe" seg igjennom linkene på siden.
</p>
<p>Kontaktskjemaet er laget i HTML og PHP, og gjør at man kan kontakte bedriften rett fra hjemmesiden.
Man kan fylle ut navn, epost, hva forespørselen omhandler, samt et spørsmål. Dette blir så sendt på e-post til oss, som vi kan se og svare på.
Det kommer opp en bekreftelsesside som lister opp alt man skrev i skjemaet når man trykker på "Send".</p>
<p>På grunn av at mail-funksjonen i PHP ikke fungerer på stud.hio.no, så la vi den på studssh.iu.hio.no (student.iu.hio.no), hvor denne funksjonen fungerer.
</p>
<p>
Bortsett fra validatorknappen, som validerer siden automatisk, er det ingen spesielle funksjonaliteter på web-siden, ved siden av statisk HTML.
</p>


<h4><a id="resuu"></a>Universell utforming</h4>
<p>
Vi har tenkt på universell utforming da vi designet siden, og fokuserte på å ha en enkel side, som er forståelig for alle.
Som tidligere nevnt er farger og kontraster "validert", så fargeblinde bør ikke ha noen problemer med å lese alt innholdet.
Det skal også være enkelt å navigere ved hjelp av menyen, der alle menyvalgene har beskrivende titler, som gir mening.
</p>
<p>Fontene og skriften er også lett å lese. Alle fonter er sans-serif, som gjør at det ikke er unødvendig "pynt" på bokstav-tegnene.
Alle sider kan aksesseres innad ved hjelp av kun mus eller kun tastatur (tab).</p>

<p>I tillegg til dette har fulgt <a href="http://www.w3.org/TR/WCAG20/">WCAG 2.0</a> så godt vi kan (les under).</p>

<h4><a id="WCAG"></a>WCAG</h4>

<p>Vi har forsøkt å innfri så mange WCAG 2.0-krav som mulig, med tanke på universell utforming.
Vi har ikke klart alle, men de fleste på A og AA, og noen på AAA-nivået.
Noen av kravene er noe vanskelig å forstå, så vi er litt usikre på hva de betyr helt konkret.
Det kan også være litt vanskelig å avgjøre om kravene er innfridd helt korrekt.
Likevel, føler vi at vi har innfridd de viktigste punktene som vi klarer, sett ut ifra vårt kompetansenivå.
</p>

<p>Her er en grov oversikt over hvilke punkter vi har innfridd fra
<a href="http://webaim.org/standards/wcag/WCAG2Checklist.pdf">denne listen over WCAG-punkter</a>:
</p>

<ul title="Liste over WCAG-krav">
<li>1.1: Innfridd</li>
<li>1.2: Gjelder ikke for noe av vårt innhold</li>
<li>1.3: Denne har vi deler av men ikke alt</li>
<li>1.4: Det som gjelder vårt innhold har vi infridd</li>
<li>2.1: Innfridd</li>
<li>2.2: Gjelder ikke for noe av vårt innhold</li>
<li>2.3: Innfridd</li>
<li>2.4: Innfridd alle bortsett fra 2.4.5 og 2.4.7 usikker på 2.4.1. 2.4.8 gjelder ikke vårt innhold</li>
<li>3.1: Innfridd 3.1.1, men ikke de resterende</li>
<li>3.2: Innfridd</li>
<li>3.3: Innfridd 3.3.2</li>
<li>4.1: Innfridd</li>
</ul>


</div>

<div id="footer">
<p class="center">
      <a href="http://validator.w3.org/check/referer"><img
          src="../img/html5val.jpg"
          alt="Valid HTML 5!" height="31" width="88" /></a>
</p>
<p class="center">
Sist oppdatert 25.11.2010.
</p>
</div>
</div>
</body>
</html>
