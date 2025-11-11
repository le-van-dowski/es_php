<?php
session_start();
if (!isset($_SESSION['cameriere'])) {
    header('Location: login.php');
    exit;
}
$cameriere = $_SESSION['cameriere'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numero_tavolo'])) {
    $num = $_POST['numero_tavolo'];
    if (!isset($_SESSION['tavoli'][$num])) {
        $_SESSION['tavoli'][$num] = ['comande' => []];
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Gestione Tavoli</title></head>
<body>
<h2>Cameriere: <?= htmlspecialchars($cameriere) ?></h2>

<form method="POST">
    <input type="number" name="numero_tavolo" placeholder="Numero tavolo" required>
    <button type="submit">Apri Tavolo</button>
</form>

<h3>Tavoli in gestione</h3>
<ul>
    <?php foreach ($_SESSION['tavoli'] as $num => $tavolo): ?>
        <li>
            Tavolo <?= $num ?> — 
            <a href="tavolo.php?num=<?= $num ?>">Gestisci Comande</a> |
            <a href="chiudi_tavolo.php?num=<?= $num ?>">Chiudi Tavolo</a>
        </li>
    <?php endforeach; ?>
</ul>

<a href="logout.php">Chiudi Turno</a>
</body>
</html>