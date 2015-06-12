<?php
namespace match;
/*
  get match by match id
*/
function getMatchById($region, $matchId, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v2.2/match/$matchId?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}
?>
