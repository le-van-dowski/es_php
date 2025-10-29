<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
 
</head>
<body>
    <h2>Login</h2>

    <?php
        //username => password
        $users = [
            "admin" => "meow",
            "cristian" => "abcd",
            "asia" => "woff",
            "monkey33" => "NAPOLI"
        ];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = $_POST["username"] ?? "";//stringa vuota per evitere problems
            $password = $_POST["password"] ?? "";

            if (isset($users[$username]) && $users[$username] === $password) {
                // Login corretto
                $_SESSION["users"] = $username;

            } else {
               echo "<p>credenziali errate</p>";
            }
        }
    ?>
    <form method="post">
        <div class="container m-3 w-25">
            <form action="es_7_terenzi" method ="GET">
            <div class="mt-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="my-2">
                <label class="form-label">password</label>
                <input type="password" class="form-control">
            </div>
            <button type="submit" value="Accedi" class="btn btn-light">Accedi</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 
</body>
</html>