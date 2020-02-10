<?php

class tool{
    private $api="d9f000dbc0237078dfb39bf8033d244c";
    private $ip;
    private $phone;

    function get_api(){
        return $this->api;
    }
    function continent_code($ip)
    {
    $data = json_decode(file_get_contents('http://api.ipstack.com/'.$ip.'?access_key='.$this->api), true);
    return $data['continent_code'];

    }
    function continent_name($ip)
{
    $data = json_decode(file_get_contents('http://api.ipstack.com/'.$ip.'?access_key='.$this->api), true);
    return $data['continent_name'];
}
function pho3($phone)
{
    return $phone[0].$phone[1].$phone[2];
}
// function country_name($phone)
// {
//     $data = json_decode(file_get_contents('http://apilayer.net/api/validate?access_key=13ade1dae626aad375ef99aaa3389bc8&number='.$this->phone), true);
// return $data['country_name'];
// }

}