<?php
$json_data=file_get_contents("http://api.wunderground.com/api/4390c5b95f638d8f/geolookup/q/pontianak.json");
$json_data1=file_get_contents("http://api.wunderground.com/api/4390c5b95f638d8f/forecast/q/pontianak.json");
$json_data2=file_get_contents("http://api.wunderground.com/api/4390c5b95f638d8f/astronomy/q/pontianak.json");
	$parsed_json = json_decode($json_data);
	$parsed_json_1 = json_decode($json_data1);
	$parsed_json_2 = json_decode($json_data2);
//jason data 1
  $negara = $parsed_json->{'location'}->{'country_name'};
  $daerah = $parsed_json->{'location'}->{'city'};
  $latitude = $parsed_json->{'location'}->{'lat'};
  $longitude = $parsed_json->{'location'}->{'lon'};
//jason data 2
	$day = $parsed_json_1->forecast->txt_forecast->forecastday[0]->title;
	$image = $parsed_json_1->forecast->txt_forecast->forecastday[0]->icon_url;
	$info = $parsed_json_1->forecast->txt_forecast->forecastday[0]->fcttext_metric;
	$info1 = $parsed_json_1->forecast->simpleforecast->forecastday[0]->{'date'}->pretty;
	$lembab = $parsed_json_1->forecast->simpleforecast->forecastday[0]->avehumidity;
	$angin = $parsed_json_1->forecast->simpleforecast->forecastday[1]->{'avewind'}->kph;
//jason data 3
$jam = $parsed_json_2->{'moon_phase'}->{'current_time'}->{'hour'};
$menit = $parsed_json_2->{'moon_phase'}->{'current_time'}->{'minute'};
$sunrise1 = $parsed_json_2->{'sun_phase'}->{'sunrise'}->{'hour'};
$sunrise2 = $parsed_json_2->{'sun_phase'}->{'sunrise'}->{'minute'};
$sunset1 = $parsed_json_2->{'sun_phase'}->{'sunset'}->{'hour'};
$sunset2 = $parsed_json_2->{'sun_phase'}->{'sunset'}->{'minute'};
	echo "WEATHER FORECAST OF PONTIANAK</br>";
	echo "================================================</br>";
	echo "***INFORMASI DAERAH***</br>";
	echo "Daerah sekarang : ${daerah}\n </br>";
	echo "Negara		  : ${negara} \n </br>";
	echo "G.Lintang 	  : ${latitude}\n </br>";
	echo "G.Bujur 	      : ${longitude} \n </br>";
echo "================================================</br>";
	echo "***INFORMASI CUACA***</br>";
	echo "Hari ini : ${day} \n ";
	echo "${info1} \n </br>";
	echo "Informasi cuaca  : ${info} ";
	echo '<img src="'.$image.'"></br>';
	echo "Kelembaban : ${lembab} \n </br>";
	echo "Kec.Angin : ${angin} mph\n </br>";
echo "================================================</br>";
echo "***INFORMASI MATAHARI***</br>";
echo "Saat ini : ${jam} : ${menit}\n </br>";
echo "Sunrise : ${sunrise1} : ${sunrise2}\n </br>";
echo "Sunset : ${sunset1} : ${sunset2}\n </br>";
?>

