<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>questao1</title>
    </head>
    <body>
        <form method="post">
            <input type="number" name="numero" min="0">
        </form>
        
        <?php
            include 'functions\functions.php';
            
            descobrir_n_primo("numero");
        ?>
    </body>
</html>
