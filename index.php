<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Bramos - Din AI guide</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">




    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<header>

    <div><?php include 'navbar.php'; ?></div>

    <div class="container-fluid mb-0">
        <div class="row">
            <div class="col-12 cover-image-container">

                <img src="img/cover.png" alt="Cover Img">

                <div class="overlay-text-cover">Bramos</div>

                <div class="subtext">Et skridt ind i fremtiden</div>

            </div>
        </div>
    </div>

</header>

<!-- Main content -->

<!-- Carousel Section -->
<div class="container mt-5 mb-5">
    <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Første nyhed -->
            <div class="carousel-item active">
                <div class="carousel-image-container" onclick="openModal('modal1')">
                    <img src="img/stock/news1.jpg" class="d-block w-100" alt="Nyhed 1">
                    <div class="overlay-text">GPT-4o</div>
                </div>
            </div>
            <!-- Anden nyhed -->
            <div class="carousel-item">
                <div class="carousel-image-container" onclick="openModal('modal2')">
                    <img src="img/stock/canva2.png" class="d-block w-100" alt="Nyhed 2">
                    <div class="overlay-text">Canvas "Magic Studio"</div>
                </div>
            </div>
            <!-- Tredje nyhed -->
            <div class="carousel-item">
                <div class="carousel-image-container" onclick="openModal('modal3')">
                    <img src="img/stock/sora.jpg" class="d-block w-100" alt="Nyhed 3">
                    <div class="overlay-text">Sora AI</div>
                </div>
            </div>
        </div>
        <!-- Karousel kontrol -->
        <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- Modals -->
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <img src="img/logo/bramosLogow-09.png" class="img-fluid" alt="Logo" style="height: 50px;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container">
                <!--<img src="img/logo/bramosLogoB-07.png" class="img-fluid mb-4" alt="News 1">-->
                <h2>GPT-4o</h2>
                <p>OpenAI har introduceret nye og spændende funktioner til deres ChatGPT-tjeneste, som nu også inkluderer adgang til den kraftfulde GPT-4 model og flere nyttige værktøjer. Her er en nem og forståelig gennemgang af, hvad det betyder for dig:</p>
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Hvad er nyt?</h3>
                        <ul>
                            <li><strong>GPT-4:</strong> Den nyeste version af OpenAI's sprogmodel. GPT-4 er endnu mere avanceret og præcis end sine forgængere. Det betyder, at du kan få endnu bedre svar og mere nuancerede samtaler med ChatGPT.</li>
                            <li><strong>Gratis adgang:</strong> Tidligere var GPT-4 kun tilgængelig for betalende brugere, men nu kan alle få adgang til denne kraftfulde model helt gratis. Det gør avanceret AI-teknologi tilgængelig for endnu flere mennesker.</li>
                            <li><strong>Flere værktøjer:</strong> ChatGPT har fået tilføjet flere nye værktøjer, der gør det endnu nemmere at bruge AI'en til praktiske formål. Dette inkluderer værktøjer til at skrive, redigere og skabe indhold på en mere effektiv måde.</li>
                        </ul>
                        <h5>Hvordan kan det bruges?</h5>
                        <ul>
                            <li><strong>Studier og læring:</strong> ChatGPT kan hjælpe dig med at forstå komplekse emner, skrive opgaver eller få forklaringer på vanskelige spørgsmål.</li>
                            <li><strong>Arbejde:</strong> Brug ChatGPT til at brainstorme ideer, skrive rapporter, eller endda programmere. Med GPT-4's forbedrede kapaciteter får du endnu bedre hjælp.</li>
                            <li><strong>Daglige opgaver:</strong> Om du skal skrive en e-mail, planlægge en rejse, eller bare har brug for en venlig samtale, kan ChatGPT hjælpe dig med at gøre livet lidt nemmere.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h5>Hvorfor er det vigtigt?</h5>
                        <p>Adgang til avanceret teknologi som GPT-4 kan virkelig gøre en forskel i din hverdag. Det giver dig værktøjer til at lære, arbejde og kommunikere mere effektivt. Og nu hvor det er gratis, er der ingen grund til ikke at prøve det!</p>
                        <p>Hvis du vil læse mere om de nye funktioner og hvordan du kan bruge dem, kan du besøge OpenAI's hjemmeside her: <a href="https://openai.com/index/gpt-4o-and-more-tools-to-chatgpt-free/">GPT-4 og flere værktøjer til ChatGPT gratis</a>.</p>
                        <h5>Opsummering</h5>
                        <ul>
                            <li><strong>GPT-4 er nu gratis:</strong> Få adgang til den mest avancerede AI-model uden at betale.</li>
                            <li><strong>Nye værktøjer:</strong> Flere funktioner gør ChatGPT endnu mere nyttig.</li>
                            <li><strong>Anvendelse:</strong> Perfekt til studier, arbejde og daglige opgaver.</li>
                        </ul>
                        <p>Med disse opdateringer er ChatGPT blevet endnu mere tilgængelig og praktisk for alle.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2Label" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <img src="img/logo/bramosLogow-09.png" class="img-fluid" alt="Logo" style="height: 50px;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container">
                <img src="img/news2.jpg" class="img-fluid mb-4" alt="News 2">
                <h2>Nem guide til OpenAI's samarbejde med Canva</h2>
                <p>OpenAI har for nylig annonceret et spændende samarbejde med Canva. Dette samarbejde giver dig mulighed for at bruge kunstig intelligens (AI) til at forbedre dine kreative projekter på Canva. Lad os se nærmere på, hvad dette betyder for dig.</p>
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Hvad er Canva?</h3>
                        <p>Canva er en populær online platform, hvor du nemt kan designe alt fra plakater og sociale medie opslag til præsentationer og visitkort. Med Canva kan du lave professionelle designs uden at være grafisk designer.</p>
                        <h5>Hvad betyder samarbejdet med OpenAI?</h5>
                        <ul>
                            <li><strong>Automatisk tekstgenerering:</strong> Med AI's hjælp kan du få forslag til tekster, der passer perfekt til dit design. Det gør det nemmere og hurtigere at skrive overskrifter, beskrivelser og andre tekster.</li>
                            <li><strong>Forbedrede billedsøgninger:</strong> AI gør det lettere at finde de rigtige billeder til dine projekter ved at forstå, hvad du leder efter, og give mere præcise resultater.</li>
                            <li><strong>Kreative ideer og inspiration:</strong> Hvis du sidder fast, kan AI give dig nye og spændende ideer til dit design.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h5>Hvordan kan du bruge disse funktioner?</h5>
                        <ul>
                            <li><strong>Opret en gratis konto:</strong> Hvis du ikke allerede har en Canva-konto, kan du nemt oprette en gratis konto på <a href="https://www.canva.com/">Canva</a>.</li>
                            <li><strong>Brug AI-værktøjerne:</strong> Når du arbejder på et projekt i Canva, kan du nu drage fordel af AI-værktøjerne for at forbedre dine designs.</li>
                        </ul>
                        <h5>Hvorfor er dette vigtigt?</h5>
                        <p>Dette samarbejde mellem OpenAI og Canva gør det nemmere for alle at lave flotte og professionelle designs. Uanset om du er en erfaren designer eller en nybegynder, kan AI hjælpe dig med at spare tid og få bedre resultater.</p>
                        <p>Hvis du vil vide mere om dette spændende samarbejde, kan du læse mere på OpenAI's hjemmeside her: <a href="https://openai.com/index/canva/">OpenAI samarbejde med Canva</a>.</p>
                        <h5>Opsummering</h5>
                        <ul>
                            <li><strong>Canva er en platform for nemt at lave professionelle designs.</strong></li>
                            <li><strong>Samarbejdet med OpenAI betyder, at du kan bruge AI til at forbedre dine designs.</strong></li>
                            <li><strong>AI kan hjælpe med tekstgenerering, billedsøgning og kreative ideer.</strong></li>
                            <li><strong>Opret en gratis konto på <a href="https://www.canva.com/">Canva</a> og kom i gang i dag.</strong></li>
                        </ul>
                        <p>Dette samarbejde gør det endnu nemmere at lave flotte designs, uanset din erfaring eller baggrund.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modal3Label" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <img src="img/logo/bramosLogow-09.png" class="img-fluid" alt="Logo" style="height: 50px;">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body container">
                <img src="img/news3.jpg" class="img-fluid mb-4" alt="News 3">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Ny AI-funktion introduceret af Sora AI</h3>
                        <p>Sora AI har for nylig præsenteret en ny spændende funktion kaldet "Air Head". Denne funktion gør det muligt for brugere at få en endnu bedre og mere effektiv oplevelse med AI-teknologi. Her er hvad det betyder for dig:</p>
                        <h5>Hvad er "Air Head"?</h5>
                        <p>"Air Head" er en innovativ funktion, der integrerer avanceret AI-teknologi for at forbedre brugeroplevelsen. Det giver mulighed for hurtigere og mere præcise svar på forespørgsler og øger effektiviteten i daglige opgaver.</p>
                        <h5>Hvordan fungerer det?</h5>
                        <ul>
                            <li><strong>Forbedret brugerinteraktion:</strong> "Air Head" anvender AI til at forstå og reagere på brugerens behov mere præcist og hurtigt.</li>
                            <li><strong>Automatisering:</strong> Med denne nye funktion kan mange rutineopgaver automatiseres, hvilket sparer tid og ressourcer.</li>
                            <li><strong>Personlig tilpasning:</strong> Funktionen tilpasser sig brugerens præferencer og vaner for at levere en skræddersyet oplevelse.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h5>Hvorfor er dette vigtigt?</h5>
                        <p>Den nye "Air Head" funktion gør det muligt for brugere at arbejde mere effektivt og opnå bedre resultater ved hjælp af AI. Det er et stort skridt fremad i integrationen af AI i hverdagen.</p>
                        <p>Hvis du vil vide mere om denne nye funktion, kan du besøge Sora AI's LinkedIn post her: <a href="https://www.linkedin.com/posts/sora-ai_air-head-activity-7178499342129872898-pnVP?utm_source=share&utm_medium=member_desktop">Sora AI Introduces Air Head</a>.</p>
                        <h5>Opsummering</h5>
                        <ul>
                            <li><strong>Forbedret AI-funktion:</strong> "Air Head" giver hurtigere og mere præcise svar.</li>
                            <li><strong>Automatisering:</strong> Spar tid med automatiserede rutineopgaver.</li>
                            <li><strong>Personlig tilpasning:</strong> Få en skræddersyet AI-oplevelse baseret på dine behov.</li>
                        </ul>
                        <p>Med denne nye funktion tager Sora AI endnu et skridt i at gøre AI-teknologi mere tilgængelig og nyttig for alle.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-image-container d-flex align-items-center justify-content-center">
            <div class="fp-image">
                <img src="img/apps.jpg" alt="App udvikling" class="mx-auto">
            </div>
        </div>
    </div>
