<?php
// Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP.

$googleFaq=[
    [
        'question'=> 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
        'answer'=>'La recente <a>decisione della Corte di giustizia dell\'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.<br> <br>
                    Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni..<br> <br>
                    Per presentare una richiesta di rimozione, compila questo <a>modulo web.</a> Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese..<br> <br>
                    Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge..<br> <br>
                    Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.'
    ],

    [
        'question'=> 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
        'answer'=>'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.<br> <br>

                    Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.<br> <br>
        
                    Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a>Centro Google per la sicurezza online.</a>
        
                   <a>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.'
    ],
    [
        'question'=> 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
        'answer'=>'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l\'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di <a>URL referrer.</a> Talvolta, l\'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell\'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili <a>qui.</a>. Le query di ricerca o le informazioni contenute nell\'URL referrer potrebbero essere disponibili mediante Google Analytics o un\'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all\' esatte parole chiave che hanno determinato il clic su un annuncio.'
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Google faq</title>
</head>
<body>
    <!-- HEADER -->
    <header>
        <!-- logo -->
        <div class="title">
            <img class="logo" src="img/logo-google.png" alt="logo">
            <h2>Privacy & Termini</h2>
        </div>
        <!-- end logo -->
        <!-- NAV -->
        <nav>
            <ul class="menu">

                <li>Introduzione</li>

                <li>Norme sulla privacy</li>

                <li>Termini di utilizzo</li>

                <li>Tecnologie</li>

                <li class="active">Domande frequenti</li>

            </ul>
        </nav>
        <!-- End NAV -->
    </header>
    <!-- END HEADER -->
    <!-- MAIN -->
    <main>
        <div class="container">
            
            <?php foreach ($googleFaq as $QeA ) { ?>
                <div class="QeA">
                    <h3><?php echo $QeA['question'] ?></h3>

                    <p> <?php echo $QeA['answer'] ?></p>
                </div>
            <?php } ?>

        </div>
    </main>
    <!-- END MAIN -->
    
</body>
</html>