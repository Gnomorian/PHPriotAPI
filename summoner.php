<?php
namespace summoner;
/*
  get summoners by name
*/
function getSummonersByName($region, $names, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v1.4/summoner/by-name/$names?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get summoners by summoner ids
*/
function getSummonersByIds($region, $summonerIds, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v1.4/summoner/$summonerIds?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get summoner masteries by summoner ids
*/
function functionName($region, $summonerIds, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v1.4/summoner/$summonerIds/masteries?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get summoner names by summoner ids
*/
function getSummonerNamesByIds($region, $summonerIds, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v1.4/summoner/$summonerIds/name?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response);
}

/*
  get runes by summoner ids
*/
function getRunesBySummonerIds($region, $summonerIds, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v1.4/summoner/$summonerIds/runes?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response);
}
?>