</div>

-->

<!-- White space -->
<div class="container-fluid container-third mt-5 mb-5">
    <div class="row"></div>
</div>

<div class="container-fluid container-third mt-5 mb-5">
    <div class="row p-5">

        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Vores service til dig</h2>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6">
            <h5>Kommunikation</h5>
            <p>I en indledende samtale afdækker vi sammen, hvilke behov I har og hvad jeg ser af muligheder.</p>

            <h5>Screening</h5>
            <p>Ved hjælp af en screening identificerer vi sammen, hvilke områder der kan effektiviseres ved hjælp af kunstig intelligens.</p>
            <p>Her fokuserer vi på arbejdsprocesser der kan effektiviseres og produktionskæder der kan forkortes.</p>

        </div>

        <div class="col-sm-12 col-md-12 col-lg-6">
            <h5>Implementering</h5>
            <p>Uanset hvilket område vi arbejder med, findes der en bred vifte af AI løsninger.</p>
            <p>Sammen gennemgår vi fordele og ulemper af online services, såvel som lokal installerede løsninger.</p>
            <p>Hertil kommer en gennemgang af licenser, rettigheder og sikkerhed.</p>

            <h5>Support</h5>
            <p>Kurser og oplæring</p>
            <p>Løbende opfølgning</p>
            <p>Opdatering af programmer eller løsninger</p>
        </div>

    </div>
