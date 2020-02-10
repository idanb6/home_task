<?php
include 'oop.php';

$custumerLog = new tool();
$api = $custumerLog->get_api();

// $api="d9f000dbc0237078dfb39bf8033d244c";


// function continent_code($ip)
// {
//     $data = json_decode(file_get_contents('http://api.ipstack.com/'.$ip.'?access_key=d9f000dbc0237078dfb39bf8033d244c'), true);
//     return $data['continent_code'];

// }  


// function continent_name($ip)
// {
//     $data = json_decode(file_get_contents('http://api.ipstack.com/'.$ip.'?access_key=d9f000dbc0237078dfb39bf8033d244c'), true);
// return $data['continent_name'];
// }

// function country_name($phone)
// {
//     $data = json_decode(file_get_contents('http://apilayer.net/api/validate?access_key=13ade1dae626aad375ef99aaa3389bc8&number='.$phone), true);
// return $data['country_name'];
// }

function country_Name_convert($name)
{
    require 'db_countrycode.php';
    $sqlSelect = "SELECT continents.name FROM `countries` INNER JOIN continents ON continents.code=countries.continent_code WHERE countries.name ='$name'
    ";
    $result = mysqli_query($conn, $sqlSelect);
    $row = mysqli_fetch_array($result);
    return $row["name"];
}

function country_Code_convert($code){
    require 'db_countrycode.php';
    $sqlSelect = "SELECT continent_code FROM `countries` where name = '$code'
    ";
    $result = mysqli_query($conn, $sqlSelect);
    $row = mysqli_fetch_array($result);
    return $row["continent_code"];
}

function country_code($phone)
{
    $phone3= $phone[0].$phone[1].$phone[2];
    require 'db_countrycode.php';
    $sqlSelect = "SELECT * FROM `countrycode` WHERE `COUNTRY_CODE` like '$phone3'";
    $result = mysqli_query($conn, $sqlSelect);
    $row = mysqli_fetch_array($result);
    return $row["COUNTRY"];
}
// function pho3($phone)
// {
//     return $phone[0].$phone[1].$phone[2];
// }

function isOrisnot($a,$b){
    if ($a===$b){
        return "this call will be counted as same continenr call and total calls issued by coustemer";
    }else{
        return "this call won't be counted as same continent call, but only in total calls issued by customer";
    }
}