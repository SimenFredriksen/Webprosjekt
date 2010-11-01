<!DOCTYPE HTML>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<Link rel="stylesheet" href="css.css" />

<title>Webprosjekt 2010 gruppe 33</title>
</head>


<body>
<div id="boks">
<div id="header"><h1>Webprosjekt 2010 gruppe 33</h1></div>

<?php include "meny1.html"; ?>



<div id="midten">
<h2>Kravspesifikasjon</h2>

<h3>Tekniske krav:</h3>

<h4>Standarder og kodespråk</h4>
<p>Vi vil bruke HTML5, CSS2 og noe PHP til våre sider, og samtlige sider skal validere korrekt i HTML5 og CSS2.1 med w3s validatorverktøy.
Vil vil i størst mulig grad prøve å oppnå at alt blir så semantisk korrekt som mulig.
Det vil ikke være behov hos brukere å kjøre ekstra programvare utenom selve nettleseren. Kraftig maskinvare er heller ikke nødvendig.</p>

<h4>Server</h4>
<p>Serverene alt ligger på er (inntil videre) HiOs egen studentserver stud.hio.no,
mens "kontakt oss"-siden ligger på studssh.iu.hio.no (pga mail-funksjon i PHP) og vi håper og regner med at disse er oppe til alle døgnets tider,
så siden vår vil være tilgjengelig hele tiden.</p>

<p>På grunn av økonomiske årsaker velger vi å ikke kjøpe eget domene og eventuelt leie egen server.</p>

<h3>Funksjonalitet:</h3>

<h4>Generelt</h4>
<p>Det skal være enkelt å navigere seg rundt på siden, selv om man ikke er vant til å bruke web fra før.</p>
<p>Vi skal også følge "three-click-rule" (treklikksregelen), som betyr at uansett hvilken underside man er på,
så trenger man ikke klikke på linker mer enn tre ganger for å komme hvor man vil på siden.</p>

<h4>Menyen</h4>
<p>Vi har en horisontal meny øverst på siden (under logoen) som vil vise brukerne de sidene som er viktige for en nyoppstartet bedrift å ha på sin webside.
I tillegg har vi valgt en drop-down-meny slik at det finnes linker i menyen som "gjemmer" flere linker som kan sies å gå under samme kategori.
Et eksempel på dette er at vi både har FAQ (Frequently asked questions) og et kontaktskjema under den mer overordnede kategorien "support".
</p>
<p>Linken i menyen du har musen over, vil være uthevet i en annen farge enn resten av menyen (high-lighting).</p>

<h4>Kontaktskjema</h4>
<p>Det eneste på bedriftssiden som ikke er ren statisk HTML er kontaktskjemaet.
Der kan brukere som lurer på noe skrive inn navn, epost, merke av for kategori og skrive inn en henvendelse, som igjen blir sendt på mail til oss.
Når henvendelsen er sendt, vil en ny side med bekreftelse på når den er sendt komme opp, sammen med de dataene som ble skrevet inn i forrige side.</p>

<p>Bekreftelsessiden er foreløpig den eneste undersiden som inneholder PHP.</p>

<h3>Utseende, brukervennlighet og universell utforming:</h3>

<h4>Oppsett av siden</h4>
<p>Som tidligere nevnt vil siden være veldig enkel å navigere seg frem i.
Nettstedet er bygget opp av enkle sider, alle med en meny som linker til resten av (de viktigste) sidene.
Menyvalgene skal gi mening, så man lett forstår hvor man vil trykke for å gå til ønsket side.
Overskrifter og underoverskrifter skal også gi mening, for å gi en forståelse over hva teksten handler om.</p>
<p>Vi skal tilstrebe at sidene skalerer korrekt i ulike oppløsninger, ved blant annet å bruke andre enheter enn piksler som størrelsesverdi.</p>

<h4>Farger</h4>
<p>Fargevalget er enda ikke bestemt, men vi vil tilstrebe å få behagelige og pene farger på alle elementene.</p>

<p>Fargene på de ulike elementene skal også stå i stil med hverandre,
men likevel være forskjellige nok så fargeblinde og svaksynte lett kan se alt på sidene.</p>

<p>- Dette vil vi teste ut ved å ta en kontrastsjekk på siden som sier om det er bra nok eller ikke.</p>

<h4>Semantikk</h4>
<p>Vi fokuserer på å bruke korrekte betegnelser og HTML-koder de forskjellige typene.
Det er ikke alltid like lett å få til at alle elementer på sidene er 100% semantisk riktige,
men vi skal jobbe med å få til i størst mulig grad, med utgangspunkt i det vi har lært om feltet.
</p>


</div>



<div id="footer">
<p>
      <a href="http://validator.w3.org/check/referer"><img
          src="img/html5val.jpg"
          alt="Valid HTML 5!" height="31" width="88" /></a>
</p>
</div>
</div>
</body>
</html>
