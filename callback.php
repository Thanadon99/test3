<?php // callback.php
define("LINE_MESSAGING_API_CHANNEL_SECRET", '85a055cff00c5ca119e5ded3225bfdf3');
define("LINE_MESSAGING_API_CHANNEL_TOKEN", 'lZ+WXE4At+V8NlwkInMHC5wJAvpeeKnCt197Y7l1CVfzSG6uhdee6tVMhG/Esk2GEmFAjl7gvElqWawH4o7AUJxGnKbhpogowCJqIA1cQ57oIF/4qF8CrOx7f0K4RCUjqUy3urKNf4xFaPhCl+faGAdB04t89/1O/w1cDnyilFU=');

require __DIR__."/../vendor/autoload.php";

$bot = new \LINE\LINEBot(
    new \LINE\LINEBot\HTTPClient\CurlHTTPClient(LINE_MESSAGING_API_CHANNEL_TOKEN),
    ['channelSecret' => LINE_MESSAGING_API_CHANNEL_SECRET]
);

$signature = $_SERVER["HTTP_".\LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];
$body = file_get_contents("php://input");

$events = $bot->parseEventRequest($body, $signature);

foreach ($events as $event) {
    if ($event instanceof \LINE\LINEBot\Event\MessageEvent\TextMessage) {
        $reply_token = $event->getReplyToken();
        $text = $event->getText();
        $bot->replyText($reply_token, $text);
    }
}

echo "OK";