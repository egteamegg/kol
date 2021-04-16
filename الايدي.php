<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

$name       = $update->message->from->first_name;
$re         = $update->message->reply_to_message;
$re_msgid   = $update->message->reply_to_message->message_id;
$re_id      = $update->message->reply_to_message->from->id;
$gp_name    = $update->message->chat->title;
$user       = $update->message->from->username;
$for        = $update->message->from->id;
$sticker    = $update->message->sticker;
$number     = str_word_count($text);
$_spam = file_get_contents("data/$chat_id/spam.txt");
$spam_ = explode("\n",$_spam);
$numper     = strlen($text);
$video      = $update->message->video;
$photo_      = $update->message->photo;
$voice      = $update->message->voice;
$bsma     = $update->message->voice;
$doc        = $update->message->document;
$fwd        = $update->message->forward_from;
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$re_user    = $update->message->reply_to_message->from->username;
$re_msgid   = $update->message->reply_to_message->message_id;
$type       = $update->message->chat->type;
$mid        = $message->message_id;
$buyy   =  file_get_contents("username.php");
$by       =  explode("@",$buyy);
$sudo   = file_get_contents("sudo.php");
$admin = file_get_contents("sudo.php");
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$first_name = $message->from->first_name;
if($message){
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
$rec = $update->channel_post->reply_to_message->text;

file_put_contents('msgs.json', json_encode($msgs));}
 $set        = file_get_contents("data/$chat_id.txt");
$ex         = explode("\n", $set);
$photo1     = $ex[0];
$sticker1   = $ex[1];
$contact1   = $ex[2];
$doc1       = $ex[3];
$fwd1       = $ex[4];
$voice1     = $ex[5];
$link1      = $ex[6];
$audio1     = $ex[7];
$video1     = $ex[8];
$tag1       = $ex[9];
$mark1      = $ex[10];
$bots1      = $ex[11];
$number1      = $ex[12];
$onlyibadlz       = file_get_contents("data/restrictChatMember/$chat_id.txt");
$_ex         = explode("\n", $onlyibadlz);
$photo2     = $_ex[0];
$sticker2   = $_ex[1];
$contact2   = $_ex[2];
$doc2       = $_ex[3];
$fwd2       = $_ex[4];
$voice2     = $_ex[5];
$link2      = $_ex[6];
$audio2     = $_ex[7];
$video2     = $_ex[8];
$tag2       = $_ex[9];
$mark2      = $_ex[10];
$bots2      = $_ex[11];

 $reply = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$re_id);
$info = json_decode($get, true);
$re_rou = $info['result']['status'];
$namesaeedh = $update->message->reply_to_message->from->first_name;
$usersaeedh = $update->message->reply_to_message->from->username;
$idsaeedh = $update->message->reply_to_message->from->id;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];

$command = array("id","/id","ايدي");
$asa = json_decode(file_get_contents('added.json'),true);
$get_myid = file_get_contents("data/ids/idset.txt");
$_get_ = file_get_contents("data/ids/id.txt");
$get_ALONE = file_get_contents("data/ids/id_.txt");
$GETGG1ZZ = file_get_contents("data/ids/iBadlz.txt");
$_GG1ZZ_ = explode("\n",$GETGG1ZZ);
$newiddd = $update->message->new_chat_member->id;
if($update->message->new_chat_member and $from_id != $newiddd){

$asa['sss'][$chat_id][$from_id] = ($asa['sss'][$chat_id][$from_id]+1);
file_put_contents('added.json', json_encode($asa));}