</div>
<!--
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-image-container">
            <div class="fp-image">
                <img src="img/vidensbank.jpg" alt="Pædagogisk vidensbank">
            </div>
        </div>
    </div>
</div>
-->

<!-- White space -->
<div class="container-fluid container-third mt-5 mb-5">
    <div class="row"></div>
</div>

<div class="container-fluid blog mt-5 mb-5">
    <div class="row p-5">

        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Visionen</h2>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12">

            <p>Frigøre ressourcer & øge omsætning</p>

            <p>Fordre grønne tiltag</p>

            <p>En glad medarbejder er en god medarbejder</p>

        </div>

    </div>
</div>

<!-- White space -->
<div class="container-fluid container-third mt-5 mb-5">
    <div class="row"></div>
</div>

<div class="container-fluid container-third mt-5 mb-5">
    <div class="row p-5">

        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Om Bramos</h2>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 mt-3">
            <h5>Overskrift</h5>
            <p>Når vi kender jeres specifikke behov, kan vi udvikle løsninger, der passer ind i jeres hverdag. Vi
                udvikler apps, som kan gøre dokumentation på farten muligt. Ligeledes vil vidensdeling og overlap mellem
                personaler blive en nem og overskuelig proces. </p>
            <br>
            <p>Det vigtigste er, at vi formår at gøre netop jeres hverdag bedre, for at frigøre ressourcer og energi til
                arbejdet med børn eller borgere.</p>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 mt-3">
            <h5>Overskrift</h5>
            <p>En af de fornemmeste opgaver der findes i det pædagogiske felt er, at forberede og fremme selvstændighed.
                Evnen til at mestre eget liv. Med et fremstormende teknologisk sektor, kan vi med fordel drage nytte af
                den udvikling der sker - både indenfor kunstig intelligens, men også med at de fleste kan lære at
                benytte apps.</p>
            <br>
            <p>Sammen med jer, vil vi udvikle apps der støtter børnenes og borgernes mulighed for at udvikle
                selvstændighed og medbestemmelse. Omdrejningspunktet kan være hjælp til kommunikation, planlægning og
                strukturering, med- og selvbestemmelse og meget mere.</p>
        </div>

    </div>
