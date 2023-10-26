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
    <?php include 'navbar.php';?>
</header>

<div class="container-fluid velkomst center-vertically">
    <div class="row">
        <div class="col-md-12">
            <h1>Metaperspektiv - Din pædagogiske vidensbank</h1>
        </div>
    </div>
</div>

<div class="container systemer">
    <div class="row">
        <div class="col-md-12 center-vertically-text mb-2">
            <h2>Systemer</h2>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 mb-2">
            <h5>Dokumentation og Kommunikation</h5>
            <p>De store krav til dokumentation i hverdagen kan hurtigt føre til tre ting. </p>
            <br>
            <lu>
                <li><span class="fst-italic fw-bolder">En grundig dokumentation</span> af hændelser, metoder og udvikling - men som tidsmæssigt koster dyrt i varme hænder. </li>
                <br>
                <li><span class="fst-italic fw-bolder">Dokumentation der nedprioriteres</span>, for at have tilstrækkelig fysisk tilstedeværelse med børn og borgere. </li>
                <br>
                <li><span class="fst-italic fw-bolder">Grundig dokumentation og tilstrækkelig tilstedeværelse</span> med børn og borgere - på bekostning af personale der langsomt opslides.</li>
            </lu>

        </div>

        <div class="col-sm-12 col-md-4 col-lg-5 col-image-container">
            <div class="fp-image">
                <img src="img/system.jpg" alt="Description of Image">
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-3 mb-2">
            <h5>Tilpasning til behov</h5>
            <p>Selvom der er et pædagogisk paradigme - et narrativ - der sætter dagsorden for den nutidige pædagogik, tilpasser den enkelte institution metoder og teorier til den enkelte borgers behov, såvel som personalegruppens evner. </p>
            <br>
            <p>Derfor arbejder vi i Metaperspektiv på løsninger, der kan tilpasses jeres individuelle behov.</p>
        </div>

    </div>
</div>

<div class="container apps">
    <div class="row">
        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Apps</h2>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <p>Personale Støtte</p>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-3 col-image-container">
            <div class="fp-image">
                <img src="img/apps.jpg" alt="Description of Image">
            </div>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-3">
            <p>Borger Udvikling</p>
        </div>

    </div>
</div>

<div class="container kurser">
    <div class="row">
        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Kurser</h2>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <p>Personale Kompetenceudvikling</p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <p>Borger - Mestring af eget liv med IT</p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
            <p>Ledelse i hverdagen</p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3 col-image-container">
            <div class="fp-image">
                <img src="img/kurser.jpg" alt="Description of Image">
            </div>
        </div>

    </div>
</div>

<div class="container blog">
    <div class="row">
        <div class="col-md-12 center-vertically-text m-2 pb-2">
            <h2>Vidensbank</h2>
        </div>
        <div class="col-sm-12 col-md-6">Pædagogisk database</div>
        <div class="col-sm-12 col-md-6 col-image-container">
            <div class="fp-image">
                <img src="img/vidensbank.jpg" alt="Description of Image">
            </div>
        </div>

    </div>
</div>

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

<footer>
    <?php include 'footer.php';?>
</footer>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
