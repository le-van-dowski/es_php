<?php
    session_start();
    //safety check
    require_once "data_quiz.php";


    if(!isset($_SESSION["current_question"])){
    //riazzera il valore della question
    $_SESSION["current_question"] = 0;
    //inizializza il vettore answers svuotandolo
    $_SESSION["answers"] = [];
    }

    $question_num=$_SESSION["current_question"];
    $tot = count($quiz); //conta gli elementi del quiz
    
    $question = $quiz[$question_num]["question"];
    $options = $quiz[$question_num]["options"];
?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    
</head>

<body style="background-color: #f7d6e6">

<nav class="navbar navbar-dark" style="background-color: #7f1d4a">
    <div class="container">
        <span class="navbar-brand">Polish Quiz</span>
    </div>
</nav>

<div class="container mt-5">

    <div class="card p-4">
        <h4 class="mb-4">
            Domanda <?= $question_num + 1 ?> di <?= $tot ?>
        </h4>

        <h5 class="mb-3"><?= $question ?></h5>

        <form action="process_answer.php" method="POST">
            <?php foreach ($options as $idx => $option): ?>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="answer" id="opt<?= $idx ?>" value="<?= $idx ?>" required>
                    <label class="form-check-label" for="opt<?= $idx ?>">
                        <?= $option ?>
                    </label>
                </div>
            <?php endforeach; ?>

            <button type="submit" class="btn btn-primary mt-3">Invia risposta</button>
        </form>

    </div>
</div>

</body>
</html>