<?php
include "../Access.php";
include "../index.php";
/* The Source Bot: @woow2018
Channel News: @woow2018
Support: @woow2018
*/
if(preg_match('/^\/([Cc]alc) (.*)/s',$text)){
    preg_match('/^\/([Cc]alc) (.*)/s',$text,$match);
    $rs = file_get_contents('http://api.mathjs.org/v1/?expr='.urlencode($match[2]));
	SendMessage($chat_id , "<code>".$rs."</code>" , 'html');
  }
  ?>
