<?php
/*
 * @author Renant Bernabé
 * @date 26/09/2014
 */

// Busca todas as classes que estão em uso no sistema
function __autoload($class) {
    require "class/" . $class .".php";
}

// Inicia nova class
$Connection = new MySql();

// Conecta ao banco de dados
//$Connection->conecta();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Base PHP OO</title>
        <!--CSS-->
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <!--JS-->
        <script type="text/javascript" src="js/custom.js"></script>
    </head>
    <body>
        <?php
        echo "PHP OO, bem vindo!";
        ?>
    </body>
</html>
<?php
// Desconecta do Banco de dados
//$Connection->desconecta();
?>
