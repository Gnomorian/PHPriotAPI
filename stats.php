<?php
namespace stats;
/*
  get ranked stats by summoner id
*/
function getRankedStatsBySummonerId($region, $summonerId, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v1.3/stats/by-summoner/$summonerId/ranked?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response);
}

/*
  get summoner summary by summoner id
*/
function getSummonerSummaryById($region, $summonerId, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v1.3/stats/by-summoner/$summonerId/summary?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response);
}
?>
