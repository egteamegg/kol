<?php
ob_start();
$API_KEY = "1788543897:AAEx7OIh9RZpBJYwHERtMElqhx181fjJONw";//توكنك
$kingZip14 = "https://dont-care.org/kings";
$buy = "@S0OON";// معرفك
$sudo = "1136754989";//ايديك
$admin = "$sudo";// ماتغير شي
$idBot = "1788543897";// ايدي بوتك
$admmm = $sudo;//ماتغير شي
$Dev = array("$sudo","");
$userrr = "KiNgSsS_BoT";// معرف بوتك بدون @
$kindi = "1788543897:AAEx7OIh9RZpBJYwHERtMElqhx181fjJONw"; #توكن بوت الاشتراك الاجباري
date_default_timezone_set('Asia/Damascus');
$get_toke = file_get_contents('info.php');
$get_token = explode("\n", $get_toke);
$json_info = json_decode($url_info);
$userr = $json_info->result->username;
$bot_id = $json_info->result->id;
$url_info = file_get_contents("https://api.telegram.org/bot$get_token[0]/getMe");

define('API_KEY',$API_KEY);
function bot($method,$TH3SS=[]){
$TH3SS = http_build_query($TH3SS);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$TH3SS";
$TH3SS = file_get_contents($url);
return json_decode($TH3SS);}

$json_info = json_decode($url_info,true);
$usernamebot = $json_info['result']['username'];
$bot_id = $json_info['result']['id'];
$admmm = "$sudo";
$bgh = file_get_contents("$re_id.txt");
$Dev = array("$admmm","1024968903");// حط ايدي مطور ثاني بدل الاصفار
$channel = "KINGS_TEAM000";
$token = API_KEY;

$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
@$text  = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
/*===== dev ~ @S0OON =====*/
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
/*===== dev ~ @S0OON =====*/
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
/*===== dev ~ @S0OON =====*/
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$you = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
/*===== dev ~ @S0OON =====*/
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);

$idBot = $idBot;
$infos = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"), true);
$bot = $infos['result']['status'];
$can_bot_chang_info = $infos['result']['can_change_info'];
$can_bot_delete =  $infos['result']['can_delete_messages'];
$can_bot_restrict = $infos['result']['can_restrict_members'];
$can_bot_invite = $infos['result']['can_invite_users'];
$can_bot_pin = $infos['result']['can_pin_messages'];
$can_bot_promote = $infos['result']['can_promote_members'];
@$filterget = $settings["filterlist"];

/*===== فاكشن =====*/
function SendMessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
 function Forward($berekoja,$azchejaei,$kodompayam)
{
bot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
function  getUserProfilePhotos($token,$from_id) {
  @$url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
  @$result = file_get_contents($url);
  @$result = json_decode ($result);
  @$result = $result->result;
  return $result;
}
if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
// info developers //
$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers."*➺*".$developers_infos."\n➖➖➖➖➖➖➖\n📨¦ الٱيـديـٱت :\n" ."*➺*`".$developers_info . "`";
// info mangers //
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
// info admins //
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
// info mmaz //
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
// folders auto //
mkdir("data");
mkdir("data/developers");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");
################
if($text == "/start" or $text == "تفعيل" or $text == "تعطيل" or $text == "تفعيل" or $text == "تعطيل" or $text == "الاوامر" or $text == "سورس" or $text == "السورس" or $text == "ايدي"){
$ali = "@TH3NK"; #معرف قناتك
$join = file_get_contents("https://api.telegram.org/bot".$kindi."/getChatMember?chat_id=$ali&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️ ¦ مرحبا بگ عزيزي 🙇‍♂،
👾 ¦ لا يمڪنـك استخدام البوت ،
📟 ¦ عليك الإشتراگ في قناة البوت ،
🖲 ¦ القناة ~⪼ $ali ،
√",
]);return false;}
bot('sendMessage',['chat_id'=>$chat_id, 'text'=>"",'reply_to_message_id'=>$message->$message_id,]);}
//////////////////////////////
 $statjson = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
if(in_array($from_id,$Dev)){
$info = "المطور الاساسي 👷";
}elseif($status == "creator"){
$info = "المنشى 🕵";
}elseif($status == "administrator"){
$info = "المشرف العام 👮";
}elseif(in_array($from_id,$admin_user) ){
$info = "ادمن المجموعه 💂";
}elseif(in_array($from_id,$manger) ){
 $info = "مدير المجموعة 🙇";
}elseif(in_array($from_id,$mmyaz) ){
 $info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
 $info = "مطور البوت 👷";
}elseif($status == "member" ){
$info = "عضو فقط 😿";
}
if(!$re_user){
$re_user = "لايوجد معرف";
}elseif($re_user){
$re_user = "@$re_user";
}
//////////♥////////♥
 $date = date('h:i:s'); $d = date('A');
