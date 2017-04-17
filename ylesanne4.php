<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      $tekst1 = $_REQUEST['tekst1'];
      $tekst2 = $_REQUEST['tekst2'];
      $tekst3 = $_REQUEST['tekst3'];
      $tekst = $tekst1 . $tekst2 . $tekst3;

    echo $tekst;
    ?>

    <form action="?" method="get">
      <input type="text" name="tekst1" value="">
      <input type="text" name="tekst2" value="">
      <input type="text" name="tekst3" value="">
      <input type="submit" value="Pane tekst kokku">
    </form>

  </body>
</html>
