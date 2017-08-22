<?php
	$entries = array(
		1 => "Tim Powell",
		2 => "Tony Rappa",
		3 => "Drew",
		4 => "Chris Waring",
		5 => "Chris Sjoblom"
	);
	function getWinner($max) {
		$url = 'https://www.random.org/integer-sets/?sets=1&num=3&min=1&max='.$max.'&commas=on&order=index&format=plain&rnd=new';
		$handle = curl_init();
		curl_setopt($handle, CURLOPT_URL, $url);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		$response = curl_exec($handle);
		return $response;
	}
	$winners = getWinner(5);
	$winners = str_replace(' ', '', $winners);
	$winners = explode(',',$winners);
	$array = array();
	foreach($winners as $winner) {
		$array[] = (int)$winner;
	}
	foreach($array as $item) {
		echo "<h1>$entries[$item]</h1>";
	}
?>