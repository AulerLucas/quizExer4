<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> exercicio4 </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <form method="POST">

            <div id="til">
                <h1> Exercício 4</h1>
            </div>

            <p id="p">
                Insira um número: <input type="number" name="n1" />
            </p>
            <p id="p">
                Insira um número: <input type="number" name="n2" />
            </p>

            <div class="rb">
                <input type="radio" name="op" id="a" value="a">
                <label> Adição </label>
            </div>
            <div class="rb">
                <input type="radio" name="op" id="s" value="s">
                <label> Subtração </label>
            </div>
            <div class="rb">
                <input type="radio" name="op" id="m" value="m">
                <label> Multiplição </label>
            </div>
            <div class="rb">
                <input type="radio" name="op" id="d" value="d">
                <label> Divisão </label>
            </div>

            <div id="bt">
                <input type="submit" value="Resultado" name='res' id="res">
            </div>
            <?php
            if (isset($_POST["res"])) {
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $op = $_POST['op'];


                switch ($op) {
                    case  "a":
                        echo "<p class='resultado'> Resultado da soma: " . ($n1 + $n2) . "</p>";
                        break;

                    case  "s":
                        echo "<p class='resultado'>Resultado da subtração: " . ($n1 - $n2) . "</p>";
                        break;

                    case  "m":
                        echo "<p class='resultado'>Resultado da multiplicação: " . ($n1 * $n2) . "</p>";
                        break;

                    case  "d":
                        echo "<p class='resultado'>Resultado da divisão: " . ($n1 / $n2) . "</p>";
                        break;
                }
            }
            ?>

    </div>
    </form>


</body>

</html>