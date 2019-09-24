<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Netflix Series Collection</title>
</head>
<body>
<?php
$db = new PDO('mysql:host=db;dbname=netflix_series','root','password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$query = $db->query('SELECT `id`,`title`,`start_date`,`end_date`,`number_of_seasons`,`number_of_episodes`,`director` FROM `favourites`');
$query->execute();
$series = $query->fetchAll();
foreach($series as $serie) {
    echo '<div>';
    echo '<h2>Title: ' . $serie['title'] . '</h2>';
    echo '<p>Start Date: ' . $serie['start_date'] . '</p>';
    echo '<p>End Date: ' . $serie['end_date'] . '</p>';
    echo '<p>Number Of Seasons: ' . $serie['number_of_seasons'] . '</p>';
    echo '<p>Number Of Episodes: ' . $serie['number_of_episodes'] . '</p>';
    echo '<p>Director: ' . $serie['director'] . '</p>';
    echo '</div>';
}
?>
<h2>Complete all fields to add a new series to your collection</h2>
<form method="post" action="adddata.php">
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
