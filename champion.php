<?php
namespace champion;

class ChampionDto {
  public $active;
  public $botEnabled;
  public $botMmEnabled;
  public $freeToPlay;
  public $id;
  public $rankedPlayEnabled;
}

/*
  returns all champions
*/
function getChampions($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v1.2/champion?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response);
}

/*
  gets a champion by id
*/
function getCHampionByID($region, $id, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/$region/v1.2/champion/$championId?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}
?>
