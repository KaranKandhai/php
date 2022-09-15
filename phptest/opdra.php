<?php
if (!empty($_GET['naam']) ) {
    echo "je naam is:" . $_GET['naam']."<br>";
} else {
    echo "vul je naam in!<br>";
}

echo "het bedrag is:".$_GET['bedrag']."<br>";
echo "De btw is: ".$_GET['BTW']. "procent<br>";

if(isset($_GET['uitrekenen'])) { if(!empty($_GET['naam']) && !empty($_GET['bedrag']) && !empty($_GET['btw'])) { $bedrag=filter_input(INPUT_GET,'bedrag',FILTER_VALIDATE_FLOAT); if($bedrag===false) { $melding= "alle velden zijn ingevuld, maar bedrag is geen getal!!! <br>"; } else { //alle velden bevatten de juiste informatie //nu kunnen we de berekening uitvoeren! if($_GET['btw']==='6') { $inclusiefBtw=$bedrag*1.06; } else { $inclusiefBtw=$bedrag*1.21; } $melding= "Het bedrag inclusief btw is ". $inclusiefBtw ." euro <br>"; } } else { $melding= "Niet alle velden zijn ingevoerd!!!<br>"; } } else { $melding= "je bent hier voor de eerste keer!"; } ?> <html lang="nl"> <head> <title>opdracht1</title> </head> <body> <form method="get" action="opgave1.php"> <label for="naam">Naam:</label> <input id="naam" type="text" name="naam" value=""/> <br><br> <label for="bedrag">Bedrag exclusief BTW</label> <input id="bedrag" type="text" name="bedrag" value=""/> <br> <input class="nostyle" type="radio" name="btw" value="6" />Laag, 6% <br> <input class="nostyle" type="radio" name="btw" value="21" />Hoog, 21% <br><br> <input type="submit" name="uitrekenen" value="verwerk" /> </form> <?php echo $melding; ?> </body> </html>
