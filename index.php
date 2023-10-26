<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Metaperspektiv - Din pædagogiske vidensbank</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<header>
    <?php include 'navbar.php'; ?>
</header>
<!--
<div class="container-fluid velkomst center-vertically">
    <div class="row">
        <div class="col-md-12">
            <h1>Metaperspektiv - Din pædagogiske vidensbank</h1>
        </div>
    </div>
</div>
-->
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-image-container">
            <div class="fp-image">
                <img src="img/system.jpg" alt="Description of Image">
            </div>
        </div>
    </div>
</div>

<div class="container systemer mt-3">
    <div class="row">
        <div class="col-md-12 center-vertically-text mb-2">
            <h2>Systemer</h2>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
            <h5>Dokumentation og Kommunikation</h5>
            <p>De store krav til dokumentation i hverdagen kan hurtigt føre til tre ting. </p>
            <br>

            <p><span class="fst-italic fw-bolder">En grundig dokumentation</span> af hændelser, metoder og udvikling -
                men som tidsmæssigt koster dyrt i varme hænder. </p>
            <br>
            <p><span class="fst-italic fw-bolder">Dokumentation der nedprioriteres</span>, for at have tilstrækkelig
                fysisk tilstedeværelse med børn og borgere. </p>
            <br>
            <p><span class="fst-italic fw-bolder">Grundig dokumentation og tilstrækkelig tilstedeværelse</span> med børn
                og borgere - på bekostning af personale der langsomt opslides.</p>


        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mb-2">
            <h5>Tilpasning til behov</h5>
            <p>Selvom der er et pædagogisk paradigme - et narrativ - der sætter dagsorden for den nutidige pædagogik,
                tilpasser den enkelte institution metoder og teorier til den enkelte borgers behov, såvel som
                personalegruppens evner. </p>
            <br>
            <p>Derfor arbejder vi i Metaperspektiv på løsninger, der kan tilpasses jeres individuelle behov.</p>
        </div>

    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-image-container d-flex align-items-center justify-content-center">
            <div class="fp-image">
                <img src="img/apps.jpg" alt="App udvikling" class="mx-auto">
            </div>
        </div>
    </div>
</div>

<div class="container apps mt-3">
    <div class="row">
        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Apps</h2>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6">
            <h5>Personale Værktøj</h5>
            <p>Når vi kender jeres specifikke behov, kan vi udvikle løsninger, der passer ind i jeres hverdag. Vi
                udvikler apps, som kan gøre dokumentaion på farten muligt. Ligeledes vil vidensdeling og overlap mellem
                personaler blive en nem og overskuelig proces. </p>
            <br>
            <p>Det vigtigste er, at vi formår at gøre netop jeres hverdag bedre, for at frigøre ressourcer og energi til
                arbejdet med børn eller borgere.</p>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6">
            <h5>Borger Udvikling</h5>
            <p>En af de fornemste opgaver der findes i det pædagogiske felt er, at forberede og fremme selvstændighed.
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
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-image-container">
            <div class="fp-image">
                <img src="img/kurser.jpg" alt="Kompetenceudvikling">
            </div>
        </div>
    </div>
</div>

<div class="container kurser mt-3">
    <div class="row">
        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Kompetenceudvikling</h2>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <h5>Personale Kompetenceudvikling</h5>
            <p>Kommunikation er et komplekst emne og der følger altid mange perspektiver med, når vi arbejder med
                kommunikation.
                Den stigende grad af kunstig intelligens giver mange nye muligheder, men kræver også at personalet
                opfylder de stigende krav der stilles til IT kompetencer.
                Da mange børn og borgere bruger - eller vil drage fordel af at bruge - diverse teknologiske løsninger,
                kræver det et personale, der kan vise vejen.</p>
            <br>
            <p>I vores kompetenceudvikling fokuserer vi derfor på det, som kan gøre netop jeres daglige praksis bedre.
                Kommunikation, konfliktløsning, udvikling og teknologi er bærende emner i vores kurser.</p>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <h5>Borger - Mestring af eget liv med IT</h5>
            <p>Borger - Mestring af eget liv med IT</p>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <h5>Ledelse i hverdagen</h5>
            <p>Ledelse i hverdagen</p>
        </div>


    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-image-container">
            <div class="fp-image">
                <img src="img/vidensbank.jpg" alt="Pædagogisk vidensbank">
            </div>
        </div>
    </div>
</div>

<div class="container blog mt-3">
    <div class="row">
        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Vidensbank</h2>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <h5>Pædagogisk database</h5>
            <p>Pædagogik er et dynamisk og komplekst begreb. Som normen i samfundet ændrer sig, følger narrativ og diskurser i den gældende pædagogik med. På den måde er pædagogik af en flydende størrelse. Dertil kommer, at der udvikles mange teorier og nye metoder, som kan tolkes ud fra forskellige perspektiver.</p>
            <br>
            <p>Formålet med denne database er, at give fri adgang til personaler - uanset uddannelsesbaggrund - samt pårørende, til at få oversat begreber, teorier og metoder til et ikke-fagligt sprog.</p>
            <br>
            <p>På samme tid kan pædagoger bruge databasen til, at få inspiration til pædagogiske interventioner og få andre perspektiver, på udfordringer i den daglige praksis.</p>
        </div>
    </div>
</div>

<!-- Flyttes?
<div class="container om">
    <div class="row">
        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Om Metaperspektiv</h2>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">Hvem er vi</div>
        <div class="col-sm-12 col-md-4 col-lg-3">Værdier</div>
        <div class="col-sm-12 col-md-4 col-lg-3">Kontakt</div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="fp-image">
                <img src="path_to_your_image.jpg" alt="Description of Image">
            </div>
        </div>

    </div>
</div>
-->
<footer>
    <?php include 'footer.php'; ?>
</footer>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="js/main.js"
</body>
</html>
