<?php
/**
 * connecting to database and formats response to be an associative array
 *
 * @return PDO the database containing information
 */
function connect_to_netflix_series_db () {
    $db = new PDO('mysql:host=db;dbname=netflix_series', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}
/**
 * looping through the whole array and accessing the values stored on the keys then putting that into HTML
 *
 * @param $series array of the netflix_collection containing arrays of individual series
 *
 * @return string of the array formatted in HTML to be more readable
 */
function print_values($series) {
    $seriesHtml = '';
    foreach($series as $serie) {
        $seriesHtml .= '<div>';
        $seriesHtml .= '<h2>Title: ' . $serie['title'] . '</h2>';
        $seriesHtml .= '<p>Start Date: ' . $serie['start_date'] . '</p>';
        $seriesHtml .= '<p>End Date: ' . $serie['end_date'] . '</p>';
        $seriesHtml .= '<p>Number Of Seasons: ' . $serie['number_of_seasons'] . '</p>';
        $seriesHtml .= '<p>Number Of Episodes: ' . $serie['number_of_episodes'] . '</p>';
        $seriesHtml .= '<p>Director: ' . $serie['director'] . '</p>';
        $seriesHtml .='</div>';
    }
    return $seriesHtml;
}






