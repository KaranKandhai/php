<!DOCTYPE html>
<html lang="nl">
<head>
    <title>opdracht</title>
</head>
<body>

<form method="post" action="opdracht.php">
    <label for="naam">Naam:</label>
    <input id="naam" type="text" name="naam" value=""/>
    <br><br>
    <label for="bedrag">Bedrag exclusief BTW</label>
    <input id="bedrag" type="text" name="bedrag" value=""/>
    <br>

    <input class="nostyle" type="radio" name="btw" value="6"  />Laag, 6%
    <br>
    <input class="nostyle" type="radio" name="btw" value="21"  />Hoog, 21%

    <br><br>

    <input type="submit" name="uitrekenen" value="verwerk" />
</form>


</body>
</html>
