<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$file=$_GET['file'];
$name=$_GET['expire'];

$t = shell_exec("ffmpeg -i small.mp4 -strict -2 -profile:v baseline -level 3.0 -start_number 0 -hls_list_size 0 -hls_segment_filename 'sample-%06d.png' -f hls sample.m3u8");
echo $t;
?>
