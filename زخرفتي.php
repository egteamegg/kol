<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

if(preg_match('/^(بحث) (.*)/s', $text, $stor)){
$rs = 'https://play.google.com/store/search?q='.urlencode($stor[2]);
$rs1 = 'http://www.mobogenie.com/search.html?q='.urlencode($stor[2]);
$rs2 = 'http://www.mobomarket.net/search?keyword='.urlencode($stor[2]);
$rs3 = "http://www.apkmirror.com/?s=".urlencode($stor[2])."&post_type=app_release&searchtype=apk";
$rs4 = 'http://www.appsodo.com/search_'.urlencode($stor[2])."_1";
$rs5 = 'https://es.aptoide.com/search?query='.urlencode($stor[2])."&type=apps";
$rs6 = 'http://html5.oms.apps.opera.com/en_in/catalog.php?search='.urlencode($stor[2]);
$rs7 = 'https://www.androiddrawer.com/search-results/?q='.urlencode($stor[2]);
bot('sendChatAction', [
'chat_id'=>$chat_id,
'action'=>'typing',]);

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*جاري $text ~*",'reply_to_message_id'=>$message->message_id, 
'parse_mode'=>"markdown", 
]);
sleep(10);
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'text'=>"
*🔘¦ تم البحث عن $text ، 
👁‍🗨¦ هذه روابط التحميل المباشر⇩⇩⇩
ـ••┉┉┉┉┉┉┉┉┉┉┉┉┉••*\n\n[Googli Play Market]($rs)\n\n[Mobogenie Market]($rs1)\n\n[Mobo Market]($rs2)\n\n[Apkmirror Market]($rs3)\n\n[Appsodo Market]($rs4)\n\n[Appoide Market]($rs5)\n\n[Opera Market]($rs5)\n\n[Androide Dwar Market]($rs7)\n",]);}


if($text == "زخرفه" or $text == "زخرفة" or $text == "زخرفلي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"👨🏻‍🏭| آهـهـلآ لـ زخرفـة اسـمك ارسل {زخرفه + الكلمة } ✓
كمثال ← { زخرفه النيزك } 👨‍🔧
وسيتم زخرفته لك باقصى سرعة 🏃‍♂",
'reply_to_message_id'=>$message->message_id, 
]);
}
$a = str_replace("زخرفه ","",$text);
if($text == "زخرفه $a"){
$b = file_get_contents("https://armoff99.ml/Justrunapi/armofApi.php?text=".$a);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*جاري $text ~*",'reply_to_message_id'=>$message->message_id, 
'parse_mode'=>"markdown", 
]);
sleep(10);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$b تم الزخرفه اضغط ليتم النسخ
",'parse_mode'=>"MarkDown",
]);
}
