<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculo</title>
</head>
<body>
    <div class="calculo">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['num1']) && isset($_POST['num2']) && $_POST['num1'] != '' && $_POST['num2'] != '') {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operacao = $_POST['operacao'];

                if ($operacao != "Adição" && $operacao != "Subtração" && $operacao != "Multiplicação" && $operacao != "Divisão" && $operacao != "Exponenciação" && $operacao != "Raiz Quadrada" && $operacao != "Fatorial") {
                    echo "<p style='color: red;'>Operação inválida.</p>";
                } else if (!is_numeric($num1) || !is_numeric($num2)) {
                    echo "<p style='color: red;'>Por favor, insira apenas números.</p>";
                } else {
                    switch ($operacao) {
                        case "Adição":
                            $resultado = $num1 + $num2;
                            break;
                        case "Subtração":
                            $resultado = $num1 - $num2;
                            break;
                        case "Multiplicação":
                            $resultado = $num1 * $num2;
                            break;
                        case "Divisão":
                            if ($num2 != 0) {
                                $resultado = $num1 / $num2;
                            } else {
                                echo "<p style='color: red;'>Não é possível dividir por zero!</p>";
                            }
                            break;
                        case "Exponenciação":
                            $resultado = pow($num1, $num2);
                            break;
                        case "Raiz Quadrada":
                            $resultado = sqrt($num1 + $num2);
                            break;
                        case "Fatorial":
                            function fatorial($num)
                            {
                                $resultado = 1;
                                for ($i = 1; $i <= $num; $i++) {
                                    $resultado *= $i;
                                }
                                return $resultado;
                            }
                            $resultado = fatorial($num1 + $num2);
                            break;
                    }
                    if (isset($resultado)) {
                        $resultado_formatado = number_format($resultado, 2);
                        echo "<h2 style='color: green;'>Resultado: $resultado_formatado</h2>";
                    }
                }
            } else {
                echo "<p style='color: red;'>Por favor, preencha todos os campos.</p>";
            }
        }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </div>
    <footer>
        <div class="footer-container">
            <p>&copy; Desenvolvido por Rafaely.</p>
        </div>
    </footer>
</body>
</html>