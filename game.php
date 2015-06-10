<?php
namespace game;
/*
  get recent games by summoner id
*/
function getRecentGameBySummonerId($region, $summonerId, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v1.3/game/by-summoner/$summonerId/recent?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}
?>
