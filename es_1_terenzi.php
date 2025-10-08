<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>i numeri primi</h1>
    <ul>
        <?php

        function prime($num){
            if($num <=1) return false; //negativo?
            if($num == 2) return true;
            if($num % 2 == 0) return false;

            $sqrt = sqrt($num);
            for ($i = 3; $i <= $sqrt; $i += 2) {
                if ($num % $i == 0) return false;
            }return true;
        }

        $primes = [];
        $num = 2;

          
        while (count($primes) < 100) {//gira fino al raggiungimento di 100 numeri
            if (prime($num)) {
                $primes[] = $num;
            }
            $num++;
        }

        
        foreach ($primes as $p) { //per ogni elemento di prime come p
            echo "<li>" . $p . "</li>";
        }


        ?>

    </ul>
</body>
</html>