$aa =preg_replace('/AM/', 'صباحا', $d);$aa =preg_replace('/PM/', 'مساء', $d);
date_default_timezone_set('Asia/Baghdad');
$times = date('h:i:s');
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (979 * 11 + 1 + 30);
$blod1 = "http://api.telegram.org/bot".$Token."/getChatMembersCount?chat_id=$chat_id";
$blod2 = file_get_contents($blod1);
$blod3 = json_decode($blod2);
$blod4 = $blod3->result;
$title = $message->chat->title;
/////////♥///////// times//////////
if($re and $text == "رفع مطور" and $re_id !=$id_Bot and  in_array($from_id,$Dev) and !in_array($re_id,$developer)){
			file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
			file_put_contents("data/developers/developers.txt",'[@'.$re_user ."]". "\n " , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت ترقيته ليصبح مطور 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مطور"  and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت ترقيته مطور مسبقا 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if(in_array($from_id,$Dev)){
if($re and $text == "تنزيل مطور" || $text == "تنزيل المطور"  and in_array($re_id,$developer)){
	$re_id_info = file_get_contents("data/developers/$chat_id.txt");
	$devr = file_get_contents("data/developers/$chat_id/developer.txt");
	$devr1 = explode("             \n",$devr);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace("~» (" . "@". $re_user .") " . "»" . "  (". $re_id .") .","",$devr1);
	file_put_contents("data/developers/developer.txt",$str);
			file_put_contents("data/developers/developers.txt",$str);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"*
👤 | العضو »  $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت تنزيله من المطورين 👩‍🔧
➖️*
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "تنزيل مطور"  and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت ازالته من المطورين سابقا 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if($text == "مسح المطورين" and   in_array($from_id,$Dev)){
			file_put_contents("data/developers/developer.txt"," ");
			file_put_contents("data/developers/developers.txt"," ");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info 
📛¦ تم مسح المطورين\n✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين"  and   in_array($from_id,$Dev) and $developers_info != NULL and $developers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*👨🏽‍💻¦ قائمه الـمـطـوريـن :*\n\n*➺* ❲* معرفك باليز *❳ *»* *❲* `$sudo` *❳*\n➖➖➖➖➖➖➖\n📨¦ الـمعرفـٱت :\n$list_developers\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المطورين" and   in_array($from_id,$Dev) and $developers_info == NULL || $developers_info == " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*👨🏽‍💻¦ قائمه الـمـطـوريـن :*\n\n*➺* ❲* معرفك باليز *❳ *»* *❲* `$sudo` *❳*\n➖➖➖➖➖➖➖\n📨¦ لٱ يـوجد مطورين حٱليا",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)){
if($re and $text == "رفع مدير" || $text == "رفع المدير"  and !in_array($re_id,$manger)){
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت ترقيته ليصبح مدير 👩‍🔧
➖️*
",'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مدير" || $text == "رفع المدير" || $text == "رفع منشئ" || $text == "رفع المنشئ" and in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت ترقيته مدير مسبقا 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المدراء" ){
			file_put_contents("data/manger/$chat_id.txt","");
			file_put_contents("data/manger/$chat_id.txt","");
			file_put_contents("data/manger/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info
📛¦ تم مسح المدراء\n✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تم تنزيله من قائمة المدراء 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" || $text == "تنزيل منشئ" || $text == "تنزيل المنشئ" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت تنزيله من المدراء مسبقا 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المدراء" || $text == "قائمه المدراء" and $mangers_info != NULL and $mangers_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*📋¦ قائمه المدراء :*
$mangers_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

if($text == "المدراء" ||  $text == "قائمه المدراء" and $mangers_info == NULL || $mangers_info == " " || $mangers_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*📋¦ قائمه المدراء :
📛| Not Director ~⪼ لا يوجد مدراء !*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "رفع ادمن"  and !in_array($re_id,$admin_user)){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت ترقيته ليصبح ادمن 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع ادمن" || $text == "رفع ادمن" || $text == "رفع منشئ"  and in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت ترقيته ادمن مسبقا 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح الادمنيه" ){
			file_put_contents("data/admin_user/$chat_id.txt","");
			file_put_contents("data/admin_user/$chat_id.txt","");
			file_put_contents("data/admin_user/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info
📛¦ تم مسح الادمنيه
✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل ادمن" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت تنزيله من الادمنية 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت تنزيله من الادمنية مسبقا 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز"  and !in_array($re_id,$mmyaz)){
			file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت ترقيته عضوا مميز 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مميز"  and in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>" 
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت ترقيته عضوا مميز سابقا 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المميزين" ){
			file_put_contents("data/mmyaz/$chat_id.txt","");
			file_put_contents("data/mmyaz/$chat_id.txt","");
			file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂️¦ أهلا عزيزي $info
📛¦ تم مسح المميزين
✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}

if($re and $text == "تنزيل مميز"   and in_array($re_id,$mmyaz)){
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت تنزيله من قائمة المميزين 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤 | العضو » $re_user
🎫 | الايدي » *`$re_id`*
🛠 | تمت تنزيله من المميزين سابقا 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" || $text == "قائمه المميزين" and $mmyazs_info != NULL and $mmyazs_info != " "){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*📋¦ قائمه المميزين :*
$mmyazs_infos\n",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "المميزين" ||  $text == "قائمه المميزين" and $mmyazs_info == NULL || $mmyazs_info == " " || $mmyazs_info == ""){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*📋¦ قائمه المميزين :
📛| Not Director ~⪼ لا يوجد مميزين !*",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
/////////♥////////// ترفيه
if($text == "ترقية ملك"  || $text == "رفع ملك" and in_array ($from_id,$Dev)) {
 $re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*
👤| العضو » *[$re_user](tg://user?id=$re_id)*
🎫| الايدي » *`$re_id`*
🛠| تم ترقيته ملك المجموعة 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$message_idd = $update->message->message_id;
if($text == "ترقية رئيس"  || $text == "رفع رئيس" and in_array ($from_id,$Dev)) {
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤| العضو » *[$re_user](tg://user?id=$re_id)*
🎫| الايدي » *`$re_id`*
🛠| تم ترقيته رئيس المجموعة 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

$message_idd = $update->message->message_id;
if($text == "ترقية وزير"  || $text == "رفع وزير" and in_array ($from_id,$Dev)) {
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤| العضو » *[$re_user](tg://user?id=$re_id)*
🎫| الايدي » *`$re_id`*
🛠| تم ترقيته وزير المجموعة 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$message_idd = $update->message->message_id;
if($text == "ترقية شرطي"  || $text == "رفع شرطي" and in_array($from_id,$Dev)) {
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤| العضو » *[$re_user](tg://user?id=$re_id)*
🎫| الايدي » *`$re_id`*
🛠| تم ترقيته شرطي المجموعة 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$message_idd = $update->message->message_id;
if($text == "رفع مساعد"  || $text == "ترقية مساعد" and in_array ($from_id,$Dev)) {
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤| العضو » *[$re_user](tg://user?id=$re_id)*
🎫| الايدي » *`$re_id`*
🛠| تم ترقيته مساعد المجموعة 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

$message_idd = $update->message->message_id;
if($text == "رفع امير"  || $text == "رفع اميره" and in_array ($from_id,$Dev)) {
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤| العضو » *[$re_user](tg://user?id=$re_id)*
🎫| الايدي » *`$re_id`*
🛠| تم ترقيته امير المجموعة 👩‍💼
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

$message_idd = $update->message->message_id;
if($text == "رفع مؤدبه"  || $text == "رفع مزه" and in_array ($from_id,$Dev)) {
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤| العضو » *[$re_user](tg://user?id=$re_id)*
🎫| الايدي » *`$re_id`*
🛠| تم ترقيته حكيم المجموعة 👩‍🔧
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}

 $message_idd = $update->message->message_id;
if($text == "رفع مقوت"  || $text == "ترقية مقوت" and in_array($from_id,$Dev)) {
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤| العضو » *[$re_user](tg://user?id=$re_id)*
🎫| الايدي » *`$re_id`*
🛠| تم ترقيته ليصبح افضل مقوت 🤦‍♂
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
$message_idd = $update->message->message_id;
if($text == "رفع مجنون"  || $text == "رفع مجنونه" and in_array($from_id,$Dev)) {
$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*
👤| العضو » *[$re_user](tg://user?id=$re_id)*
🎫| الايدي » *`$re_id`*
🛠| تم ترقيته ترشيحه للمجانين 👩‍🔬
➖️*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
##################
if( $text =="الادمنية"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg."\n"."l "."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
المالك  $owner | @$owner2
 ﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎قائمة المشرفين
$msg
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎قائمة الادمنية بالبوت
$admin_users_infos
",
'reply_to_message_id'=>$message_id,

'parse_mode'=>"MarkDown",
 ]);
	}
}
if($settings["lock"]["link"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
    ]);
  }
}
}
// lock photo
if($settings["lock"]["photo"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->photo){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
/*
كود حذف انلاين يعمل لبوتات الحماية
@Bots_Syria
*/
$inline = json_decode(file_get_contents('php://input'),true);
if($settings["lock"]["inline"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if(isset($inline['message']['reply_markup']['inline_keyboard'][0][0]['text'])){
bot('deleteMessage',[
'chat_id'=>$message->chat->id,
'message_id'=>$message->message_id
]);
}}}
// gif
if($settings["lock"]["gif"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->document){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// document
if($settings["lock"]["document"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->document){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// video
if($settings["lock"]["video"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->video){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
if ($settings["lock"]["ar"] == "مقفول️"){
if (strstr($text,"ض") == true  or strstr($text,"ص") == true or strstr($text,"ق") == true  or  strstr($text,"ف") == true   or strstr($text,"غ") == true or  strstr($text,"ع") == true  or strstr($text,"ه") == true or strstr($text,"خ") == true  or  strstr($text,"ح") == true   or strstr($text,"ج") == true or strstr($text,"ش") == true  or strstr($text,"س") == true or strstr($text,"ي") == true  or  strstr($text,"ب") == true   or strstr($text,"ل") == true or  strstr($text,"ا") == true  or strstr($text,"ت") == true or strstr($text,"ن") == true  or  strstr($text,"م") == true   or strstr($text,"ك") == true or strstr($text,"ظ") == true or strstr($text,"ط") == true  or  strstr($text,"ذ") == true   or strstr($text,"د") == true or  strstr($text,"ز") == true  or strstr($text,"ر") == true or strstr($text,"و") == true  or  strstr($text,"ة") == true   or strstr($text,"ث") == true or strstr($text,"ؤ") == true  or strstr($text,"ء") == true or strstr($text,"ى") == true  or  strstr($text,"ئ") == true   or strstr($text,"آ") == true or  strstr($text,"إ") == true  or strstr($text,"أ") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["en"] == "مقفول️"){
if (strstr($text,"q") == true  or strstr($text,"w") == true or strstr($text,"e") == true  or  strstr($text,"r") == true   or strstr($text,"t") == true or  strstr($text,"y") == true  or strstr($text,"u") == true or strstr($text,"i") == true  or  strstr($text,"o") == true   or strstr($text,"p") == true or strstr($text,"a") == true  or strstr($text,"s") == true or strstr($text,"d") == true  or  strstr($text,"f") == true   or strstr($text,"g") == true or  strstr($text,"h") == true  or strstr($text,"j") == true or strstr($text,"k") == true  or  strstr($text,"l") == true   or strstr($text,"z") == true or strstr($text,"x") == true or strstr($text,"c") == true  or  strstr($text,"v") == true   or strstr($text,"b") == true or  strstr($text,"n") == true  or strstr($text,"m") == true or strstr($text,"Q") == true  or  strstr($text,"X") == true   or strstr($text,"C") == true or strstr($text,"F") == true  or strstr($text,"G") == true or strstr($text,"H") == true  or  strstr($text,"A") == true   or strstr($text,"L") == true or  strstr($text,"O") == true  or strstr($text,"P") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
// edit 
if($editgetsettings["lock"]["edit"] == "مقفول"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $mmyaz && $edit_for_id != $developer){
if ($update->edited_message->text){  
bot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
  }
}
}

// contact
if ($settings["lock"]["contact"] == "مقفول"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
$edit_media  = $update->edited_message->message_id;
$edit_chat_id_media = $update->edited_message->chat->id;
$edit_medias  = $update->edited_message->text;
$video_media = $update->edited_message->video;
$voice_media = $update->edited_message->voice;
$photo_media = $update->edited_message->photo;
$document_media = $update->edited_message->document;
$audio_media = $update->edited_message->audio;
$location_media = $update->edited_message->location;

if ($editgetsettings["lock"]["editmd"] == "مقفول"){
	if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $mmyaz && $edit_for_id != $developer){
if(edit_medias || $photo_media || $document_media || $video_media || $voice_media || $audio_media || $location_media || preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$edit_medias) ){
bot('deleteMessage',[
'chat_id'=>$edit_chat_id_media,
'message_id'=>$edit_media,
]);
}
}
}

// tag
if ($settings["lock"]["tag"] == "مقفول"){
if (strstr($text ,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}// username 
if ($settings["lock"]["username"] == "مقفول"){
if (strstr($text ,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// audio
if ($settings["lock"]["audio"] == "مقفول"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// voice 
if ($settings["lock"]["voice"] == "مقفول"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if ($settings["lock"]["markdown"] == "مقفول"){
if($update->message->entities){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}


if($settings["lock"]["bot"] == "مقفول"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "مفتوح"){
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
  }
else
{
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
   bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$from_id
  ]);
}
}
}
// sticker is_sticker
if ($settings["lock"]["sticker"] == "مقفول"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if ($settings["lock"]["is_sticker"] == "مقفول"){
if($update->message->sticker->is_sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// forward
if ($settings["lock"]["forward"] == "مقفول"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// fosh 
if ($settings["lock"]["fosh"] == "مقفول"){
if (strstr($text ,"كس") == true  or strstr($text ,"ذب") == true or strstr($text ,"اير") == true  or  strstr($text ,"شرموطة") == true   or strstr($text ,"الاسد") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// muteall
if ($settings["lock"]["mute_all"] == "مقفول"){
if($update->message){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
// replay
if ($settings["lock"]["reply"] == "مقفول"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// tg
if ($settings["lock"]["tgservic"] == "مقفول"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// text
if ($settings["lock"]["text"] == "مقفول"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// video note
if ($settings["lock"]["video_msg"] == "مقفول"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}


if ($settings["lock"]["iduser"] == "✔"){
$iduserr = $update->message->text;
if($iduserr == "ايدي"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*
ID » *`$from_id`**",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
}}}}
if($settings["information"]["add"] == "مقفول") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if($settings["information"]["add"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){
$youadding = $settings["addlist"]["$from_id"]["add"];
$setadd = $settings["information"]["setadd"];
$addtext = $settings["addlist"]["$from_id"]["addtext"];
$msg = $settings["information"]["lastmsgadd"];
            if($youadding < $setadd){
			if($addtext == false){
            bot('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"
🙍‍♂╽❯ العضو [$from_id](tg://user?id=$from_id) 
📡╽❯ قم بإضافة ⊱ $setadd ⊰ للتكلم
➺",'parse_mode'=>"markdown",'disable_web_page_preview'=>true
            ]);
            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsgadd"]="$msgplus";
$settings["addlist"]["$from_id"]["addtext"]="true";
$settings["addlist"]["$from_id"]["add"]=0;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
#############♥♥♥♥####$#
include "الايدي.php";
include "التقييد.php";
include "الاوامر.php";
include "nizks.php";
include "تعيين_الايدي.php";
include "الكلايش.php";
include "المطور.php";
include "الحظر.php";
include "الكتم.php";
include "التحقق.php";

include "الالعاب.php";
include "زخرفتي.php";
#######♥♥♥♥♥♥#######
//  game
if($settings["lock"]["game"] == "مقفول"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// location
if ($settings["lock"]["location"] == "مقفول"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
function check_filter($str){
	global $filterget;
	foreach($filterget as $d){
		if (mb_strpos($str, $d) !== false) {
			return true;
		}
	}
}
// filter
if($settings["filterlist"] != false){
if ($status != 'creator' && $status != 'administrator' ) {
$check = check_filter("$text");
if ($check == true) {
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    ]);
}
}
}

if( $text =="قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📌¦ قائمة کلمات الممنوعة في مجموعة
〰〰〰〰〰〰〰〰〰〰〰〰
$result",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif (strpos($text , "فلتر ") !== false or strpos($text , "امنع") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text1 = str_replace(['فلتر ','امنع'],'',$text);
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم منع الكلمة » *$text1* 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text1";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔘┋لم يتم تفعيل البوت في مجموعتك⁉️┋ يرجى تفعيل البوت في المجموعة
☑️┋يمكنك تفعيل البوت مجانا م̷ـــِْن خلال ارسال كلمة { • تفعيل • }",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( strpos($text  , "الغاء فلتر") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$text1 = str_replace(['الغاء فلترة'],'',$text );
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم الغاء المنع لـ » *$text1* 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text1,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif( $text =="مسح قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم مسح قائمة المنع
➺
",'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// setrules
if($settings["information"]["step"] == "setrules"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text ");
if($plus < 600) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم وضع القوانين
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["rules"]="$text";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
❗️ لا يمكنك وضع اكثر من ⊱ *600* ⊰ حرف
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}
// lock channel 
if($settings["information"]["lockchannel"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
			if($channeltext == false){
            bot('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"
🙍‍♂╽❯ العضو [$from_id](tg://user?id=$from_id) 
📡╽❯ اشترك هنا للتحدث $usernamechannel
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
            ]);
            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
if($settings["information"]["step"] == "setchannel"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($text  , '@') !== false) {
$plus = mb_strlen("$text ");
if($plus < 25) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📌┊❯ تم وضع ⊱ @$text ⊰
➺
👮‍♂╽❯ انتبه للبوت ان يكون مشرف
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["setchannel"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⚠️┇خطا المعرف غير مسموح به",
  'reply_to_message_id'=>$message_id,               
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⚠️┇خطأ يجب ان تضع @ للمعرف  
🔰┇مثال • @$channel •√
",'reply_to_message_id'=>$message_id,
 ]);
}
}
}
}
// setwelcome
if($settings["information"]["step"] == "setwelcome"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text ");
if($plus < 200) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم وضع الترحيب 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["textwelcome"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️¦ يجب ان يكون العدد بين ⊱ *1* إلى *200* ⊰
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     
 ]);
}
}
}
}
// banall
elseif ($tc == 'private'){ 
if(in_array($from_id, $user["banlist"])) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🛑 لقد تم حظرك م̷ـــِْن البوت

❇️ ارجو ان لٱ تقوم بارسال رسالة اخرى",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){ 
if(in_array($from_id, $user["banlist"])) {
		bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
      ]);
}
}
// sup
if($user["userjop"]["$from_id"]["file"] == "sup"&& $tc == "private"){   
if ($text  != "🔙 رجوع") {	
bot('ForwardMessage',[
'chat_id'=>$Dev[0],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
			bot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"✔️ تم ارسال اقتراحك شكرا لك",
	]);	
	}
	}

///////////////////////////////
// promote
elseif($rt && $text =="رفع مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » $usew
🎫¦ الايدي » **`$re_id`**
🛠¦ تم ترقيته مشرف للمجموعه
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$re_id,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>false
]);
	}
}
elseif($rt && $text =="تنزيل مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👤¦ العضو » $usew
🎫¦ الايدي » **`$re_id`**
🛠¦ تم تنزيله من المشرفين
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
	}
}
// admin list

if ($settings["information"]["welcome"] == "مقفول"){
if($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
$text1 = $settings["information"]["textwelcome"];
$newmemberuser = $update->message->new_chat_member->username;
$name = $update->message->new_chat_member->first_name;
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$text1");
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$text",
'reply_to_message_id'=>$message_id,
	]);
}
}
}
// lock character
if($settings["lock"]["lockcharacter"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$plus = mb_strlen("$text ");
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
if ($pluscharacter < $plus or $plus < $downcharacter) {   
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}
###############
$date = date('h:i:s'); $d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$times = date('h:i:s');
$year = date('Y');
$month = date('n');
$day = date('j');
$time = time() + (979 * 11 + 1 + 30);
$JJ = "http://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$chat_id";
$JJ1 = file_get_contents($JJ);
$JJ11 = json_decode($JJ1);
$JJ111 = $JJ11->result;
$JJ = "http://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$chat_id";
$JJ1 = file_get_contents($JJ);
$JJ11 = json_decode($JJ1);
$JJ111 = $JJ11->result;
$title = $message->chat->title;
$l = $export->result;
if($text  == "تفعيل" ) {
if ( $status == 'creator' or $status == 'administrator'){
$export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
$l = $export->result;
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"",
'parse_mode'=>"MARKDOWN",
"message_id"=>$message_id,
]);}}
if($text  == "تفعيل" ) {
if ( $status == 'creator' or $status == 'administrator'){
$url = file_get_contents("https://api.telegram.org/bot$token/getChatMembersCount?chat_id=$chat_id");
$getchat = json_decode($url, true);
$howmember = $getchat["result"];
$add = $settings["information"]["added"];
$dataadd = $settings["information"]["dataadded"];
if ($add == true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
📮¦ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
👨🏽‍🔧¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ بآلبوت مسبقا ✓
» $dataadd",
  'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
['text'=>"$namebot 🌚",'url'=>"https://t.me/S0OON"]
	  ],
   ]
   ])
     ]); 
}
else
{
if($howmember >= 1){
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"📮¦ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
👨🏽‍🔧¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ آلگروب بآلبوت 

ID » $chat_id
▂",
'reply_to_message_id'=>$message_id,
		
 ]); 
		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"
💬┇ اهلا بك عزيزي المطور الاساسي 
☑┇ تم تفعيل مجموعة جديده 
  ٴ━━━━━━━━━━*
💠┇ معلومات المجموعه
👤┇ الاسم » $title
📬┇ الايدي » $chat_id
📚┇ عدد الاعضاء » $JJ111
❗️┇رابط المجموعهہ »↯↯↯
ـ $l
•هذا رابط وهميّ شغال لمدةهہ•
  ٴ━━━━━━━━━
☑┇ معلومات الي فعل المجموعهہ
🇱🇦┇بواسطة » $name
🎟┇معرفه » [@$user]
⏰┇الساعة :: $times
📆┇التاريخ :: ".date("Y")."/".date("n")."/".date("d")."
", 
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "audio": "مفتوح",
                "gif": "مفتوح",
"inline": "مفتوح",
"is_sticker": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"contact": "مفتوح",
				"location": "مفتوح",
				"game": "مفتوح",
				"editmd": "مفتوح",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"add": "مفتوح",
			"rdodsg": "مقفول",
	        "markdown": "مفتوح",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"en": "مفتوح",
				"ar": "مفتوح",
			"expire": "",
			"textwelcome": "اهلا بك عزيزي",
			"rules": "غير مسجل",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"📍 عدد الاعضاء قليل جدا
➖➖
📌ليس لديك مايكفي م̷ـــِْن الاعضاء على. الاقل عضو واحد 
",
  'reply_to_message_id'=>$message_id,
		  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	 	[
['text'=>"$dataadd",'url'=>"https://t.me/S0OON"]
	  ],
   ]
   ])
     ]); 
}
}
}
}
}
//add
elseif ( $text  == "تفعيل") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$howmember = $getchat["result"];
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("groupslink.txt","➺ " . $namegroup . " » " . $getlinkde . "«" . "\n" , FILE_APPEND);
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"📮¦ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
👨🏽‍🔧¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ آلگروب بآلبوت 
 ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"💬┇ اهلا بك عزيزي المطور الاساسي 
☑┇ تم تفعيل مجموعه جديده 
  ٴ━━━━━━━━━━*
💠┇ معلومات المجموعه
📬┇ الايدي » $chat_id
👤┇ الاسم » $title
📚┇ عدد الاعضاء » $JJ111
❗️┇رابط المجموعهہ » $l
•هذا رابط وهميّ شغال لمدةهہ•
  ٴ━━━━━━━━━
☑┇ معلومات الي فعل المجموعهہ
🇱🇦┇بواسطة » $name
🎟┇معرفه » [@$user]
⏰┇الساعة :: $times
📆┇التاريخ :: ".date("Y")."/".date("n")."/".date("d")."
 ", 
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "audio": "مفتوح",
                "iduser": "مقفول",
                "gif": "مفتوح",
"is_sticker": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "inline": "مفتوح",
                "forward": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"rdodsg": "مقفول",
				"location": "مفتوح",
				"game": "مفتوح",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"add": "مفتوح",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك عزيزي",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"📮¦ تـم تـفـعـيـل الـمـجـمـوعـه ✓️ 
👨🏽‍🔧¦ وتم رفع جمـيع آلآدمـنيهہ‌‌‏ آلگروب بآلبوت 
 ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
//automatic
elseif ($text  == "قفل الكل"  or $text  == "automatic" or $text  == "قفل كل") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم قفل الكل
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    $settings["lock"]["photo"]="مقفول";
		$settings["lock"]["link"]="مقفول";
		$settings["lock"]["username"]="مقفول";
		$settings["lock"]["bot"]="مقفول";
		$settings["lock"]["forward"]="مقفول";
		$settings["lock"]["tgservices"]="مقفول";
		$settings["lock"]["contact"]="مقفول";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}

elseif( $text =="unmute all" or $text =="فتح الكل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم فتح الكل
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mute_all"]="مفتوح";
$settings["lock"]["mute_all_time"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
 $sudo         = $admmm; // ايديك.
$bot_id       = $idBot; // ايدي بوتك .
$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;
mkdir("Fri3nd_s");
$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;
if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🖇¦ اذاعه عام توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id
   ]);
} 
if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}
if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
          ]);
}
if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📤¦ اذاعه عام" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id
          ]);
}
if($text == "اذاعه خاص بالتوجيه" || $text == "⚫️¦ اذاعه خاص توجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $MOhaMMed عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
   ]);
}
if($from_id == $sudo){
if($text == "الاحصائيات" || $text == "📊 الاحصائيات"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"الاحصائيات : 🔰 

▪️¦ عدد المجموعات المفعله : $MoHaMMedd 
📮¦ عدد المشتركين في البوت : $MOhaMMed",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id
]);
}
}
// setwelcome
if (strpos($text  , "وضع ترحيب ") !== false  ) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['وضع ترحيب '],'',$text );
$plus = mb_strlen("$we");
if($plus < 600) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔐| تم وضع الترحيب بنجاح
??| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لقد ارسلت رسالة تحتوي600 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 600 حرف",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);	
}
}
}
elseif ($text == "الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text
",  'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
// welcome enbale and disable
elseif ( $text  == "تفعيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔓| تم تفعيل الترحيب بنجاح
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( $text  == "تعطيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔐| تم تعطيل الترحيب بنجاح
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

########
if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد احذف الحساب" or $text == "ححذف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ⸨ رابط حذف التلكرام ⸩ 🗑
➧  https://telegram.org/deactivate
⸺⸺⸺⸺⸺⸺⸺
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ايديي" or $text == "أيديي"){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"*
🧟‍♂¦ آضـغط على آلآيدي ليتم آلنسـخ

 *@$username ~⪼ (`$from_id`)**",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($can_bot_chang_info == 1){ 
$canchangeinfo = "✅";
}else{
$canchangeinfo = "❌";
}
if($can_bot_delete == 1){ 
$candeletemessages = "✅";
}else{
$candeletemessages = "❌";
}
if($can_bot_restrict == 1){ 
$canrestrictmembers = "✅";
}else{
$canrestrictmembers = "❌";
}
if($can_bot_invite == 1){ 
$caninviteusers = "✅";
}else{
$caninviteusers = "❌";
}
if($can_bot_pin == 1){ 
$canpinmessages = "✅";
}else{
$canpinmessages = "❌";
}
if($can_bot_promote == 1){ 
$canpromotemembers = "✅";
}else{
$canpromotemembers = "❌";
}
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if($text == "فحص البوت" or $text == "كشف البوت" or $text == "فحص"){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
👨‍✈️¦ تم الفحص بنجاح ✓
🤖¦ البوت ادمن وصلاحياته كـ↯
ـ••┉┉┉┉┉┉┉┉┉┉┉••
علامة ✅ يمتلك صلاحية
علامة ❌ لايمتلك صلاحية
ـ••┉┉┉┉┉┉┉┉┉┉••  
🗑¦ حذف الرسائل »  { $candeletemessages } •
👥¦ دعوة مستخدمين »  { $caninviteusers } •
📛¦حظر مستخدمين »  { $canrestrictmembers } •
📌¦ تثبيت الرسائل »  { $candeletemessages } •
⚙¦ تغيير المعلومات »  { $canchangeinfo } •
👨🏻‍💻¦ رفع وتنزيل مشرفين »  { $canpromotemembers } •
🔅¦ـ➖➖➖➖➖
🚨¦ راسلني للاستفسار ↭ ‹ $buy ›
",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$idleft = $update->message->left_chat_member->id;
$idbot = bot('getme',['d'])->result->id;
$sudo = $sudo;
if($update->message->left_chat_member and $idleft==$idbot){
bot("sendMessage",[
"chat_id"=>$sudo,
"text"=>"📛| قام شخص بطرد البوت من المجموعة الاتيه :
🏷| ألايدي : $chat_id
🗯| الـمجموعه : $title
📮| تـم مسح كل بيانات المجموعه بنـجاح
",
'reply_to_message_id'=>$mid,
  'parse_mode'=>'html',
'disable_web_page_preview'=>true,
]);
}
$mid = $message->message_id;
if($message->new_chat_members){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}
if($message->left_chat_member){
bot('DeleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid
]);
}
##############
$message_idd = $update->message->message_id;
if($text == "تحديث" and $from_id == $sudo || in_array($from_id,$Dev)){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎖
🗂¦ تم تحديث الملفات √
🔘¦ للمزيد»* [اضغط هنا](t.me/S0OON)*❕
▂
*",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
if($text =="• تعطيل التواصل ؛ ❎" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل التواصل ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✖");
}
}
if($text =="• تفعيل التواصل ؛ ⚜" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل التواصل ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("openst.txt","✔");
}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl == null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
📮┊ تم ارسال رسالتك لـ المطور ✓
📬┊ معرف المطور » $buy
🖲┊[للمزيد اضغط هنا](t.me/S0OON)",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
               ]
        ])
    ]);
}
}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
$locktwas = file_get_contents("openst.txt");
if($text != "/start" and $Twasl != null and !in_array($from_id,$Dev)){
if($locktwas == "✔"){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$Twasl",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'- تابع قناة السورس ✅','url'=>'https://t.me/S0OON']],
               ]
        ])
    ]);
}
}
}
if($message->reply_to_message->forward_from->id and in_array($from_id,$Dev)){
    bot('sendMessage',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$Dev[0],
        'text'=>"
• تم ارسال رسالتك •",
]);
}
$twasl = file_get_contents("twasl.txt");
if($text=="• جلب رد التواصل ؛ 👻" and $twasl == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد التواصل الحالي` } •

📮┊تم ارسال رسالتك لـ المطور ✓
📬┊معرف المطور » $buy
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/S0OON"]],
]])
]);
}}}
$twasl = file_get_contents("twasl.txt");
if($text=="• جلب رد التواصل ؛ 👻" and $twasl != null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• { `رد التواصل الجديد` } •

$twasl
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/S0OON"]],
]])
]);
}}}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
if ($text == "• تعيين رد التواصل ؛ 💥" or $text == "تعيين رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twassl.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال الرد الان ✓
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "• حذف رد التواصل ؛ 🗑" or $text == "حذف رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم بنجاح حذف كليشه رد التواصل
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $Twassl =="nam" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt",$text); 
file_put_contents("twassl.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الرد بنجاح ✓
🔱✣ اصبح الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
###########
$admin = $sudo;
function kingZip($kingZip1, $kingZip2){
$kingZip4 = realpath($kingZip1);
$kingZip = new ZipArchive();
$kingZip->open($kingZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$kingZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($kingZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($kingZip3 as $kingZip5 => $kingZip6){
if(!$kingZip6->isDir()){
$kingZip7 = $kingZip6->getRealPath();
$kingZip8 = substr($kingZip7, strlen($kingZip4) + 1);
$kingZip->addFile($kingZip7, $kingZip8);
}}
$kingZip->close();
}
function kingZip1($kingZip9, $kingZip10 = 2){
$kingZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$kingZip12=floor((strlen($kingZip9) - 1) / 3);
return sprintf("%.{$kingZip10}f", $kingZip9 / pow(1024, $kingZip12)) . @$kingZip11[$kingZip12];
}
$kingZip15 = json_decode(file_get_contents('php://input'));
$kingZip16 = $kingZip15->message;
$kingZip17 = $kingZip16->text;
$kingZip18 = $kingZip16->message_id;
if($kingZip17 == "📂 نسخه كامله" and $from_id = $sudo){
$Rking = "$admin";
date_default_timezone_set("Asia/Damascus");
$kingZip13 = date("{h-i-s}");
kingZip('', "Backup-$kingZip13.zip");
bot('senddocument',[
'chat_id'=>$Rking,
'document'=>"https://$kingZip14/Backup-$kingZip13.zip",
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
File size : ".kingZip1(filesize("Backup-$kingZip13.zip"))." 🏷",
'reply_to_message_id'=>$kingZip18,
]);
unlink("Backup-$kingZip13.zip");
}
#######
if($text =="السورس" || $text =="سورس"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
*👋│معلومات سورس النيزك ⭐️
–––––––––––––––
📡╿│*[dev new bots](t.me/S0OON)*

🌐│*[lmsat brmgea news](https://t.me/S0OON)*

🛒│*[dev lmsat mtjer](https://t.me/S0OON) *

👨🏻‍✈️╽│*[admin buy](t.me/S0OON)**

",'disable_web_page_preview'=>true,
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id, 
	  'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
 [['text'=>"- تابع قناة المطور ؛ 🌿.",'url'=>"https://t.me/S0OON"]],
   ],
])
]);
}
echo "Errors No found";

