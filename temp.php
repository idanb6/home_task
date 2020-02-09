<?php
$phone="995376870861";
$phone3= $phone[0].$phone[1].$phone[2];
echo $phone3;



$data = json_decode(file_get_contents('Continents.json'), true);
print_r($data);