<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'e6a79f433b28897cc03833e77dfd40d0';
$access_token  = '6qCgNW6pZGXJgQo8PO4onSiULw90CPyQXZ5bC4Te15jxiit11TrZ6UrtxNEJ+dXfi8fHIfeYdCvrG47xJvocGCEKaBvbuL4Q96cth3yZqoGRmV4AxZxG0P6y8V0MrVHvRqK5FvVhP/iIdAm+fZP8FAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
