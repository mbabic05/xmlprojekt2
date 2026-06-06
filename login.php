<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Test korisnik
    $valid_username = "admin";
    $valid_password = "admin123";

    if ($username === $valid_username && $password === $valid_password) {

        $_SESSION["user"] = $username;

        header("Location: index.php");
        exit();

    } else {
        $error = "Neispravno korisničko ime ili lozinka!";
    }
}
?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Prijava</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-4">

            <div class="card shadow">

                <div class="card-header text-center">
                    <h3>Prijava</h3>
                </div>

                <div class="card-body">

                    <?php if($error): ?>
                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST">

                        <div class="mb-3">
                            <label>Korisničko ime</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Lozinka</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button class="btn btn-danger w-100">
                            Prijavi se
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>