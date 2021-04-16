<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);


if($settings["lock"]["linkk"] == "✔️"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) and $from_id!= 777000){
if (trstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('kickChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"🙋🏼‍♂┇عزيزي [$first_name](tg://user?id=$from_id)

📬┇تم تعطيل نشر الروابط وتم طردك
➺" ,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
}
}

if($settings["lock"]["linkw"] == "✔️"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer)and $from_id!= 777000){
if (strstr($text,"t.me") == true or strstr($text,"telegram.me") == true or strstr($text,"https://") == true or strstr($text,"://") == true or strstr($text,"wWw.") == true or strstr($text,"WwW.") == true or strstr($text,"T.me/") == true or strstr($text,"WWW.") == true or strstr($text,"https://") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"🙋🏼‍♂┇عزيزي [$first_name](tg://user?id=$from_id)

📬┇تم تعطيل نشر الروابط

➺ ",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
}
}
if ($settings["lock"]["forwardr"] == "✔️"){
if($update->message->forward_from || $update->message->forward_from_chat || $update->message->forward_from_chat->is_bot){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer)and $from_id!= 777000){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
]);
 }
}
}
}
if ($settings["lock"]["forwardw"] == "✔️"){
if($update->message->forward_from || $update->message->forward_from_chat || $update->message->forward_from_chat->is_bot){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer)and $from_id!= 777000){
 bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
🙋🏼‍♂┇عزيزي [$first_name](tg://user?id=$from_id)
📬┇تم تعطيل التوجيه
🖲┇بواسطة » الادارة
➺ ",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
 }
}
}
}
if ($settings["lock"]["userr"] == "✔️"){
if (strstr($text,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
bot('restrictChatMember',[
   'user_id'=>$from_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
  ]);
}
}
}
if ($settings["lock"]["userw"] == "✔️"){
if (strstr($text,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) and $from_id!= 777000){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
🙋🏼‍♂┇عزيزي [$first_name](tg://user?id=$from_id)
📬┇تم تعطيل نشر المعرفات
🖲┇بواسطة » الادارة
➺ ",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
]);
}
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم قفل التوجيه بالتقيدبالتقيد. 
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="✔️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔓| تم فتح التوجيه بالتقيد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardr"]="✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}

if($text== "قفل الروابط بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم قفل الروابط بالتقيد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="✔️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔓| تم فتح الروابط بالتقيد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkr"]="✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}

if($text== "قفل الروابط بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم قفل الروابط بالتحذير
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkw"]="✔️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔓| تم فتح الروابط بالتحذير
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkw"]="✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل التوجيه بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم قفل التوجيه بالتحذير
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardw"]="✔️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔓| تم فتح التوجيه بالتحذير
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardw"]="✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم قفل المعرفات بالتحذير
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["userw"]="✔️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المعرفات بالتحذير" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔓| تم فتح المعرفات بالتحذير
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["userw"]="✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم قفل المعرفات بالتقيد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["userr"]="✔️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح المعرفات بالتقييد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔓| تم فتح المعرفات بالتقيد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["userr"]="✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المعرفات بالتقييد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
//-------//
if($text== "قفل البوتات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم قفل البوتات بالطرد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="✔️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔓| تم فتح البوتات بالطرد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["botk"]="✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح البوتات بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل الروابط بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم قفل الروابط بالطرد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="✔️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل الروابط بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "فتح الروابط بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔓| تم فتح الروابط بالطرد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["linkk"]="✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح الروابط بالطرد" ){
if ($tc == 'group' | $tc == 'supergroup'){  
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📡¦ هذا الامر يخص الادمنيه فقط  🚶
",'reply_to_message_id'=>$message_id,
]);
}
}
}
}
if($text== "قفل التوجيه بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم قفل التوجيه بالطرد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardk"]="✔️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح التوجيه بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔓| تم فتح التوجيه بالطرد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["forwardk"]="✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "قفل المعرفات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔐| تم قفل المعرفات بالطرد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["userk"]="✔️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
if($text== "فتح المعرفات بالطرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🔓| تم فتح المعرفات بالطرد
📮| بواسطة ⋙「 [$info](tg://user?id=$from_id) 」

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["userk"]="✖️";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
}
 

