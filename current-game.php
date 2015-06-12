<?php
namespace currentgame;
/*
  gets ingame info for a specific summoner
*/
function getCurrentGameBySummoner($region, $summonerId, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/observer-mode/rest/consumer/getSpectatorGameInfo/$region/$summonerId?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}
?>