$asa[ sss ][$chat_id][$from_id]= 0;
if($text == "جهاتيي" or $text == "جهاتي" and $asa['sss'][$chat_id][$from_id] == 0){

bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*⌛️ يتم التحقق عن جهاتك المضافة ......*
",
'reply_to_message_id'=>$message->message_id, 
'parse_mode'=>"markdown", 
]);
sleep(5);
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
🙋🏼‍♂| اهلا بك عزيزي 
🔬| تم فحص جهاتك المضافة
🗃| بواسطة » @$userrr
🎟| عدد الجهات المضافة » *".$asa[ sss ][$chat_id][$from_id]."*
➖
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
if($text == "جهاتيي" or $text == "جهاتي" and $asa['sss'][$chat_id][$from_id] > 0){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
🙋🏼‍♂| اهلا بك عزيزي 
🔬| تم فحص جهاتك المضافة
🗃| بواسطة » @$userrr
🎟| عدد الجهات المضافة » *".$asa[ sss ][$chat_id][$from_id]."*
➖
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
 
if($message and $tc == "supergroup"){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
$game = json_decode(file_get_contents('game.json'),true);
$from_user = $message->from->username;
$from_name = $message->from->first_name;
$get_game = file_get_contents("game.txt");
$game1 = explode("\n",$get_game);
 
if($message and $type == "supergroup"){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
$game = json_decode(file_get_contents('game.json'),true);
$from_user = $message->from->username;
$from_name = $message->from->first_name;
$get_game = file_get_contents("game.txt");

$chatid = $update->edited_message->chat->id;
$fromid = $update->edited_message->from->id;
$edit = json_decode(file_get_contents('edit.json'),true);
$editMessage = $update->edited_message;
if($editMessage){
$edit['edit'][$chatid][$fromid] = ($edit['edit'][$chatid][$fromid]+1);
file_put_contents('edit.json', json_encode($edit));
}
if($edit['edit'][$chat_id][$from_id] == null){
$editt = 0;
}else{
$editt = $edit['edit'][$chat_id][$from_id];
}
if($text == 'سحكاتي'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>'سحكاتك الان | '.$editt,
]);
}

if($msgs['msgs'][$chat_id][$from_id] > 3000){
$Free3 = array("1000% ","999% ","100% ",);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$Free3 = array('80% ','84% ',);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$Free3 = array('18% ','20% ','6% ',);
$Free4 = array_rand($Free3,1);
}if($msgs['msgs'][$chat_id][$from_id] > 200){
$Free3 = array("40% ","43% ",);
$Free4 = array_rand($Free3,1);
}
$Free1 = array("نورت المجموعة","ماشاء الله نورت","ياسين والحلا","عليك نور","صورة طيبة","لاتغيرها حلوة","من فين اخذتها","اوف مااحلاها","ليست حلوة  ","غيرها دخيلك","حطمت القلوب","عمري انت","صدقني روعه","صارت قديمة","ممكن صورة","الله عليك","افضل صورة","ماتعجبني","رووووعاتك","والله قووووه ","Very Nice ","لاتكثر الايدي","ذوقك فن");
$Free2 = array_rand($Free1,1);
$mid = file_get_contents("mid.txt");

if($user){
$usr = "@$user";
}if($file_id == NULL){
$photo = "🚸╽ لاتمتلك صوره في الحساب ⊰•";
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط  ',  'متفاعل ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('غير متفاعل ', 'ضعيف ',);
$JJ119 = array_rand($active,1);
}
if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}if($status == "creator"){
$info = "منشى المجموعة 🕵";
}if($status == "administrator"){
$info = "مشرف المجموعة 👮";
}if(in_array($from_id,$admin_user) ){
$info = "ادمن في البوت 💂";
}if(in_array($from_id,$manger) ){
$info = "مدير المجموعة 🙇";
}if(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}if(in_array($from_id,$developer) ){
$info = "مطور اساسي 👷";
}if($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$info = "عضو فقط 😿";
}
if(!$username){
$casss = "لايوجد معرف";
}elseif($username){
$casss = "$username";
}
if(!$rep && $text=="ايدي"){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "✖️") {
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
  var_dump(
bot("sendphoto",[
  "chat_id"=>$chat_id,
  "caption"=>"*👤 | اســمـك • $first_name 
🎟 | ايديــك •* `$from_id` * 
🎫 | معـرفك • *[$usr]*
📡 | رتبتــك • $info 
⭐️ | تفاعلك • $active[$JJ119] $Free3[$Free4] 
📸 | عدد صـورك • $count 
📝 | سحكاتك • $editt 
💬 | رسـائلك • ".$msgs[ msgs ][$chat_id][$from_id]." 
🛂 | جهاتك •  ".$asa[ sss ][$chat_id][$from_id]." 
➖*",
"photo"=>"$file_id",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]));
  }
}
if(!$re and in_array($text,$command) and $file_id == null){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "✖️"){
bot("sendmessage",[
  "chat_id"=>$chat_id,
  "text"=>"*$photo**
👤 | اســمـك • $first_name 
🎟 | ايديــك •* `$from_id` * 
🎫 | معـرفك • *[$usr]*
📡 | رتبتــك • $info 
⭐️ | تفاعلك • $active[$JJ119] $Free3[$Free4] 
📸 | عدد صـورك • $count 
📝 | سحكاتك • $editt 
💬 | رسـائلك • ".$msgs[ msgs ][$chat_id][$from_id]." 
🛂 | جهاتك •  ".$asa[ sss ][$chat_id][$from_id]." 
➖*
",
  'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
}}
$reply = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$API_KEY = API_KEY;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$re_id);
$info = json_decode($get, true);
$re_rou = $info['result']['status'];
$namesaeedh = $update->message->reply_to_message->from->first_name;
$usersaeedh = $update->message->reply_to_message->from->username;
$idsaeedh = $update->message->reply_to_message->from->id;

