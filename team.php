<?php
namespace team;
/*
  get team by summoner id
*/
function getTeamBySummonerIds($region, $summonerIds, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v2.4/team/by-summoner/$summonerIds?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response);
}

/*
  get teams by team ids
*/
function getTeamsByTeamIds($region, $teamIds, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v2.4/team/$teamIds?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response);
}
?>
