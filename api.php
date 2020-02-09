<!--


// $url = 'http://api.ipstack.com/145.81.57.99?access_key=d9f000dbc0237078dfb39bf8033d244c';

// $ch=curl_init();
// curl_setopt($ch, CURLOPT_URL , $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER , 1);

// $json= curl_exec($ch);
// echo $json."<br>";
// echo  count($json);
 -->


 <?php
 $data = json_decode(file_get_contents('http://api.ipstack.com/116.52.75.78?access_key=d9f000dbc0237078dfb39bf8033d244c'), true);
 print_r($data);
$test= $data['ip'];
echo $test;