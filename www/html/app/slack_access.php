<?php


$slackApiKey = 'xoxb-1195962175362-1271957118227-6avyYuyotnh9uVSlAjTTlghy';
$text = 'Hello';
$text = urlencode($text);
$channel = urlencode("hoge");
$url = "https://slack.com/api/chat.postMessage?token=" . $slackApiKey ."&channel=%23" . $channel . "&text=" . $text . "&as_user=true";

file_get_contents($url);



