<?php
  $onkunde1 = $_POST["onkunde1"];
  $onkunde2 = $_POST["onkunde2"];
  $onkunde3 = $_POST["onkunde3"];
  $onkunde4 = $_POST["onkunde4"];
  $onkunde5 = $_POST["onkunde5"];
  $onkunde6 = $_POST["onkunde6"];
  $onkunde7 = $_POST["onkunde7"];

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
            Er zijn veel mensen die niet kunnen <?php echo $onkunde1 ?>. Neem nou <?php echo $onkunde2 ?>. Zelfs met de hulp van een <?php echo $onkunde4 ?> of zelfs <?php echo $onkunde3 ?> kan <?php echo $onkunde2 ?> niet <?php echo $onkunde1 ?>. Dat heeft niet te maken met een gebrek aan <?php echo $onkunde5 ?>, maar met een te veel aan <?php echo $onkunde6 ?>. Te veel <?php echo $onkunde6 ?> leidt tot <?php echo $onkunde7 ?> en dat is niet goed als je wilt <?php echo $onkunde1 ?>. Helaas voor <?php echo $onkunde2 ?>.
          </p>
        </article>
      </section>
    </body>
</html>
