<?php 
/*$p=unserialize('a:7:{s:1:"/";s:0:"";s:6:"source";s:10:"6028313241";s:11:"destination";s:10:"5206451273";s:7:"message";s:5:"Hello";s:4:"type";s:3:"sms";s:4:"cost";s:8:"0.000000";s:9:"unique_id";s:36:"968c3e08-6642-43d2-96af-8930152ab54e";}');
$p['message']=2;
echo serialize($p);
echo "<pre>";
print_r($p);
die;*/

$url = '//www.example.com/path?googleguy=googley';

// Prior to 5.4.7 this would show the path as "//www.example.com/path"
echo "<pre>";
print_r(parse_url($url));
?>