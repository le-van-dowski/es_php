<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funzioni</title>
</head>
<body>
    
    <?php
        $a = 0;
        function average($marks){
            global $a;
            $sum =0;
            foreach($marks as $m){
                $sum+=$m;
            }
            $a = $sum/count($marks);

        return $a;
        }

        function print(){
            global $a;
            echo "<p>".(($a >= 6)? "studente promosso" : "studente bocciato")."</p>";
        }
    ?>
</body>
</html>