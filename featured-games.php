<?php
namespace featuredgames;
/*
  gets the featured game list
*/
function getFeaturedGames($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/observer-mode/rest/featured?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response);
}
?>
