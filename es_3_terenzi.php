<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Lancio dei Dadi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body class="text-center pt-5 bg-secondary" >

    <h1 class="text-white">Lancio dei dadi</h1>
        <?php
            // Genera i due numeri casuali tra 1 e 6 compresi
            $dice = rand(1, 6);
            $dice2 = rand(1, 6);

            function drawDots($value) {
                // associa cordinate x,y ai pallini in base al valore
                $dot_positions = [
                    1 => [[50, 50]],// centrale
                    2 => [[25, 25], [75, 75]],
                    3 => [[25, 25], [50, 50], [75, 75]],
                    4 => [[25, 25], [25, 75], [75, 25], [75, 75]],
                    5 => [[25, 25], [25, 75], [50, 50], [75, 25], [75, 75]],
                    6 => [[25, 25], [25, 50], [25, 75], [75, 25], [75, 50], [75, 75]]
                ];
                // disegna il contorno del dado
                //la dimensione 100*100
                echo '<svg width="100" height="100" viewBox="0 0 100 100" 
                style="background:white; border: 2px solid #333; border-radius: 10px;">';
                //disegna i cerchi
                    foreach ($dot_positions[$value] as [$x, $y]) { //per ogni valore di $dot_pos associa x,y
                        echo "<circle cx=\"$x\" cy=\"$y\" r=\"8\" fill=\"#000000ff\" />";//cx=x cy=y r=raggio fill=colore riempimento
                    }
                echo '</svg>';//IL TAG!!
            }
        ?>
        
    <div class=" m-4">
        <?php drawDots($dice);?>
        <?php drawDots($dice2);?>
    </div>

    <div class="fs-4 text-white ">
        Hai ottenuto: <b><?php echo $dice + $dice2; ?></b>
    </div>

    <form action="">
        <button class="p-2 mt-3 fs-5 rounded-4 bg-primary-subtle border-0" type="submit">Rilancia</button>
    </form>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
 
</body>
</html>