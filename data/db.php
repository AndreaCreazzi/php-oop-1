<?php
include_once __DIR__ . '/../models/index.php';

$movie = new Movie('Mummia', 'ita', 3, 'Mummia film incredibile');
$movie2 = new Movie('Ti presento Sally', 'ita', 5, 'Ti presento Sally film incredibile');
$movie3 = new Movie('Star Wars', 'ita', 3, 'Star Wars fil incredibile');
$movie4 = new Movie('Harry Potter', 'ita', 3, 'Harry Potter film incredibile');

$moveis = [$movie, $movie2, $movie3, $movie4];