</div>

<!-- White space -->
<div class="container-fluid container-third mt-5 mb-5">
    <div class="row"></div>
</div>

<div class="container-fluid mt-5 mb-5">
    <div class="row p-5">
        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Kontakt</h2>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 ">

            <p>Kender du forskellen på <span class="fw-bold" style="color: #C47F2A">open-source</span> og <span class="fw-bold" style="color: #C47F2A">closed-source</span> AI løsninger?</p>

            <p>Har du styr på <span class="fw-bold" style="color: #C47F2A">licens</span> og <span class="fw-bold" style="color: #C47F2A">rettigheder</span>?</p>

            <p>Ved du hvilke muligheder der er indenfor AI, som dækker netop <span class="fw-bold" style="color: #C47F2A">dine</span> behov?</p>

        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 ">

            <p>Gennem en grundig screening, afdækker vi sammen hvilke områder, der kan optimeres med kunstig intelligens.</p>

            <p>Jeg hjælper dig og din virksomhed med at navigere de mange tilbud der findes og guider jer i brugen af dem.</p>

            <p>Målet er, at optimere arbejdsprocesser og forkorte produktionskæder - og dermed frigøre ressourcer.</p>

        </div>

    </div>
</div>

<!-- White space -->
<div class="container-fluid container-third mt-5 mb-5">
    <div class="row"></div>
</div>

<footer class="mt-5">
    <?php include 'footer.php'; ?>
</footer>


<script src="node_modules/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="js/main.js"></script>

<script>
    function openModal(modalId) {
        var modal = new bootstrap.Modal(document.getElementById(modalId));
        modal.show();
    }
</script>

</body>
</html>
