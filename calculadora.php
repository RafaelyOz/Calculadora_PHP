<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>
<body>
    <header>
    <div class="container">
        <h2>Calculadora</h2>
        <form action="calculo.php" method="post">
            <div>
                <label for="num1">Número 1:</label>
                <input type="text" name="num1" id="idnume1">
                <br><br>
                <label for="num2">Número 2:</label>
                <input type="text" name="num2" id="idnum2">
                <br><br>
            </div>
            <input type="submit" name="operacao" value="Adição">
            <input type="submit" name="operacao" value="Subtração">
            <input type="submit" name="operacao" value="Multiplicação">
            <input type="submit" name="operacao" value="Divisão">
            <input type="submit" name="operacao" value="Exponenciação">
            <input type="submit" name="operacao" value="Raiz Quadrada">
            <input type="submit" name="operacao" value="Fatorial">
        </form>
    </div>
    </header>
    <footer>
        <div class="footer-container">
            <p>&copy; Desenvolvido por Rafaely.</p>
        </div>
    </footer>
</body>

</html>