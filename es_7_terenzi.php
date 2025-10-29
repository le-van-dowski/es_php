<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <?php
        include "es_7_terenzi.php";
    ?>
    <div class="container m-3 w-25">
        <form action="es_7_terenzi" method ="GET">
        <div class="mt-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control">
        </div>
        <div class="my-2">
            <label class="form-label">Lastname</label>
            <input type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control">
        </div>
    </form>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>