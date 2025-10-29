<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
 
</head>
<body data-bs-theme="dark">
    <?php
        if(!isset($_SESSION["counter"])){
            $_SESSION["counter"] = 1;
        }else{
            $_SESSION["counter"] ++;
        }

        if (isset($_POST['resetSession'])) {
            session_unset();
            session_destroy();
            session_start();
        }
        
    ?>
     <div class="container m-auto">
         
     <p>Hai visitato questa pagina <?php echo $_SESSION["counter"]?> volte durante questa sessione.</p>
        <form method="post">
            <button type="button" name="resetSession" class="btn btn-danger">Reset</button>
        </form>
     </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</body>
</html>