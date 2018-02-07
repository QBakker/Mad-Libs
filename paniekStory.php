<?php
  $paniek1 = $_POST["paniek1"];
  $paniek2 = $_POST["paniek2"];
  $paniek3 = $_POST["paniek3"];
  $paniek4 = $_POST["paniek4"];
  $paniek5 = $_POST["paniek5"];
  $paniek6 = $_POST["paniek6"];
  $paniek7 = $_POST["paniek7"];
  $paniek8 = $_POST["paniek8"];

 ?>
<!DOCTYPE html>
 <html>
   <head>
     <title>Mad Libs</title>
     <meta charset="utf-8">
     <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="css/style.css">
   </head>
   <body>
     <main>
       <h1>Mad Libs</h1>
       <section class="wrapper">
         <header>
           <nav>
             <a href="index.php">Er heerst paniek...</a>
             <a href="onkunde.php">Onkunde</a>
           </nav>
         </header>
         <article>
          <p>
            er heerst paniek in het koninkrijk <?php echo $paniek3 ?>. Koning <?php echo $paniek6 ?> is ten einde raad en als koning <?php echo $paniek6 ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $paniek2 ?>.
          </p>
          <p>"<?php echo $paniek2 ?>! Het is een ramp! Het is een schande!"</p>
          <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
          <p>"Mijn <?php echo $paniek1 ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $paniek5 ?> voor hem gekocht!"</p>
          <p>"Majesteit, uw <?php echo $paniek1 ?> komt vast vanzelf weer terug?"</p>
          <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $paniek8 ?> leren?"</p>
          <p>"Maar, Sire, daar kunt u toch uw <?php echo $paniek7 ?> voor gebruiken."</p>
          <p>"<?php echo $paniek2 ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
          <p>"<?php echo $paniek4 ?>, Sire."</p>
        </article>
    </section>
    <footer>
      <p>Deze website is gemaakt door <?php echo $paniek2 ?>.</p>
    </footer>
  </body>
</html>
