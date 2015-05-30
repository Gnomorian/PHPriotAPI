<?php
namespace lolstatus;
/*
  get list of shards
*/
function getShards($apiKey)
{
  $service_url = "https://$region.api.pvp.net/shards?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response);
}

/*
  get list of shards within region
*/
function getShardsByRegion($region, $apiKey)
{
  $service_url = "https://$region.api.pvp.net/shards/$region?api_key=$apiKey";
  $response = file_get_contents($service_url);
  return json_decode($response);
}
?>
