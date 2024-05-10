<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Bramos - Din guide til en verden af kunstig intelligens</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
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

                <div class="overlay-text">Bramos</div>

                <div class="subtext">Et skridt ind i fremtiden</div>

            </div>
        </div>
    </div>

</header>

<!-- White space -->
<div class="container-fluid container-third mt-5 mb-5">
    <div class="row"></div>
</div>

<div class="container-fluid mt-5 mb-5">
    <div class="row p-5">
        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Overskrift 1</h2>
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


        <div class="col-sm-12 col-md-12 col-lg-6">
            <h5>Overskrift lille 1</h5>
            <p>Når vi kender jeres specifikke behov, kan vi udvikle løsninger, der passer ind i jeres hverdag. Vi
                udvikler apps, som kan gøre dokumentation på farten muligt. Ligeledes vil vidensdeling og overlap mellem
                personaler blive en nem og overskuelig proces. </p>
            <br>
            <p>Det vigtigste er, at vi formår at gøre netop jeres hverdag bedre, for at frigøre ressourcer og energi til
                arbejdet med børn eller borgere.</p>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6">
            <h5>Overskrift lille 2</h5>
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
            <h2>Overskrift 3</h2>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <p>Pædagogik er et dynamisk og komplekst begreb. Som normen i samfundet ændrer sig, følger narrativ og diskurser i den gældende pædagogik med. På den måde er pædagogik af en flydende størrelse. Dertil kommer, at der udvikles mange teorier og nye metoder, som kan tolkes ud fra forskellige perspektiver.</p>
            <br>
            <p>Formålet med denne database er, at give fri adgang til personaler - uanset uddannelsesbaggrund - samt pårørende, til at få oversat begreber, teorier og metoder til et ikke-fagligt sprog.</p>
            <br>
            <p>På samme tid kan pædagoger bruge databasen til, at få inspiration til pædagogiske interventioner og få andre perspektiver, på udfordringer i den daglige praksis.</p>
        </div>
    </div>
</div>

<!-- White space -->
<div class="container-fluid container-third mt-5 mb-5">
    <div class="row"></div>
</div>

<div class="container-fluid container-third mt-5 mb-5">
    <div class="row p-5">


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
            <h2>Overskrift 4</h2>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="js/main.js"></script>
</body>
</html>
