<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);


$id = file_get_contents('id.txt');
if($id == "مقفول"){
$namw = $message->new_chat_member->first_name;
$nam = $message->new_chat_member->last_name;
$idw = $message->new_chat_member->id;
$usw = $message->new_chat_member->username;
$Datauser = $update->callback_query->from->username;
$Dataid = $update->callback_query->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
mkdir("Ali");
mkdir("Ali/$chat_id");
$get = file_get_contents("Ali/$chat_id2/$Dataid.txt");
if($message->new_chat_member){
bot('restrictChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$idw,
]);
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
*👤¦ العضو » *[@$usw]*
🎫¦ الايدي » *[$idw](tg://user?id=$idw)*
🛠¦ تمت تقييدك بواسطة البوت اضغط على زر انا لست روبوت
✓️
*",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"انا لست ربوت.","callback_data"=>"unban-$idw"]],
]
])
]);
file_put_contents("Ali/$chat_id/$from_id.txt",$idw);
}
$Ali = explode('-', $data);
if($data == "unban-$Ali[1]" and $get == $Dataid){
bot('promoteChatMember',[
'chat_id'=>$chat_id2,
'user_id'=>$Ali[1],
'can_send_messages'=>true,
]);
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$update->callback_query->message->message_id,
'text'=>"⚜¦ عزيزي » [@$Datauser] ؛ [$Dataid](tg://user?id=$Dataid).
💘¦ تم الغاء تقيدك بنجاح انت لست روبوت بالفعل.",
'parse_mode'=>"MarkDown",
]);
unlink("Ali/$chat_id2/$Dataid.txt");
}}
elseif( $text =="فتح التحقق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔓| تم فتح التحقق بنجاح
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('id.txt',مقفول);
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
if( $text =="قفل التحقق"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔐| تم قفل التحقق بنجاح
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 file_put_contents('id.txt',مفتوح);
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
