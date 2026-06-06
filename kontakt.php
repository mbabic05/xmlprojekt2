<?php
include("auth.php");
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt | Boks Pro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            🥊 Boks Pro
        </a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Početna</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="ponuda.php">Ponuda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="kontakt.php">Kontakt</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">
                        Odjava
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>

<header class="bg-danger text-white text-center py-5">
    <h1>Kontakt</h1>
    <p>Pošaljite nam upit vezan uz boksačku opremu.</p>
</header>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-body">

                    <form>

                        <div class="mb-3">
                            <label class="form-label">Ime i prezime</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Poruka</label>
                            <textarea rows="5" class="form-control"></textarea>
                        </div>

                        <button class="btn btn-danger">
                            Pošalji
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<footer class="bg-dark text-white text-center py-3">
    © 2025 Boks Pro | Mate Babić
</footer>

</body>
</html>