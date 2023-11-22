<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Dok-AI</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<header>
    <?php include 'navbar.php'; ?>
</header>

<div class="container-fluid mt-3">
    <div class="row mb-5">
        <div class="col-md-12 text-center"><h3>Hvad er Dok-AI?</h3></div>
        <div class="col-md-12 text-center mt-2"><p>En pædagogisk dokumentations- og administrationsplatform, der trækker på kunstig intelligens.</p></div>
        <br>
        <div class="col-md-12 text-center mt-5"><h4>Hvad kan Dok-AI gøre for dig?</h4></div>
        <div class="col-md-12 text-center mt-2"><p>Dok-AI gør det muligt, på en intuitiv måde, at føre pædagogisk dokumentation på farten.</p></div>
        <div class="col-md-12 text-center"><p>Dok-AI kan sammenfatte flere måneders dokumentation i en overskuelig sammenfatning - i et fagligt sprog - til bl.a. møder med sagsbehandler.</p></div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <h1 class="text-center">Demo-model</h1>
        <h3 class="text-center">Under udvikling</h3>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-2 d-flex align-items-center justify-content-center">
            <!-- Profile Image -->
            <img src="img/dok-ai/portrait250-01.png" class="profile-img" alt="Profile Image">
        </div>
        <div class="col-md-4 d-flex align-items-center">
            <!-- Search Bar -->
            <div class="search-bar w-100">
                <input type="text" placeholder="Søg..." class="search-bar-input" name="search">
                <span class="ms-auto p-2" onclick="searchFeed()"><i class="bi bi-search"></i></span>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-center justify-content-center">
            <!-- Opret BTN -->
            <button type="button" class="btn light-green-btn" data-bs-toggle="modal" data-bs-target="#inputModal">
                Opret indlæg
            </button>
        </div>


        <div class="col-md-2 d-flex justify-content-center align-items-center position-relative">
            <!-- Burger Menu -->
            <div class="burger-menu" onclick="toggleMenu()">
                <i class="bi bi-list"></i>
            </div>
            <!-- Menu Content (initially hidden) -->
            <div class="menu-content position-absolute d-none">
                <!-- Your menu items here -->
                <a href="#">Profil</a>
                <a href="#">Layout</a>
                <a href="#">Hent rapport</a>
                <!-- More items... -->
            </div>
        </div>

    </div>
</div>

<!-- venstre menu og text feed -->

