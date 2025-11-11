<?php
session_start();
if (!isset($_SESSION['cameriere'])) {
    header('Location: login.php');
    exit;
}

$num = $_GET['num'] ?? null;
if (!$num || !isset($_SESSION['tavoli'][$num])) {
    die("Tavolo non trovato.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $azione = $_POST['azione'];
    $piatto = $_POST['piatto'];

    if ($azione === 'aggiungi' && !empty($piatto)) {
        $_SESSION['tavoli'][$num]['comande'][] = $piatto;
    } elseif ($azione === 'rimuovi') {
        $index = array_search($piatto, $_SESSION['tavoli'][$num]['comande']);
        if ($index !== false) unset($_SESSION['tavoli'][$num]['comande'][$index]);
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Tavolo <?= $num ?></title></head>
<body>
<h2>Tavolo <?= $num ?></h2>

<form method="POST">
    <input type="text" name="piatto" placeholder="Nome piatto" required>
    <button type="submit" name="azione" value="aggiungi">Aggiungi</button>
</form>

<h3>Comande</h3>
<ul>
    <?php foreach ($_SESSION['tavoli'][$num]['comande'] as $p): ?>
        <li><?= htmlspecialchars($p) ?>
            <form method="POST" style="display:inline">
                <input type="hidden" name="piatto" value="<?= htmlspecialchars($p) ?>">
                <button type="submit" name="azione" value="rimuovi">Rimuovi</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>

<a href="dashboard.php">← Torna ai tavoli</a>
</body>
</html>