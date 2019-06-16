<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">

    <meta name="theme-color" content="#fafafa">

</head>

<body>

    <?php
    include 'Header.php';
    ?>

    <script>
        var i = 0; // Start point
        var images = [];
        var time = 5000;

        // Image List
        images[0] = 'immagini_sito/cover3.jpg';
        images[1] = 'immagini_sito/cover.jpg';
        images[2] = 'immagini_sito/cover1.jpg';
        images[3] = 'immagini_sito/cover2.jpg';

        // Change Image
        function changeImg(){
            document.slide.src = images[i];

            if(i < images.length - 1){
                i++;
            } else {
                i = 0;
            }

            setTimeout("changeImg()", time);
        }

        window.onload = changeImg;

    </script>

    <section class="image">
    <img id ="grandezza" name="slide">
    </section>

    <div class="Titoletto"><h1> CITAZIONE E DESCRIZIONE </h1></div>

    <img class="sticky" src="immagini_sito/paulino.jpg" alt="Avatar">


    <div class="testo">
    <p><b>Che cos'è la CNV?</b></p>
    <p>La comunicazione non verbale (CNV) è un aspetto del comportamento umano che da sempre ha attirato l’attenzione e
        l’interesse di molti sia in campo scientifico sia e soprattutto in campo sociale, nonché artistico, letterario,
        mediatico, commerciale, ecc. Il fatto che si possa comunicare anche senza parlare affascina la nostra fantasia
        e curiosità. Eppure, sembra che dimentichiamo che buona parte degli esseri viventi, soprattutto i vertebrati,
        utilizza solo questo tipo di comunicazione. Inoltre, a livello evolutivo, gli esseri umani stessi
        hanno utilizzato solo segnali non verbali per comunicare tra loro prima della nascita e invenzione
        del linguaggio verbale. Non solo, a livello di sviluppo, ciascuno di noi ha utilizzato per comunicare solo
        segnali corporei (sin dai primi mesi di vita), prima dell’apprendimento della lingua madre e poi di altre lingue.
        Prima di iniziare a parlare di CNV è necessario trovare una definizione della stessa
        (Bonaiuto & Maricchiolo, 2009). L’attributo “non verbale” indica “tutto ciò che non è parola”, cioè tutto ciò
        che non è linguaggio verbale, che è considerato il mezzo più raffinato ed evoluto per relazionarsi.
        La “comunicazione” è un interscambio dinamico, un invio e ricezione di informazioni, pensieri, atteggiamenti,
        una condivisione e costruzione di significati. La “comunicazione non verbale” si potrebbe definire quindi
        come una trasmissione di contenuti, costruzione e condivisione di significati che avviene a prescindere
        dall’uso delle parole. La componente non verbale della comunicazione, infatti, comprende tutti gli aspetti
        di messaggi diversi dalle parole. Infatti Greene (1980) preferisce usare la distinzione fra “comunicazione che
        fa uso di parole” e “comunicazione che non ne fa uso”, anziché verbale e non verbale. Un'altra denominazione per
        questa forma di comunicazione è “linguaggio del corpo” (bodily communication), o comunicazione corporea,
        proprio perché molti dei segnali non verbali, come avremo modo di vedere, sono espressi mediante cenni e
        movimenti di parti del corpo. Tale espressione, secondo alcuni autori (Kendon, 2004), sarebbe più corretta e
        recentemente sta conoscendo una fortuna crescente rispetto a quella di CNV.
        Utilizziamo la denominazione non verbale, comprendendo così anche i termini: segnali non verbali, comportamenti
        non verbali, indicatori non verbali, ecc., in c'è riferimento anche a codici e canali comunicativi non
        necessariamente corporei (es. gestione del tempo, ambiente architettonico, ecc.).
        Infatti gli esseri umani, quando interagiscono, particolarmente in co-presenza, in modo visibile, comunicano
        continuamente tra loro non soltanto contenuti verbali, fornendo così reciprocamente informazioni circa le loro
        intenzioni, gli interessi, i sentimenti e le idee, che vogliano farlo o no.
        Ad esempio, le posture, la distanza interpersonale, le direzioni di sguardo dei partecipanti durante una
        conversazione forniscono molte informazioni sulla relazione tra le persone, la natura di tali relazioni, e il
        livello e la forza del loro coinvolgimento nella relazione e nella situazione conversazionale. Le loro azioni,
        intenzionali o meno, dirette verso oggetti, persone, ambiente circostante, o se stessi, forniscono, a chi ne
        coglie la lettura, informazioni su scopi, obiettivi, interessi e motivazioni. Ci sono anche le azioni che sono
        di per sé espressive, però. Così, da come le persone si avvicinano tra di loro o si allontanano, dai movimenti
        del volto e degli arti, essi mostrano l'un l'altro sentimenti e stati emotivi, quali affetto, disprezzo,
        indifferenza, preoccupazione, gratitudine; si sfidano o minacciano l'un l'altro; si sostengono, si conformano
        l'un l'altro, o mostrano la paura, la gioia, l’imbarazzo e così via.
        Come la comunicazione verbale (CV), la CNV è costituita da codici. “Un codice è un insieme di segnali che viene
        solitamente trasmesso tramite un particolare mezzo o canale” (Burgoon, Guerrero, & Floyd, 2010, p. 19). Ci sono
        circa sette o otto codici non verbali comunemente riconosciuti tra gli studiosi: cinesico, vocale, olfattivo,
        aptico, prossemico, cronemico, codice legato all’aspetto fisico e al costruito (che riguarda l’intervento
        artificiale dell’uomo sull’ambiente) (Guerrero & Farinelli 2009).
        Il più ampiamente riconosciuto dei codici non verbali legati al corpo è la cinesica - ciò che è noto come
        “il linguaggio del corpo” - che comprende i messaggi sulla base di movimenti del corpo, come le espressioni
        facciali, i moti oculari, i gesti delle mani, la postura, l’orientazione del corpo e altri movimenti fisici.
        La maggior parte di questi segnali sono quelli che vengono intesi come comunicazione corporea e che sono
        utilizzati con finalità comunicativa ed espressiva (vedi più avanti le funzioni della CNV).
    </p>
    </div>
    </div>

    <?php
    include 'Footer.php';
    ?>



</body>
</html>