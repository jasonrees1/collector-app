<!DOCTYPE html>
<html lang="en">
  <head>
        <meta charset="UTF-8">
        <title>add_to_your_collection</title>
      </head>
  <body>
  <form method = "post" action="adddata.php">
    Series Title:<br>
    <input type="text" name="seriestitle"><br>
    Date Started:<br>
    <input type="date" name="datestarted"><br>
    Date Ended:<br>
    <input type="date" name="dateended"><br>
    Number of seasons:<br>
    <input type="number" name="noofseasons" min="1" max="50"><br>
    Number of episodes:<br>
    <input type="number" name="noofepisodes" min="1" max="300"><br>
    Director:<br>
    <input type="text" name="director"><br>
    <input type="submit" value="submit">

</form>
  </body>
</html>

<?php
