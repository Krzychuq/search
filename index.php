<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.1">
    <title>Strona</title>
</head>
<body>

<header>

    <a href="index.php">Nazwa firmy</a>

    <form class='formularz' action="polacz.php" method="POST">
        
        <div class="tabela">
            <div class="kolumna">
                <span>Nr zamówienia</span>
                <div class="pole">
                    <input type="text" name="nrZamowienia">
                </div>
            </div>

            <div class="kolumna">
                <span>Data zamowienia</span>
                <div class="pole">
                    <input type="date" min='2003-01-01' max='2005-12-31' name="dataZamowienia">
                </div>
            </div>

            <div class="kolumna">
                <span>Nr klienta</span>
                <div class="pole">
                    <input type="text" name="nrKlienta">
                </div>
            </div>
        </div>
    <div class="przycisk">
        <button type="submit">🔎</button>
    </div>
        
    </form>

</header>

</body>
</html>