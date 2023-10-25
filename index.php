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

<div class="container velkomst">
    <div class="row">
        <div class="col-md-12">
            <h1>Metaperspektiv - Din pædagogiske vidensbank</h1>
        </div>
    </div>
</div>

<div class="container systemer">
    <div class="row">
        <div class="col-md-12">
            <h2>Systemer</h2>
        </div>
    </div>
</div>

<div class="container apps">
    <div class="row">
        <div class="col-md-12">
            <h2>Apps</h2>
        </div>
    </div>
</div>

<div class="container kurser">
    <div class="row">
        <div class="col-md-12">
            <h2>Kurser</h2>
        </div>
    </div>
</div>

<div class="container om">
    <div class="row">
        <div class="col-md-12">
            <h2>Om Metaperspektiv</h2>
        </div>
    </div>
</div>

<div class="container blog">
    <div class="row">
        <div class="col-md-12">
            <h2>Vidensbank</h2>
        </div>
    </div>
</div>

<footer></footer>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
