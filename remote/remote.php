<?php //key 5630e9d9b0msh9b877ae893c4f04p16ec19jsnd7c28e790cb7 
?>
<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://moviesdatabase.p.rapidapi.com/titles/search/title/matrix?page=3&info=mini_info&limit=10&titleType=movie",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: moviesdatabase.p.rapidapi.com",
		"X-RapidAPI-Key: 5630e9d9b0msh9b877ae893c4f04p16ec19jsnd7c28e790cb7"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	 echo $response;

}