<div class="container my-3">
    <div class="row">
        <!-- Left Column: Links -->
        <div class="col-md-2">
            <div class="vertical-links">
                <!-- First link with SVG icon -->
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 65 49" aria-labelledby="mailIconTitle" role="img">
                        <title id="mailIconTitle">Mail Icon</title>
                        <g id="Mail_ikon" data-name="Mail ikon" transform="translate(0 0.019)">
                            <g id="Rectangle_6" data-name="Rectangle 6" transform="translate(0 -0.019)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="65" height="49" rx="3" stroke="none"/>
                                <rect x="0.5" y="0.5" width="64" height="48" rx="2.5" fill="none"/>
                            </g>
                            <g id="Polygon_1" data-name="Polygon 1" transform="translate(63 32.981) rotate(180)" fill="#fff">
                                <path d="M 58.86972427368164 32.5 L 1.1302809715271 32.5 L 30.00000190734863 0.7433069944381714 L 58.86972427368164 32.5 Z" stroke="none"/>
                                <path d="M 30.00000190734863 1.486604690551758 L 2.260551452636719 32 L 57.73945236206055 32 L 30.00000190734863 1.486604690551758 M 30.00000190734863 0 L 60 33 L 3.814697265625e-06 33 L 30.00000190734863 0 Z" stroke="none" fill="#707070"/>
                            </g>
                        </g>
                    </svg>
                    Indbakke
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 69 69" aria-labelledby="forumIconTitle" role="img">
                        <title id="forumIconTitle">Forum Icon</title>
                        <g id="Forum_Ikon" data-name="Forum Ikon" transform="translate(0.028 -0.401)">
                            <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(-0.028 0.401)" fill="#fff" stroke="#707070" stroke-width="1">
                                <circle cx="34.5" cy="34.5" r="34.5" stroke="none"/>
                                <circle cx="34.5" cy="34.5" r="34" fill="none"/>
                            </g>
                            <g id="Rectangle_7" data-name="Rectangle 7" transform="translate(12.972 21.401)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="28" height="20" rx="2" stroke="none"/>
                                <rect x="0.5" y="0.5" width="27" height="19" rx="1.5" fill="none"/>
                            </g>
                            <g id="Rectangle_8" data-name="Rectangle 8" transform="translate(27.972 31.401)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="28" height="21" rx="2" stroke="none"/>
                                <rect x="0.5" y="0.5" width="27" height="20" rx="1.5" fill="none"/>
                            </g>
                            <g id="Path_1" data-name="Path 1" transform="translate(25.476 49.646) rotate(180)" fill="#716f71">
                                <path d="M 7.199365615844727 8.200522422790527 L 0.8537275791168213 8.200522422790527 C 1.740563154220581 6.640771389007568 3.871379375457764 3.006836414337158 5.507168292999268 1.125671982765198 C 5.59686279296875 1.022524118423462 5.675547122955322 0.9358150362968445 5.744283676147461 0.862981915473938 C 5.721634864807129 1.082820177078247 5.689370155334473 1.328506469726562 5.661777973175049 1.538642048835754 C 5.540358066558838 2.46317195892334 5.389257907867432 3.613781929016113 5.572288036346436 4.52891206741333 C 5.860653877258301 5.970715999603271 6.648013591766357 7.359779357910156 7.199365615844727 8.200522422790527 Z" stroke="none"/>
                                <path d="M 5.042366027832031 2.512419700622559 C 3.842551231384277 4.129856586456299 2.540935516357422 6.283932209014893 1.717796802520752 7.700521945953369 L 6.30765962600708 7.700521945953369 C 5.822155952453613 6.852176666259766 5.308035373687744 5.757148742675781 5.081997871398926 4.626972198486328 C 4.950127124786377 3.967643022537231 4.974330902099609 3.220753908157349 5.042366027832031 2.512419700622559 M 6.080498695373535 -1.430511474609375e-06 C 6.651942253112793 -1.430511474609375e-06 5.726727485656738 2.751630783081055 6.062578201293945 4.430851936340332 C 6.496397972106934 6.599912166595459 8.167178153991699 8.700522422790527 8.167178153991699 8.700522422790527 L -1.9073486328125e-06 8.700522422790527 C -1.9073486328125e-06 8.700522422790527 2.960788249969482 3.29203200340271 5.129868030548096 0.7975821495056152 C 5.619711875915527 0.2342624664306641 5.91380500793457 -1.430511474609375e-06 6.080498695373535 -1.430511474609375e-06 Z" stroke="none" fill="#707070"/>
                            </g>
                            <g id="Path_2" data-name="Path 2" transform="translate(41.83 50.837)" fill="#716f71">
                                <path d="M 5.744273662567139 7.837533473968506 C 5.675535678863525 7.764700889587402 5.596860885620117 7.678001880645752 5.507168292999268 7.574853897094727 C 3.870743274688721 5.692952156066895 1.740338444709778 2.059530258178711 0.8536921739578247 0.5000037550926208 L 7.199365615844727 0.5000037550926208 C 6.648013591766357 1.340746164321899 5.860653877258301 2.729809761047363 5.572288036346436 4.171613693237305 C 5.389257907867432 5.086753845214844 5.540358066558838 6.237403869628906 5.661777973175049 7.161963939666748 C 5.689366817474365 7.372062206268311 5.721626281738281 7.617724418640137 5.744273662567139 7.837533473968506 Z" stroke="none"/>
                                <path d="M 5.042352676391602 6.188187122344971 C 4.974328517913818 5.479818820953369 4.950133800506592 4.732876300811768 5.081998348236084 4.073553562164307 C 5.308035373687744 2.943377256393433 5.822155475616455 1.84834897518158 6.30765962600708 1.000003695487976 L 1.717670321464539 1.000003695487976 C 2.540617704391479 2.416413545608521 3.842092037200928 4.57033634185791 5.042352676391602 6.188187122344971 M 6.080498695373535 8.700527191162109 C 5.91380500793457 8.700480461120605 5.619711399078369 8.466263771057129 5.129868030548096 7.90294361114502 C 2.960788011550903 5.408493518829346 -1.876678425105638e-06 3.752288876057719e-06 -1.876678425105638e-06 3.752288876057719e-06 L 8.167178153991699 3.752288876057719e-06 C 8.167178153991699 3.752288876057719e-06 6.496397972106934 2.100613832473755 6.062578201293945 4.269673824310303 C 5.726727962493896 5.94889497756958 6.651942729949951 8.700687408447266 6.080498695373535 8.700527191162109 Z" stroke="none" fill="#707070"/>
                            </g>
                        </g>
                    </svg>
                    Forum
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 41 68">
                        <title id="borgerIconTitle">Borger Icon</title>
                        <g id="Borger_Ikon" data-name="Borger Ikon" transform="translate(-16.54 -219.56)">
                            <g id="Subtraction_1" data-name="Subtraction 1" transform="translate(16.54 249.56)" fill="#fff">
                                <path d="M 40.50040054321289 37.49980163574219 L 0.5000002980232239 37.49980163574219 L 0.5000002980232239 7.000200748443604 C 0.5000002980232239 3.415980815887451 3.415570259094238 0.5000008344650269 6.999300479888916 0.5000008344650269 L 34.00019836425781 0.5000008344650269 C 37.58441925048828 0.5000008344650269 40.50040054321289 3.415980815887451 40.50040054321289 7.000200748443604 L 40.50040054321289 37.49980163574219 Z" stroke="none"/>
                                <path d="M 40.00040054321289 36.99980163574219 L 40.00040054321289 7.000200748443604 C 40.00040054321289 3.691680908203125 37.30871963500977 1.000000834465027 34.00019836425781 1.000000834465027 L 6.999300479888916 1.000000834465027 C 3.691270351409912 1.000000834465027 1.000000238418579 3.691680908203125 1.000000238418579 7.000200748443604 L 1.000000238418579 36.99980163574219 L 40.00040054321289 36.99980163574219 M 41.00040054321289 37.99980163574219 L 2.716064386731887e-07 37.99980163574219 L 2.716064386731887e-07 7.000200748443604 C 2.716064386731887e-07 3.140280723571777 3.139870166778564 8.178710686479462e-07 6.999300479888916 8.178710686479462e-07 L 34.00019836425781 8.178710686479462e-07 C 37.8601188659668 8.178710686479462e-07 41.00040054321289 3.140280723571777 41.00040054321289 7.000200748443604 L 41.00040054321289 37.99980163574219 Z" stroke="none" fill="#707070"/>
                            </g>
                            <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(19.54 219.56)" fill="#fff" stroke="#707070" stroke-width="1">
                                <ellipse cx="18" cy="17.5" rx="18" ry="17.5" stroke="none"/>
                                <ellipse cx="18" cy="17.5" rx="17.5" ry="17" fill="none"/>
                            </g>
                        </g>
                    </svg>
                    Borger
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 41 66">
                        <title id="kontakterIconTitle">Kontakter Icon</title>
                        <g id="Kontakter_Ikon" data-name="Kontakter Ikon" transform="translate(-13 -265)">
                            <g id="Rectangle_11" data-name="Rectangle 11" transform="translate(13 265)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="41" height="66" rx="3" stroke="none"/>
                                <rect x="0.5" y="0.5" width="40" height="65" rx="2.5" fill="none"/>
                            </g>
                            <g id="Rectangle_12" data-name="Rectangle 12" transform="translate(20 273)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="27" height="48" stroke="none"/>
                                <rect x="0.5" y="0.5" width="26" height="47" fill="none"/>
                            </g>
                            <g id="Rectangle_13" data-name="Rectangle 13" transform="translate(28 324)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="11" height="3" stroke="none"/>
                                <rect x="0.5" y="0.5" width="10" height="2" fill="none"/>
                            </g>
                            <g id="Rectangle_14" data-name="Rectangle 14" transform="translate(28 268)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="10" height="2" stroke="none"/>
                                <rect x="0.5" y="0.5" width="9" height="1" fill="none"/>
                            </g>
                        </g>
                    </svg>
                    Kontakter
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 69 55">
                        <title id="bookningIconTitle">Bookning Icon</title>
                        <g id="Booking_Ikon" data-name="Booking Ikon" transform="translate(-8.07 -134.055)">
                            <g id="Rectangle_6" data-name="Rectangle 6" transform="translate(8.07 138.054)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="69" height="51" rx="3" stroke="none"/>
                                <rect x="0.5" y="0.5" width="68" height="50" rx="2.5" fill="none"/>
                            </g>
                            <g id="Rectangle_15" data-name="Rectangle 15" transform="translate(17.07 152.054)" fill="#716f71" stroke="#707070" stroke-width="1">
                                <rect width="7" height="7" stroke="none"/>
                                <rect x="0.5" y="0.5" width="6" height="6" fill="none"/>
                            </g>
                            <g id="Rectangle_16" data-name="Rectangle 16" transform="translate(31.07 152.054)" fill="#716f71" stroke="#707070" stroke-width="1">
                                <rect width="7" height="7" stroke="none"/>
                                <rect x="0.5" y="0.5" width="6" height="6" fill="none"/>
                            </g>
                            <g id="Rectangle_17" data-name="Rectangle 17" transform="translate(45.07 152.054)" fill="#716f71" stroke="#707070" stroke-width="1">
                                <rect width="7" height="7" stroke="none"/>
                                <rect x="0.5" y="0.5" width="6" height="6" fill="none"/>
                            </g>
                            <g id="Rectangle_18" data-name="Rectangle 18" transform="translate(59.07 152.054)" fill="#716f71" stroke="#707070" stroke-width="1">
                                <rect width="8" height="7" stroke="none"/>
                                <rect x="0.5" y="0.5" width="7" height="6" fill="none"/>
                            </g>
                            <g id="Rectangle_19" data-name="Rectangle 19" transform="translate(17.07 162.054)" fill="#716f71" stroke="#707070" stroke-width="1">
                                <rect width="7" height="7" stroke="none"/>
                                <rect x="0.5" y="0.5" width="6" height="6" fill="none"/>
                            </g>
                            <g id="Rectangle_20" data-name="Rectangle 20" transform="translate(31.07 162.054)" fill="#716f71" stroke="#707070" stroke-width="1">
                                <rect width="7" height="7" stroke="none"/>
                                <rect x="0.5" y="0.5" width="6" height="6" fill="none"/>
                            </g>
                            <g id="Rectangle_21" data-name="Rectangle 21" transform="translate(45.07 162.054)" fill="#716f71" stroke="#707070" stroke-width="1">
                                <rect width="7" height="7" stroke="none"/>
                                <rect x="0.5" y="0.5" width="6" height="6" fill="none"/>
                            </g>
                            <g id="Rectangle_22" data-name="Rectangle 22" transform="translate(59.07 162.054)" fill="#716f71" stroke="#707070" stroke-width="1">
                                <rect width="8" height="7" stroke="none"/>
                                <rect x="0.5" y="0.5" width="7" height="6" fill="none"/>
                            </g>
                            <g id="Rectangle_23" data-name="Rectangle 23" transform="translate(17.07 173.054)" fill="#716f71" stroke="#707070" stroke-width="1">
                                <rect width="7" height="5" stroke="none"/>
                                <rect x="0.5" y="0.5" width="6" height="4" fill="none"/>
                            </g>
                            <g id="Rectangle_24" data-name="Rectangle 24" transform="translate(31.07 173.054)" fill="#716f71" stroke="#707070" stroke-width="1">
                                <rect width="7" height="5" stroke="none"/>
                                <rect x="0.5" y="0.5" width="6" height="4" fill="none"/>
                            </g>
                            <g id="Rectangle_25" data-name="Rectangle 25" transform="translate(45.07 173.054)" fill="#716f71" stroke="#707070" stroke-width="1">
                                <rect width="7" height="5" stroke="none"/>
                                <rect x="0.5" y="0.5" width="6" height="4" fill="none"/>
                            </g>
                            <g id="Rectangle_26" data-name="Rectangle 26" transform="translate(17.07 134.054)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="5" height="12" rx="1" stroke="none"/>
                                <rect x="0.5" y="0.5" width="4" height="11" rx="0.5" fill="none"/>
                            </g>
                            <g id="Rectangle_27" data-name="Rectangle 27" transform="translate(26.07 134.054)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="7" height="12" rx="1" stroke="none"/>
                                <rect x="0.5" y="0.5" width="6" height="11" rx="0.5" fill="none"/>
                            </g>
                            <g id="Rectangle_28" data-name="Rectangle 28" transform="translate(38.07 134.054)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="7" height="12" rx="1" stroke="none"/>
                                <rect x="0.5" y="0.5" width="6" height="11" rx="0.5" fill="none"/>
                            </g>
                            <g id="Rectangle_29" data-name="Rectangle 29" transform="translate(51.07 134.054)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="6" height="12" rx="1" stroke="none"/>
                                <rect x="0.5" y="0.5" width="5" height="11" rx="0.5" fill="none"/>
                            </g>
                            <g id="Rectangle_30" data-name="Rectangle 30" transform="translate(61.07 134.054)" fill="#fff" stroke="#707070" stroke-width="1">
                                <rect width="6" height="12" rx="1" stroke="none"/>
                                <rect x="0.5" y="0.5" width="5" height="11" rx="0.5" fill="none"/>
                            </g>
                        </g>
                    </svg>
                    Booking
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 58 84">
                        <title id="dokumenterIkon">Dokumenter Ikon</title>
                        <g id="Dokumenter_Ikon" data-name="Dokumenter Ikon" transform="translate(-8 -360)">
                            <g id="Page" transform="translate(8 360)">
                                <g id="Rectangle_33" data-name="Rectangle 33" fill="#fff" stroke="#707070" stroke-width="1">
                                    <rect width="43" height="68" rx="6" stroke="none"/>
                                    <rect x="0.5" y="0.5" width="42" height="67" rx="5.5" fill="none"/>
                                </g>
                                <line id="Line_2" data-name="Line 2" x2="22.177" transform="translate(5.971 11.088)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_3" data-name="Line 3" x2="29" transform="translate(9.382 17.912)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_4" data-name="Line 4" x2="22.177" transform="translate(5.971 24.735)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_5" data-name="Line 5" x2="29" transform="translate(9.382 31.559)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_6" data-name="Line 6" x2="22.177" transform="translate(5.971 38.383)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_7" data-name="Line 7" x2="29" transform="translate(9.382 45.206)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_8" data-name="Line 8" x2="22.177" transform="translate(5.971 52.03)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_9" data-name="Line 9" x2="29" transform="translate(9.382 58.853)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <g id="Page-2" data-name="Page">
                                    <g id="Rectangle_34" data-name="Rectangle 34" fill="#fff" stroke="#707070" stroke-width="1">
                                        <rect width="43" height="68" rx="6" stroke="none"/>
                                        <rect x="0.5" y="0.5" width="42" height="67" rx="5.5" fill="none"/>
                                    </g>
                                    <line id="Line_10" data-name="Line 10" x2="22.177" transform="translate(5.971 11.088)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_11" data-name="Line 11" x2="29" transform="translate(9.382 17.912)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_12" data-name="Line 12" x2="22.177" transform="translate(5.971 24.735)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_13" data-name="Line 13" x2="29" transform="translate(9.382 31.559)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_14" data-name="Line 14" x2="22.177" transform="translate(5.971 38.383)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_15" data-name="Line 15" x2="29" transform="translate(9.382 45.206)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_16" data-name="Line 16" x2="22.177" transform="translate(5.971 52.03)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_17" data-name="Line 17" x2="29" transform="translate(9.382 58.853)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                </g>
                            </g>
                            <g id="Page-3" data-name="Page" transform="translate(14.824 366.824)">
                                <g id="Rectangle_33-2" data-name="Rectangle 33" transform="translate(2.176 2.176)" fill="#fff" stroke="#707070" stroke-width="1">
                                    <rect width="42" height="68" rx="6" stroke="none"/>
                                    <rect x="0.5" y="0.5" width="41" height="67" rx="5.5" fill="none"/>
                                </g>
                                <line id="Line_2-2" data-name="Line 2" x2="22.177" transform="translate(7.677 12.794)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_3-2" data-name="Line 3" x2="29" transform="translate(11.088 19.618)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_4-2" data-name="Line 4" x2="22.177" transform="translate(7.677 26.441)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_5-2" data-name="Line 5" x2="29" transform="translate(11.088 33.265)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_6-2" data-name="Line 6" x2="22.177" transform="translate(7.677 40.088)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_7-2" data-name="Line 7" x2="29" transform="translate(11.088 46.912)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_8-2" data-name="Line 8" x2="22.177" transform="translate(7.677 53.736)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_9-2" data-name="Line 9" x2="29" transform="translate(11.088 60.559)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <g id="Page-4" data-name="Page" transform="translate(0 0)">
                                    <g id="Rectangle_34-2" data-name="Rectangle 34" transform="translate(0.176 0.176)" fill="#fff" stroke="#707070" stroke-width="1">
                                        <rect width="42" height="68" rx="6" stroke="none"/>
                                        <rect x="0.5" y="0.5" width="41" height="67" rx="5.5" fill="none"/>
                                    </g>
                                    <line id="Line_10-2" data-name="Line 10" x2="22.177" transform="translate(5.971 11.088)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_11-2" data-name="Line 11" x2="29" transform="translate(9.382 17.912)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_12-2" data-name="Line 12" x2="22.177" transform="translate(5.971 24.735)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_13-2" data-name="Line 13" x2="29" transform="translate(9.382 31.559)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_14-2" data-name="Line 14" x2="22.177" transform="translate(5.971 38.383)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_15-2" data-name="Line 15" x2="29" transform="translate(9.382 45.206)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_16-2" data-name="Line 16" x2="22.177" transform="translate(5.971 52.03)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_17-2" data-name="Line 17" x2="29" transform="translate(9.382 58.853)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                </g>
                            </g>
                            <g id="Page-5" data-name="Page" transform="translate(23.353 375.353)">
                                <g id="Rectangle_33-3" data-name="Rectangle 33" transform="translate(-0.353 -0.353)" fill="#fff" stroke="#707070" stroke-width="1">
                                    <rect width="43" height="69" rx="6" stroke="none"/>
                                    <rect x="0.5" y="0.5" width="42" height="68" rx="5.5" fill="none"/>
                                </g>
                                <line id="Line_2-3" data-name="Line 2" x2="22.177" transform="translate(5.971 11.088)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_3-3" data-name="Line 3" x2="29" transform="translate(9.382 17.912)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_4-3" data-name="Line 4" x2="22.177" transform="translate(5.971 24.735)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_5-3" data-name="Line 5" x2="29" transform="translate(9.382 31.559)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_6-3" data-name="Line 6" x2="22.177" transform="translate(5.971 38.383)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_7-3" data-name="Line 7" x2="29" transform="translate(9.382 45.206)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_8-3" data-name="Line 8" x2="22.177" transform="translate(5.971 52.03)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <line id="Line_9-3" data-name="Line 9" x2="29" transform="translate(9.382 58.853)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                <g id="Page-6" data-name="Page" transform="translate(0)">
                                    <g id="Rectangle_34-3" data-name="Rectangle 34" transform="translate(-0.353 -0.353)" fill="#fff" stroke="#707070" stroke-width="1">
                                        <rect width="43" height="69" rx="6" stroke="none"/>
                                        <rect x="0.5" y="0.5" width="42" height="68" rx="5.5" fill="none"/>
                                    </g>
                                    <line id="Line_10-3" data-name="Line 10" x2="22.177" transform="translate(5.971 11.088)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_11-3" data-name="Line 11" x2="29" transform="translate(9.382 17.912)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_12-3" data-name="Line 12" x2="22.177" transform="translate(5.971 24.735)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_13-3" data-name="Line 13" x2="29" transform="translate(9.382 31.559)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_14-3" data-name="Line 14" x2="22.177" transform="translate(5.971 38.383)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_15-3" data-name="Line 15" x2="29" transform="translate(9.382 45.206)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_16-3" data-name="Line 16" x2="22.177" transform="translate(5.971 52.03)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                    <line id="Line_17-3" data-name="Line 17" x2="29" transform="translate(9.382 58.853)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="1"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                    Dokumenter
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 52.999 73">
                        <title id="databaseIkon">Database Ikon</title>
                        <g id="Database_Ikon" data-name="Database Ikon" transform="translate(-9 -428)">
                            <g id="Union_1" data-name="Union 1" transform="translate(9 428)" fill="#fff">
                                <path d="M 35.74980163574219 72.49990081787109 L 17.2494010925293 72.49990081787109 C 15.31971168518066 72.49990081787109 13.74980163574219 70.92958831787109 13.74980163574219 68.99941253662109 L 13.74980163574219 49.5394287109375 L 13.74980163574219 49.25131225585938 L 13.50052165985107 49.10683059692383 C 9.619010925292969 46.85728073120117 6.363461494445801 43.62237930297852 4.08579158782959 39.75183868408203 C 1.739951372146606 35.76544189453125 0.5000013709068298 31.19876098632812 0.5000013709068298 26.54549980163574 C 0.5000013709068298 23.02898979187012 1.187421321868896 19.61795997619629 2.543151378631592 16.40715026855469 C 3.85271143913269 13.3057107925415 5.727541446685791 10.52024078369141 8.115571022033691 8.128129959106445 C 10.50351142883301 5.736090183258057 13.28407096862793 3.85813045501709 16.38000106811523 2.546410322189331 C 19.58493041992188 1.188510417938232 22.98965072631836 0.5000004172325134 26.49960136413574 0.5000004172325134 C 30.00976181030273 0.5000004172325134 33.41461181640625 1.188510417938232 36.61958312988281 2.546410322189331 C 39.71553039550781 3.858120441436768 42.49607086181641 5.736080646514893 44.88397216796875 8.128120422363281 C 47.27191162109375 10.52022075653076 49.14668273925781 13.30568027496338 50.45617294311523 16.40714073181152 C 51.81183242797852 19.617919921875 52.49920272827148 23.02896118164062 52.49920272827148 26.54549980163574 C 52.49920272827148 31.19939041137695 51.2594108581543 35.76626968383789 48.91385269165039 39.75241851806641 C 46.63631057739258 43.62297058105469 43.38061141967773 46.85774230957031 39.49872970581055 49.10702896118164 L 39.2494010925293 49.25149154663086 L 39.2494010925293 49.53964996337891 L 39.2494010925293 68.99941253662109 C 39.2494010925293 70.92958831787109 37.67949295043945 72.49990081787109 35.74980163574219 72.49990081787109 Z" stroke="none"/>
                                <path d="M 35.74980163574219 71.99990081787109 C 37.40378952026367 71.99990081787109 38.7494010925293 70.65389251708984 38.7494010925293 68.99941253662109 L 38.7494010925293 48.96334075927734 L 39.24805068969727 48.67440032958984 C 43.05559158325195 46.46820068359375 46.24896240234375 43.29534149169922 48.4829216003418 39.49885177612305 C 50.78329086303711 35.5894889831543 51.99920272827148 31.11029052734375 51.99920272827148 26.54549980163574 C 51.99920272827148 23.09613037109375 51.3250732421875 19.75053024291992 49.99555206298828 16.60163116455078 C 48.71120071411133 13.55974006652832 46.87236022949219 10.82769012451172 44.53011322021484 8.481369972229004 C 42.18796157836914 6.135160446166992 39.46084976196289 4.293240547180176 36.42453002929688 3.006800413131714 C 33.28160095214844 1.675180435180664 29.9423713684082 1.000000357627869 26.49960136413574 1.000000357627869 C 23.05704116821289 1.000000357627869 19.71794128417969 1.675180435180664 16.5750617980957 3.006800413131714 C 13.53875160217285 4.293250560760498 10.81162166595459 6.135170459747314 8.46942138671875 8.481380462646484 C 6.127081394195557 10.82773017883301 4.288171291351318 13.55978012084961 3.003771305084229 16.60164070129395 C 1.674171328544617 19.75057029724121 1.000001311302185 23.09616088867188 1.000001311302185 26.54549980163574 C 1.000001311302185 31.10966110229492 2.216061353683472 35.58864974975586 4.516721248626709 39.49826049804688 C 6.750811576843262 43.29476165771484 9.944051742553711 46.4677619934082 13.75123119354248 48.67422866821289 L 14.24980163574219 48.96318054199219 L 14.24980163574219 68.99941253662109 C 14.24980163574219 70.65389251708984 15.59541130065918 71.99990081787109 17.2494010925293 71.99990081787109 L 35.74980163574219 71.99990081787109 M 35.74980163574219 72.99990081787109 L 17.2494010925293 72.99990081787109 C 15.04080104827881 72.99990081787109 13.24980163574219 71.20890045166016 13.24980163574219 68.99941253662109 L 13.24980163574219 49.5394287109375 C 5.329721450805664 44.94929122924805 1.364135755466123e-06 36.37020111083984 1.364135755466123e-06 26.54549980163574 C 1.364135755466123e-06 11.88450050354004 11.86470127105713 4.089355343239731e-07 26.49960136413574 4.089355343239731e-07 C 41.13540267944336 4.089355343239731e-07 52.99920272827148 11.88450050354004 52.99920272827148 26.54549980163574 C 52.99920272827148 36.37110137939453 47.67068099975586 44.94982147216797 39.7494010925293 49.53964996337891 L 39.7494010925293 68.99941253662109 C 39.7494010925293 71.20890045166016 37.95840072631836 72.99990081787109 35.74980163574219 72.99990081787109 Z" stroke="none" fill="#707070"/>
                            </g>
                            <line id="Line_20" data-name="Line 20" x2="24.718" transform="translate(23.007 488.147)" fill="none" stroke="#707070" stroke-width="1"/>
                            <line id="Line_21" data-name="Line 21" x2="24.718" transform="translate(23.007 484.852)" fill="none" stroke="#707070" stroke-width="1"/>
                            <line id="Line_22" data-name="Line 22" x2="24.718" transform="translate(23.007 481.556)" fill="none" stroke="#707070" stroke-width="1"/>
                        </g>
                    </svg>

                    Database
                </a>
                <!-- Add more links as needed -->
            </div>
        </div>

        <!-- Middle Column: Information Feed -->
        <div class="col-md-8" id="textFeed">
            <div class="info-box">
                <div class="d-flex align-items-center mb-2">
                    <img src="img/dok-ai/portrait250-01.png" class="rounded-circle me-2" alt="Profile Image" style="width: 40px; height: 40px;">
                    <div>
                        <small class="fw-bold">22-11-23</small>
                    </div>
                </div>
                <h5 class="text-center">Ander Jensen</h5>
                <br>
                <p>Anders har sammen med UT besøgt kommende arbejdsplads. Her har vi øvet busruten. <span class="fw-bold">#transport</span></p>
                <br>
                <p>Anders havde svært ved at huske stoppestedet og virkede påvirket af de mange mennesker i bussen <span class="fw-bold">#advarselstegn</span> men formåede at holde fokus på opgaven <span class="fw-bold">#mål3</span> </p>
                <br>
                <p>Til aften hjalp UT med at børste tænder, da Anders var for træt til selv at gøre det. <span class="fw-bold">#hygiejne #personalestøtte</span>. </p>
                <hr>
                <!-- Repeat this structure for more messages -->
                <div class="d-flex align-items-center mb-2">
                    <img src="img/dok-ai/portrait250-01.png" class="rounded-circle me-2" alt="Profile Image" style="width: 40px; height: 40px;">
                    <div>
                        <small class="fw-bold">21-11-23</small>
                    </div>
                </div>
                <h5 class="text-center">Simon Larsen</h5>
                <br>
                <p>Simon har i dag taget et bad, med verbal støtte fra UT. <span class="fw-bold">#hygiejne #personalestøtte</span></p>
                <br>
                <p>Simon gik efter aftensmaden en tur med UT, da Simon ikke kan huske vejen. <span class="fw-bold">#sundhed #personalestøtte</span> </p>

               <hr>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-md-2 d-flex flex-column align-items-center">
            <!-- Container for the Button -->

            <!-- Other content for the column can go here -->
        </div>

        <!-- Modal Structure -->
        <div class="modal fade" id="inputModal" tabindex="-1" aria-labelledby="inputModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="inputModalLabel">Opret nyt indlæg</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Your form or input fields go here -->
                        <form id="infoForm">
                            <div class="mb-3">
                                <label for="inputDate" class="form-label">Dato</label>
                                <input type="text" class="form-control" id="inputDate">
                            </div>
                            <div class="mb-3">
                                <label for="inputCitizen" class="form-label">Borger</label>
                                <input type="text" class="form-control" id="inputCitizen">
                            </div>
                            <div class="mb-3">
                                <label for="inputNote" class="form-label">Notat</label>
                                <input type="text" class="form-control" id="inputNote">
                            </div>
                            <!-- Add more input fields as needed -->
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
                        <button type="button" class="btn light-green-btn" onclick="submitInfo()">Opret</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>





<!-- Scripts -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script type="module" src="js/main.js"></script>

</body>
</html>
