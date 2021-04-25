<?php

$presentTime = 'oct 21 2015 PM 04 06';
$destinationTime = 'oct 21 2015 PM 04 29';

DateTime::createFromFormat('M d Y a h:i', date($presentTime));
DateTime::createFromFormat('M d Y a h:i', date($destinationTime));

echo $presentTime, '<br>';
echo $destinationTime;