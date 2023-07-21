<?php
include_once __DIR__ . '/../models/index.php';

$movie = new Movie('The Mummy', 'eng', 2, 'n 3067 BC, a fearsome warrior known as the Scorpion King leads an army to conquer the world. However, they are eventually defeated and exiled to the desert of Ahm Shere. Dying, the Scorpion King vows to give Anubis his soul in return for the power to defeat his enemies.');
$movie2 = new Movie('When Harry met Sally', 'eng', 5, 'When Harry Met Sally... is a 1989 American romantic comedy-drama film written by Nora Ephron and directed by Rob Reiner. It stars Billy Crystal as Harry and Meg Ryan as Sally. The story follows the title characters from the time they meet in Chicago just before sharing a cross-country drive.');
$movie3 = new Movie('Star Wars', 'eng', 4, 'Star Wars is a multi-genre mythology and multimedia franchise created by George Lucas in 1976. Comprising movies, novels, comics, video games, toys, and numerous television series, the Star Wars franchise employs archetypal motifs common to religions, classical mythology.');
$movie4 = new Movie('Harry Potter', 'eng', 4, 'An orphaned boy enrolls in a school of wizardry, where he learns the truth about himself, his family and the terrible evil that haunts the magical world.');

$movies = [$movie, $movie2, $movie3, $movie4];
