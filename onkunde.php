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
          <h2>Onkunde</h2>
          <form action="onkundeStory.php" method="post">
            <p>Wat zou je graag willen kunnen?<input type="text" name="onkunde1"></p>
            <p>Met welke persoon kun je goed opschieten? <input type="text" name="onkunde2"></p>
            <p>Wat is je favoriete getal?<input type="text" name="onkunde3"></p>
            <p>Wat heb je altijd bij je als je op vakantie gaat?<input type="text" name="onkunde4"></p>
            <p>Wat is je beste persoonlijke eigenschap?<input type="text" name="onkunde5"></p>
            <p>Wat is je slechtste persoonlijke eigenschap?<input type="text" name="onkunde6"></p>
            <p>Wat is het ergste wat je kan overkomen?<input type="text" name="onkunde7"></p>
            <button type="submit">Verstuur</button>
          </form>
        </article>
      </section>
    </main>
  </body>
</html>
