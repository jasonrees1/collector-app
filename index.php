<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<body>
<?php
//This connects to my database
$db=new PDO('mysql:host=db;dbname=netflix_series','root','password');
//Fixes the format(one instead of two values)
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
// Run $db's query method with the SQL passed to it - from is the table name
$query = $db-> query('SELECT `id`,`TITLE`,`START DATE`,`END DATE`,`NUMBER OF SEASONS`,`NUMBER OF EPISODES`,`DIRECTOR` FROM `favourites`');
//execute the above
$query->execute();
// Run query's fetchAll method to translate info into something understandable
$series=$query->fetchAll();
// Outputs to browser with some HTML
foreach($series as $serie) {
    echo '<div>';
    echo '<h2>Title: ' . $serie['TITLE'] . '</h2>';
    echo '<p>Start Date: ' . $serie['START DATE'] . '</p>';
    echo '<p>End Date: ' . $serie['END DATE'] . '</p>';
    echo '<p>Number Of Seasons: ' . $serie['NUMBER OF SEASONS'] . '</p>';
    echo '<p>Number Of Episodes: ' . $serie['NUMBER OF EPISODES'] . '</p>';
    echo '<p>Director: ' . $serie['DIRECTOR'] . '</p>';
    echo '</div>';
}
?>
</body>
</html>
