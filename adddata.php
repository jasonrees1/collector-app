<?php
require_once 'functions.php';
$db = connect_to_netflix_series_db();
$query = $db->prepare('INSERT INTO `favourites`(`title`,`start_date`,`end_date`,`number_of_seasons`,`number_of_episodes`,`director`) VALUES (:title, :start_date, :end_date, :number_of_seasons, :number_of_episodes, :director)');
$query -> execute(['title' => $_POST ["seriestitle"], 'start_date' => $_POST ["datestarted"], 'end_date' => $_POST ["dateended"], 'number_of_seasons' => $_POST ["noofseasons"], 'number_of_episodes' => $_POST ["noofepisodes"], 'director' => $_POST ["director"]]);
header('Location: index.php');