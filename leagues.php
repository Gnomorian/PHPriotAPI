<?php
namespace leagues;
/*
  get league by summoner ids
*/
function getLeagueBySummonerIds($region, $summonerIds, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v2.5/league/by-summoner/$summonerIds?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get league entries by summoner ids
*/
function getLeagueEntriesBySummonerIds($region, $summonerIds, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v2.5/league/by-summoner/$summonerIds/entry?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get league by team ids
*/
function getLeagueByTeamIds($region, $teamIds, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v2.5/league/by-team/$teamIds?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get league entry by team ids
*/
function getLeagueEntriesByTeamIds($region, $teamIds, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v2.5/league/by-team/$teamIds/entry?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get challenger league list
*/
function getChallengerRankings($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v2.5/league/challenger?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get master league list
*/
function getMasterRankings($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v2.5/league/master?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}
?>