if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}if($status == "creator"){
$info = "منشى المجموعة 🕵";
}if($status == "administrator"){
$info = "مشرف المجموعة 👮";
}if(in_array($from_id,$admin_user) ){
$info = "ادمن في البوت 💂";
}if(in_array($from_id,$manger) ){
$info = "مدير المجموعة 🙇";
}if(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}if(in_array($from_id,$developer) ){
$info = "مطور اساسي 👷";
}if($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$info = "عضو فقط 😿";
}
if(!$username){
$casss = "لايوجد معرف";
}elseif($username){
$casss = "$username";
}

if($reply and $text == "كشف"){
if($re_id == $sudo)
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
*🤵🏼| الاسم » { $namesaeedh }
🎫| الايدي » {*`$idsaeedh`*}
🎟| المعرف » { @$usersaeedh }
⭐️| الرتبه » $info
👥️| نوع الكشف » بالرد
➖*
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text == "كشف"){
if(in_array($re_id,$dev))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
*🤵🏼| الاسم » { $namesaeedh }
🎫| الايدي » {*`$idsaeedh`*}
🎟| المعرف » { @$usersaeedh }
⭐️| الرتبه » $info
👥️| نوع الكشف » بالرد
➖*
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text == "كشف"){
if(in_array($re_id,$manger) and !in_array($re_id,$dev))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
*🤵🏼| الاسم » { $namesaeedh }
🎫| الايدي » {*`$idsaeedh`*}
🎟| المعرف » { @$usersaeedh }
⭐️| الرتبه » $info
👥️| نوع الكشف » بالرد
➖*
",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text ==  "كشف"){
if($re_rou == "creator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
*🤵🏼| الاسم » { $namesaeedh }
🎫| الايدي » {*`$idsaeedh`*}
🎟| المعرف » { @$usersaeedh }
⭐️| الرتبه » $info
👥️| نوع الكشف » بالرد
➖*",
 'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text ==  "كشف"){
if($re_rou == "administrator" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
*🤵🏼| الاسم » { $namesaeedh }
🎫| الايدي » {*`$idsaeedh`*}
🎟| المعرف » { @$usersaeedh }
⭐️| الرتبه » $info
👥️| نوع الكشف » بالرد
➖*",
 'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text ==  "كشف"){
if(in_array($re_id,$getCCmember) and !in_array($re_id,$manger) and !in_array($re_id,$dev) and $re_rou != "administrator")
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
*🤵🏼| الاسم » { $namesaeedh }
🎫| الايدي » {*`$idsaeedh`*}
🎟| المعرف » { @$usersaeedh }
⭐️| الرتبه » $info
👥️| نوع الكشف » بالرد
➖*",
 'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
if($reply and $text ==  "كشف"){
if($re_rou == "member" and $re_id != $sudo and !in_array($re_id,$dev) and !in_array($re_id,$manger) and !in_array($re_id,$getCCmember))
bot('sendmessage',['chat_id'=>$chat_id,'text'=>"
*🤵🏼| الاسم » { $namesaeedh }
🎫| الايدي » {*`$idsaeedh`*}
🎟| المعرف » { @$usersaeedh }
⭐️| الرتبه » $info
👥️| نوع الكشف » بالرد
➖*",
 'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}


if($text=="رتبتي" ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"*
🎫¦ ايديك » *`$from_id`*

📡¦ رتبتك » $info
➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}

 