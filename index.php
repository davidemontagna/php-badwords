<?php

$text = "Nato nel 1994 ad opera del danese Rasmus Lerdorf, PHP era in origine una raccolta di script CGI che permettevano una facile gestione delle pagine personali. Secondo l'annuncio originale di PHP 1.0 da parte dell'autore sul newsgroup comp.infosystems.www.authoring.cgi il significato originario dell'acronimo era Personal Home Page.Il pacchetto originario venne in seguito esteso e riscritto dallo stesso Lerdorf in C, aggiungendo funzionalità quali il supporto alla base di dati mSQL, e iniziò a chiamarsi PHP/FI, dove FI sta per Form Interpreter (interprete di form), prevedendo la possibilità di integrare il codice PHP nel codice HTML in modo da semplificare la realizzazione di pagine dinamiche. Nel 1997 si stimava che circa 50.000 siti Web erano basati su PHP. <br>";

$hidedWord = $_GET["Censorship"];

$censoredText = str_replace($hidedWord, "***", $text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p> <?php echo $text; ?> </p>
        <div style="margin-top: 15px"> Lunghezza del paragrafo: <?php echo strlen($text); ?> </div>
    </div>
    
    <div style="margin-top: 30px">
        <p> <?php echo $censoredText; ?> </p>
        <div style="margin-top: 15px"> Lunghezza del paragrafo censurato: <?php echo strlen($censoredText); ?> </div>
    </div>


</body>
</html>