<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>es genera paragrafi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
 
</head>
<body>
    <?php
    $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, magni! Rem qui, officia laborum fugit unde libero molestias dolores dolorem sed atque eius non quia nesciunt repellendus eligendi neque est.";
     echo "<p class=\"text-success\" style=\"font-size :" . rand(16,20) . " px\" >$str</p>";
     echo "<p class=\"text-primary\" style=\"font-size :" . rand(16,20) . " px\" >".strtoupper($str)."</p>";
     echo "<h1 class=\"text-danger\" style=\"font-size :" . rand(16,20) . " px\" >".strlen($str)."</h1>";
     echo "<h2 class=\"text-warning\" style=\"font-size :" . rand(16,20) . " px\">".str_word_count($str)."</h2>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>