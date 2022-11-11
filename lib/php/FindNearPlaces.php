<?php
  ini_set('display_errors' , 'On');
  error_reporting(E_ALL);

  $lat = $_REQUEST['lat'];
  $lng = $_REQUEST['lng'];
  $url = 'http://api.geonames.org/findNearbyPlaceNameJSON?formatted=true&lat='.$lat.'&lng='. $lng.'&username=venkysatya&style=full';
  
  
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false );
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, $url);

  
  $result = curl_exec($ch);

  curl_close($ch);
  
  $decode = json_decode($result,true);

  $output['data'] = $decode['geonames'];
  
  header('Content-Type: application/json; charset=UTF-8');
  echo json_encode ($output);
?>