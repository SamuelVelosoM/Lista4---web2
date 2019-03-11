<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>questao3</title>
    </head>
    <body>
        <form method="post">
           <input type="number" name="n_de_cores">
        </form>
        <?php
            include 'functions\functions.php';
            color("n_de_cores");
        ?>
    </body>
</html>
