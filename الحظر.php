 <?php

flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
 
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = $sudo;// ايديك
$from_id     = $message->from->id;
$from_user = $message->from->username;
$first_name = $update->message->from->first_name;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$mid = $message->message_id;
$iBadlz = $update->message->reply_to_message->from->id;
$TlllllT = $update->message->reply_to_message->from->username;
mkdir("miss");
mkdir("miss/$chat_id");

$reply = $message->reply_to_message->from->id;
$iBadlz = $update->message->reply_to_message->from->id;
$get_miss = file_get_contents("miss/$chat_id/miss.txt");
$miss = explode("\n",$get_miss);
if($text == "كتم عام" and $reply and !in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
file_put_contents("miss/$chat_id/miss.txt",$iBadlz ."\n",FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*
👤 | العضو » @$TlllllT
🎫 | الايدي » *`$iBadlz`*
🛠 | تم كتمه عام من المجموعة ‍🔧
➖️*
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}if($text == "كتم" and $reply and in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
file_put_contents("miss/$chat_id/miss.txt",$iBadlz ."\n",FILE_APPEND);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*
👤 | العضو » @$TlllllT
🎫 | الايدي » *`$iBadlz`*
🛠 | تم كتمه عام من المجموعة بالفعل 
➖️*
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "كتم عام" and $reply and $JJ117 == "member"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜️¦ المعذرهہ ، ليس لديك صلاحيات الكتم ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text and in_array($from_id, $miss)){
bot("deletemessage",[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
}
if($text == "الغاء كتم العام" || $text == "الغاء الكتم عاام" and $reply and in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
$str = str_replace($iBadlz," ","\n" . $get_miss);
file_put_contents("miss/$chat_id/miss.txt",$str);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"

👤 | العضو » @$TlllllT
🎫 | الايدي » *`$iBadlz`*
🛠 | تم الغاء الكتم عنه بنجاح 👩‍🔧
➖️
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "الغاء كتم العام" || $text == "الغاء الكتم عام" and $reply and !in_array($iBadlz,$miss) and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*
👤 | العضو » @$TlllllT
🎫 | الايدي » *`$iBadlz`*
🛠 | تم رفع الكتم عنه بنجاح 👩‍🔧
➖️*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "الغاء كتم العام" || $text == "الغاء االكتم عام" and $reply and $JJ117 == "member"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜️¦ المعذرهہ ، ليس لديك صلاحيات الغاء الكتم ،!*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}
if($text == "مسح قائمه المكتومين" || $text == "مسح المكتومين" and $from_id == $sudo || $JJ117 =="administrator" || $JJ117 == "creator"){
$str = str_replace(" ", $get_miss);
file_put_contents("miss/$chat_id/miss.txt",$str);
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*📆¦ تم مسح المكتومين بواسطةه »$first_name *
*📎¦ معرفه » *@$user ",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$mid,
]);
}elseif($text == "مسح قائمه المكتومين" || $text == "مسح المكتومين" and $JJ117 == "member"){
bot("sendmessage",[
'chat_id'=>$chat_id,
'text'=>"*⚜️¦ المعذرهہ ، ليس لديك صلاحيات مسح المكتومين ،!*",
'reply_to_message_id'=>$mid,
'parse_mode'=>"MARKDOWN",
]);
}



if($text  == "تفعيل الاعضاء" or $text  == "تفعيل اضافة الاعضاء" or $text  == "تفعيل لاعضاء"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم تفعيل الاعضاء
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
	 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}   
}
	}
}
elseif($text  == "تعطيل الاعضاء" or $text  == "تعطيل اضافة الاعضاء" or $text  == "تعطيل لاعضاء"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم تعطيل الاعضاء
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
	}
}
elseif (strpos($text  , '/setadd ') !== false or strpos($text  , 'وضع الاعضاء') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setadd ','وضع الاعضاء'],'',$text );
if($code <= 20 && $code >= 1){
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم وضع الاضافة »  *$code*
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setadd"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️¦ يجب ان يكون العدد بين ⊱ *1* إلى *20* ⊰",
  'reply_to_message_id'=>$message_id,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);  
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
}
//////////////////
elseif($text  == "/silent"&& $rt or $text  == "silent" && $rt or $text  == "تقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true){
   bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👤¦ العضو » $usew
🎫¦ الايدي » **`$re_id`**
🛠¦ تم تقييده من المجموعة
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⛔️| لايمكنك تقييد » المطورين - الادمنية - المدراء - المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
#############
elseif($text  == "/silent"&& $rt or $text  == "silent" && $rt or $text  == "كتم" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true){
   bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👤| العضو » $usew
🎫| الايدي » **`$re_id`**
🛠| تم كتمه من المجموعة
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⛔️| لايمكنك كتم » المطورين - الادمنية - المدراء - المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
#########






elseif (strpos($text  , "/silent ") !== false && $rt or strpos($text  , "تقييد لمدة") !== false && $rt) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
$we = str_replace(['/silent ','تقييد لمدة'],'',$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"👤¦ العضو » $usew
🎫¦ الايدي » **`$re_id`**
🛠¦ تم تقييده من المشاركة
⌚️╽لـ » *$we* دقائق
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$weplus*60,
         ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"⛔️| لايمكنك تقييد » المطورين - الادمنية - المدراء - المميزين",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
elseif($text  == "/unsilent" && $rt or $text  == "unsilent" && $rt or $text  == "الغاء التقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » $usew
🎫¦ الايدي » **`$re_id`**
🛠¦ تم الغاء تقييده 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text  == "المقيدين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
$result
",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif( $text  == "مسح المقيدين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم مسح المقيدين بنجاح
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}}}
##############
elseif( $rt && $text == "طرد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"*
👤¦ العضو » $usew
🎫¦ الايدي » *`$re_id`*
🛠¦ تم طرده من المجموعه
➺*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⛔️| لايمكنك طرد » المطورين - الادمنية - المدراء - المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 elseif( $rt && $text == "حظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"*
👤¦ العضو » $usew
🎫¦ الايدي » *`$re_id`*
🛠¦ تم حظره من المجموعه
➺*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⛔️| لايمكنك حظر » المطورين - الادمنية - المدراء - المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 elseif( $rt && $text == "الغاء الحظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"👤¦ العضو » [$usew]
🎫¦ الايدي » **`$re_id`**
🛠¦ تم الغاء الحظر بنجاح
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 
 
if($text == "مسح المحظورين"){
file_put_contents("banduser/$chat_id.txt","");
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم مسح قائمة المحظورين 
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
}
if($text == "المحظورين" and $get_Busers != NULL || $get_Busers != ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"👨‍✈️┊اهلا بك عزيزي 🙋🏽‍♂
🔘┊في قائمة الاعضاء المحظورين !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
[$get_Busers]",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
if($text == "المحظورين" and $get_Busers == NULL || $get_Busers == ""){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊لايوجد اعضاء محظورين
➺",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'=>true,
]);
}
