<?php
	$games = file_get_contents("games.json");
	$games = json_decode($games,1);
	$max = count($games);
	$number = rand(1,$max);
	$game = $games[$number];
	file_put_contents("thisweek.txt", $game);
	echo "<p>$game</p>";
?>