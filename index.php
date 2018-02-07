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
          <h2>Er heerst paniek...</h2>
          <form action="paniekStory.php" method="post">
            <p>Welk dier zou je nooit als huisdier willen hebben?<input type="text" name="paniek1"></p>
            <p>Wie is de belangrijkste persoon in je leven?<input type="text" name="paniek2"></p>
            <p>Welk land zou je graag willen wonen?<input type="text" name="paniek3"></p>
            <p>Wat doe je als je je verveelt?<input type="text" name="paniek4"></p>
            <p>Met welk speelgoed speelde je als kind het meest?<input type="text" name="paniek5"></p>
            <p>Bij welke docent spijbel je het liefst?<input type="text" name="paniek6"></p>
            <p>Als je €100.000,- had, wat zou je dan doen?<input type="text" name="paniek7"></p>
            <p>Wat is je favoriete bezigheid?<input type="text" name="paniek8"></p>
            <button type="submit">Versturen</button>
          </form>
        </article>
      </section>
    </main>
  </body>
</html>
