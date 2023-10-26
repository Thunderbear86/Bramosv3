<?php echo '
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid"> 

        <!-- Brand Section -->
        <div class="col">
            <a class="navbar-brand fw-bold" href="index.php">Metaperspektiv</a>
        </div>

        <!-- Menu Items Section -->
        <div class="col">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Systemer
                        </a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown1">
                            <a class="dropdown-item" href="#">Dokumentation</a>
                            <a class="dropdown-item" href="#">Kommunikation</a>
                            <a class="dropdown-item" href="#">Videns Database</a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Apps
                        </a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown2">
                            <a class="dropdown-item" href="#">Personale</a>
                            <a class="dropdown-item" href="#">Borger</a>
                            <a class="dropdown-item" href="#">Adm. og Ledelse</a>
                        </div>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kurser
                        </a>
                        <div class="dropdown-menu" aria-labelledby="servicesDropdown3">
                            <a class="dropdown-item" href="#">Personale</a>
                            <a class="dropdown-item" href="#">Borger</a>
                            <a class="dropdown-item" href="#">Adm. og Ledelse</a>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vidensbank</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vores Vision</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontakt Os</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Search + Buttons Section -->
        <div class="col d-flex justify-content-end g-2"> 
            <form class="form-inline d-flex mr-2">
                <input class="form-control mr-sm-2" type="search" placeholder="Søg" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Søg</button>
            </form>
            <a href="#" class="btn btn-primary">Book Møde</a>
        </div>

    </div>
</nav>

<!-- Include Bootstrap JS and Popper.js for dropdowns and other functionality -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
';
?>
