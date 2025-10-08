<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubrica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
<div class="container m-5">
    <h1 class="mb-3 text-center">Rubrica</h1>

    <?php
    function printRubrica($rubrica, $type) {
        echo "<h4 class='mt-4'>$type</h4>";
        echo "<table class='table table-striped mt-2'>";
        echo "<thead class='table-primary'><tr><th>Nome</th><th>Numero cellulare</th></tr></thead><tbody>";
        //for che gira per chiave e per valore
        foreach ($rubrica as $name => $number) {
            echo "<tr><td>$name</td><td>$number</td></tr>";
        }
        echo "</tbody></table>";
    }

    //array asssociativo chiave-valore
    $rubrica = array("mirko olivi" => "3555621490", "matylda ulica" => "3907788234", "anna marian" => "324101423", "elia zamboni" => "347 912 3456", "gaia morandi" => "320 678 2345");

    printRubrica($rubrica, "Rubrica all'inizio");

    // Aggiunta, modifica e rimozione
    $rubrica["laura spiga"] = "3476688544";
    $rubrica["mirko olivi"] = "3308840512";
    unset($rubrica["elia zamboni"]);
    unset($rubrica["gaia morandi"]);

    //stampa rubrica
    printRubrica($rubrica, "rubrica aggiornata");
    ?>
    </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
 integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>