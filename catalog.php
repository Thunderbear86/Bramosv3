<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Bramos - AI løsninger</title>
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <?php include 'navbar.php'; ?>
    <div class="container-fluid mb-0">
        <div class="row">
            <div class="col-12 cover-image-container">
                <img src="img/stock/cover.jpg" alt="Cover Img">
                <div class="overlay-text-cover">Bramos</div>
                <div class="subtext">Et skridt ind i fremtiden</div>
            </div>
        </div>
    </div>
</header>

<!-- White space -->
<div class="container-fluid container-third mt-5 mb-5">
    <div class="row"></div>
</div>

<!-- Katalog -->
<div class="container mt-5">
    <h2>AI-løsninger</h2>
    <?php
    require 'settings/init.php';

    $solutions = $db->sql("SELECT * FROM aisolutions WHERE is_active = 1", [], true);

    if (!empty($solutions)) {
        echo '<div class="row">';
        foreach ($solutions as $solution) {
            $modalId = "solutionModal" . $solution->id;
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card h-100 ai-card" data-bs-toggle="modal" data-bs-target="#' . $modalId . '">';
            echo '<h4 class="text-center mt-2">' . htmlspecialchars($solution->name) . '</h4>';
            echo '<div class="card-body">';
            echo '<p class="card-text">' . substr(htmlspecialchars($solution->description), 0, 100) . '...</p>';
            echo '</div>';
            echo '<div class="card-footer">';
            echo '<small class="text-muted">Kategorier: ' . htmlspecialchars($solution->categories) . '</small><br>';
            echo '<small class="text-muted">Pris: ' . htmlspecialchars($solution->pricing) . '</small>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            // Modal for each solution
            echo '<div class="modal fade" id="' . $modalId . '" tabindex="-1" aria-labelledby="' . $modalId . 'Label" aria-hidden="true">';
            echo '<div class="modal-dialog modal-lg">';
            echo '<div class="modal-content">';
            echo '<div class="modal-body">' . nl2br(htmlspecialchars($solution->description)) . '</div>';
            echo '<div class="modal-footer">';
            echo '<button type="button" class="btn btn-secondary custom-luk-button" data-bs-dismiss="modal">Tilbage</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    } else {
        echo '<p>Ingen løsninger fundet.</p>';
    }
    ?>
</div>

<!-- Tilføj ny AI -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <h2>Tilføj AI</h2>
            <form method="post" action="addai.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Navn på AI:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="description">Beskrivelse:</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="categories">Kategorier (kommasepareret, fx: tekst, video):</label>
                    <input type="text" class="form-control" id="categories" name="categories">
                </div>
                <div class="form-group">
                    <label for="image">Billede:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="url">URL Link:</label>
                    <input type="text" class="form-control" id="url" name="url">
                </div>
                <div class="form-group">
                    <label for="pricing">Prisstruktur:</label>
                    <select class="form-control" id="pricing" name="pricing">
                        <option value="gratis">Gratis</option>
                        <option value="køb">Køb</option>
                        <option value="gratis og køb">Gratis og køb</option>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary custom-send-button">Send</button>
            </form>
        </div>
    </div>
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
