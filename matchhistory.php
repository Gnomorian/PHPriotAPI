<?php
namespace matchhistory;
/*
  get match history by summoner id
*/
function getMatchHistoryBySummonerId($region, $summonerId, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v2.2/matchhistory/$summonerId?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}
?>
