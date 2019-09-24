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
$query = $db-> query('SELECT `id`,`title`,`start_date`,`end_date`,`number_of_seasons`,`number_of_episodes`,`director` FROM `favourites`');
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
</body>
</html>
