<?php
date_default_timezone_set("Asia/Jakarta");
header("Content-Type: text/event-stream\n\n");

$counter = rand(1, 10);
while (1) {

    $curDate = date(DATE_ISO8601);

    $counter--;

    if (!$counter) {
        echo 'data: This is a message at time ' . $curDate . "\n\n";
        $counter = rand(1, 10);
    }

    ob_end_flush();
    flush();
    sleep(1);
}