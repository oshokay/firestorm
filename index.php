<?php
echo "first index";
$location = "/base";
header( "Location: ". "http://". $_SERVER['HTTP_HOST'] . $location );
