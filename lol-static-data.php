<?php
namespace staticdata;
/*
  get champion info
*/
function getChampions($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/champion?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get champion by id
*/
function getCHampionByID($region, $championId, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/champion/$championId?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get all item info
*/
function getItems($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/item?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get item by item id
*/
function getItemByItemId($region, $itemId, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/item/$itemId?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get language strings
*/
function getLanguageStrings($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/language-strings?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get languages
*/
function getLanguages($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/languages?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get the map data
*/
function getMapData($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/map?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get mastery data
*/
function getMasteryData($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/mastery?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get mastery data by id
*/
function getMasteryById($region, $masteryId, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/mastery/$masteryId?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get realm data
*/
function getRealm($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/realm?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get rune list
*/
function getRunes($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/rune?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get rune by id
*/
function getRuneByRuneId($region, $runeId, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/rune/$runeId?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get summoner spells
*/
function getSummonerSpells($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/summoner-spell?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get summoner spell by id
*/
function getSummonerSpellById($region, $spellId, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/summoner-spell/$spellId?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}

/*
  get versions
*/
function getVersions($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/api/lol/static-data/$region/v1.2/versions?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response, true);
}
?>
