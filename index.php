<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Netflix Series Collection</title>
</head>
<body>
<h2>Complete all fields to add a new series to your collection</h2>
<form method="post" action="adddata.php">
    Series Title:
    <input type="text" name="seriestitle" required>
    Date Started:
    <input type="date" name="datestarted" required>
    Date Ended:
    <input type="date" name="dateended" required>
    Number of seasons:
    <input type="number" name="noofseasons" min="1" max="50" required>
    Number of episodes:
    <input type="number" name="noofepisodes" min="1" max="300" required>
    Director:
    <input type="text" name="director" required>
    <input type="submit" value="submit">
</form>
<?php
require_once 'functions.php';
$db = connect_to_netflix_series_db();
$query = $db->query('SELECT `id`,`title`,`start_date`,`end_date`,`number_of_seasons`,`number_of_episodes`,`director` FROM `favourites`');
$query->execute();
$series = $query->fetchAll();
$htmlToShow = print_values($series);
echo $htmlToShow;
?>
</body>
</html>
