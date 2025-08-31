<?php
$x = simplexml_load_file('example-file.xml');

$tofind = '2025-08-30';
$query = "//forecast/day[date='$tofind']";
$result = $x->xpath($query);

$day = $result[0];

$city = $x->query_info->city;
$province = $x->query_info->province;

$weather_info = [
    "day_of_week"=>$day->day_of_week
    "high_temp"=>$day->high_temp
    "low_temp"=>$day->low_temp
    "day_condition"=>$day->day_condition
    "night_condition"=>$day->night_condition
];

echo ""