<?php
include("auth.php");
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boks Pro | Početna</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            🥊 Boks Pro
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active"
                       href="index.php">
                        Početna
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="ponuda.php">
                        Ponuda
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"
                       href="kontakt.php">
                        Kontakt
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger"
                       href="logout.php">
                        Odjava
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<!-- HEADER -->
<header class="hero-section text-white text-center">

    <div class="container">

        <h1 class="display-4 fw-bold">
            Dobrodošli u Boks Pro
        </h1>

        <p class="lead">
            Specijalizirana trgovina boksačke opreme
        </p>

        <p>
            Prijavljeni ste kao:
            <strong><?php echo $_SESSION["user"]; ?></strong>
        </p>

    </div>

</header>

<!-- SADRŽAJ -->
<section class="container py-5">

    <div class="row">

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <h3>🥊 Rukavice</h3>

                    <p>
                        Profesionalne boksačke rukavice za trening i sparing.
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <h3>👟 Obuća</h3>

                    <p>
                        Kvalitetne boksačke tenisice za maksimalnu stabilnost.
                    </p>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="card shadow h-100">

                <div class="card-body text-center">

                    <h3>🩹 Oprema</h3>

                    <p>
                        Bandaže, štitnici i ostala zaštitna oprema.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-5">

    <p class="mb-0">
        © 2025 Boks Pro | Mate Babić
    </p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>