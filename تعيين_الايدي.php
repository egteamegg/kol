<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;
$sudo         = $sudo;
$from_id     = $message->from->id;
$from_user = $message->from->username;
mkdir("LONELY");
$link1      = $ex[6];
$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message    = $update->message;
$message_id = $update->message->message_id;
$re_msgid   = $update->message->reply_to_message->message_id;
$name= $update->message->from->first_name;
$user= $update->message->from->username;
$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];
$get_kick     = file_get_contents("LONELY/kick.txt");
$kick            = explode("\n",$get_kick);
if($text == "تفعيل اطردني" and $JJ117 !="member"){
 file_put_contents("LONELY/kick.txt",$chat_id);
 bot("Sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"*✡️⁞ تم تفعيل امَر اطردني . *",
 'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($text == "تعطيل اطردني" and $JJ117 !="member"){
 file_put_contents("LONELY/kick.txt", " ");
 bot("Sendmessage",[
 'chat_id'=>$chat_id,
 'text'=>"*✡️⁞ تم تعطيل امَر اطردني . *",
 'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
 ]);
 }

if($text =="اطردني" and  $JJ117 == "member" and $from_id != $sudo and in_array($chat_id,$kick)){
 $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('KickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$from_id,
        ]);
        bot('UnbanChatmember',[
            'chat_id'=>$chat_id,
            'user_id'=>$from_id,
            ]);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*لقد تم طردك بنجاح بأمر منك , ارسلت لك رابط المجموعه في الخاص اذا وصلت لك تستطيع الرجوع متى شئت ،🖤🖤*",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
]);
bot('sendmessage',[
    'chat_id'=>$from_id,
    'text'=>"
*🌟| اهلا عزيزي , لقد تم طردك من المجموعه بامر منك ،
🔖| اذا كان هذا بالخطأ او اردت الرجوع للمجموعه : *
*-*$l *.🖤*",
'parse_mode'=>"MARKDOWN",
]);
}

if($JJ117 == "creator" or $JJ117 == "administrator" or $from_id == $sudo)
if($text == "اطردني"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*✡️⁞ لا استطيع طرد المشرفين ، المنشئين ، المطورين . *",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
]);
}
if($text =="اطردني" and  $JJ117 == "member" and $from_id != $sudo and !in_array($chat_id,$kick)){
 bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"*✡️⁞ امر اطردني معطَل . *",
        'parse_mode'=>"MARKDOWN",
        'reply_to_message_id'=>$message->message_id,
        ]);
        }
##########
$z=file_get_contents("z.txt"); 
$admin=$sudo;#ايديك
if($admin){
if($text=="تفعيل الزخرفة"){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"تم تفعيل الزخرفة"
]);
file_put_contents("z.txt","on");
}
if($text=="تعطيل الزخرفة"){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"تم تعطيل الزخرفة"
]);
file_put_contents("z.txt","");
}
} 
if($z=="on"){
$ZhName = str_replace("زخرفة ","",$text); 
if($text == "زخرفة $ZhName"){ 
$GetZh = json_decode(file_get_contents("https://api.gamemodsm.xyz/ZH/?Text=".urlencode($ZhName)),true); 
$Zh = $GetZh["result"]; 
foreach($Zh as $zh){
 $ZH = "$ZH$zh\n"; 
}
 bot('sendmessage',[ 'chat_id'=>$chat_id, 'text'=>$ZH, 'parse_mode'=>"MarkDown", 'reply_to_message_id'=>$message->message_id ]); }
}


if($text == "تيست" or $text == "test" ){
if ( in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
💯 البوت شـغــال 🚀
",
'reply_to_message_id'=>$message_id,
    ]);
    }

  }
}
}
$rep = $message->reply_to_message;

if(preg_match('/^(تاك)(.*)/',$text)){

 if($rep){

 $text = str_replace('سويتله تاك','',$text);

 bot('sendmessage',[

 'chat_id'=>$chat_id,

 'text'=>"[ تعال يصيحوك](tg://user?id=".$rep->from->id.")",

 'parse_mode'=>'markdown'

 ]);

}

}

mkdir("data/$chat_id");
 if( $text=="مسح الايدي"){
  if ( in_array($from_id,$asase) or in_array($from_id,$cret) or in_array($from_id,$devs3) or in_array($from_id,$Dev)  or in_array($from_id,$developer)) {
  bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🔰┇ تم مسح الايدي",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/$chat_id/$chat_id.txt", "notset");

}
}
if(in_array($from_id,$Dev)){
$Tshakex_DVS = "مطور اساسي";
}elseif(in_array($from_id,$developer) ){
$Tshakex_DVS = "مطور البوت";
}elseif(in_array($from_id,$devs3) ){
$Tshakex_DVS = " مطور رتبه ثالثه  ";
}elseif(in_array($from_id,$asase)){
$Tshakex_DVS = "منشى اساسي";
}elseif(in_array($from_id,$cret)){
$Tshakex_DVS = "منشئ المجموعة";
}elseif(in_array($from_id,$manger) ){
$Tshakex_DVS = "مدير المجموعة";
}elseif(in_array($from_id,$admin_user) ){
$Tshakex_DVS = "ادمن في مجموعة";
}elseif(in_array($from_id,$mmyaz) ){
$Tshakex_DVS = "عضو مميز";
}elseif(!in_array($from_id,$Dev) or !in_array($from_id,$developer) or !in_array($from_id,$cret) or $status !== "creator" or !in_array($from_id,$manger) or !in_array($from_id,$admin_user) or !in_array($from_id,$mmyaz)){
$Tshakex_DVS = "فقط عضو";
}
if(!$username){
$usr = "لا يوجد يوزر";
}elseif($username){
$usr = "@$username";
}
$p_pppp12 = file_get_contents("data/$chat_id/$chat_id.txt");
$tshake_id_set = file_get_contents("data/$chat_id/$from_id.txt");
if ( in_array($from_id,$asase) or in_array($from_id,$cret) or in_array($from_id,$devs3) or in_array($from_id,$Dev)  or in_array($from_id,$developer)) {
if($text == "تعين الايدي"){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" =>"
☑️┇ ارسل الان النص
☑️┇ يمكنك اضافه :
- #username > اسم المستخدم
- #msgs > عدد رسائل المستخدم
- #id > ايدي المستخدم
- #auto > تفاعل المستخدم
- #stast > موقع المستخدم 
- #edit > عدد السحكات
- #game > المجوهرات
",
'reply_to_message_id'=>$message_id

]);
file_put_contents("data/$chat_id/$from_id.txt", "set");
file_put_contents("data/$chat_id/$chat_id.txt", "set");
}}
if($text and $tshake_id_set == "set"){
  bot("sendmessage",[
  "chat_id"=>$chat_id,
  "text" =>"
  ☑️┇ تم حفض الايدي
  ",
  'reply_to_message_id'=>$message_id

  ]);
  unlink("data/$chat_id/$from_id.txt");
  file_put_contents("data/$chat_id/newid.txt", $text);
  }
if(in_array($from_id,$Dev)){
$Tshakex_DVS = "مطور اساسي";
}elseif(in_array($from_id,$developer) ){
$Tshakex_DVS = "مطور البوت";
}elseif(in_array($from_id,$devs3) ){
$Tshakex_DVS = " مطور رتبه ثالثه  ";
}elseif(in_array($from_id,$asase)){
$Tshakex_DVS = "منشى اساسي";
}elseif(in_array($from_id,$cret)){
$Tshakex_DVS = "منشئ المجموعة";
}elseif(in_array($from_id,$manger) ){
$Tshakex_DVS = "مدير المجموعة";
}elseif(in_array($from_id,$admin_user) ){
$Tshakex_DVS = "ادمن في مجموعة";
}elseif(in_array($from_id,$mmyaz) ){
$Tshakex_DVS = "عضو مميز";
}elseif(!in_array($from_id,$Dev) or !in_array($from_id,$developer) or !in_array($from_id,$cret) or $status !== "creator" or !in_array($from_id,$manger) or !in_array($from_id,$admin_user) or !in_array($from_id,$mmyaz)){
$Tshakex_DVS = "فقط عضو";
}
if(!$username){
$usr = "لا يوجد يوزر";
}elseif($username){
$usr = "@$username";
}
  $edit = "0";
  $tfa = "متفاعل";
  $newid = file_get_contents("data/$chat_id/newid.txt");
  $count = count($newid); 
  $msgss = "".$msgs['msgs'][$chat_id][$from_id]."";
  $coin = "".$game['game'][$chat_id][$from_id]."";
  $p_pppp = str_replace("#username","@$username",$newid);
  $p_pppp = str_replace("#id","$from_id",$p_pppp);
  $p_pppp = str_replace("#stast","$Tshakex_DVS",$p_pppp);
  $p_pppp = str_replace("#msgs","$msgss",$p_pppp);
  $p_pppp = str_replace("#game","$coin",$p_pppp);
  $p_pppp = str_replace("#edit","$edit",$p_pppp);
  $p_pppp = str_replace("#auto","$tfa",$p_pppp);
  $p_pppp12 = file_get_contents("data/$chat_id/$chat_id.txt");
if(!$rep && !$re and $text=="ايدي" and $p_pppp12 !== "set" and $p_pppp12 !== "null" and $p_pppp12 == "notset"){
    $iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
    $ss1aa = array_rand($active,1);
var_dump(
bot("sendphoto",[
  "chat_id"=>$chat_id,
  "caption"=>"📬❉ الصورة » صورة مو حلوة ??
⚜️❉ اسمك »  ❨ [$first_name](tg://user?id=$from_id) ❩
🚸❉ معرفك »  ❨ @$username ❩
🏌️‍♂️❉ صورك »  ❨ $count ❩
🥇❉ رتبتك »  ❨  $Tshakex_DVS 👨🏻‍💻 ❩
🎗❉ تفاعلك » ( $active[$ss1aa] )
🎲❉ ايديك »  ❨ $from_id  ❩
💰❉ نقاطك » ❨ ".$game['game'][$chat_id][$from_id]." ❩",
"photo"=>"$file_id",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]));
  }
   
}
if(!$rep && !$re and $text=="ايدي" and $p_pppp12 == "set" and $p_pppp12 !== "null" and $p_pppp12 !== "notset"){
     $iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
  var_dump(
bot("sendphoto",[
  "chat_id"=>$chat_id,
  "caption"=>"$p_pppp",
"photo"=>"$file_id",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]));
}}

if(!$rep && !$re and $text=="ايدي" and $p_pppp12 !== "set" and $p_pppp12 == "null" and $p_pppp12 !== "notset"){
  bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"الايدي معطل في هذه المجموعة",
'reply_to_message_id'=>$message->message_id,
]);
}
  
##################################################################################
mkdir("make") ;
$group = $chat_id ."a";
if($text =="قفل الفشار" and $status == 'creator' or $text =="قفل الفشار" and $status == 'administrator' or $text =="قفل الفشار" and in_array($from_id,$Dev) or $text =="قفل الفشار" and in_array($from_id,$manger) or $text =="قفل الفشار" and in_array($from_id,$admin_user) or $text =="قفل الفشار" and in_array($from_id,$developer) ){
    file_put_contents("make/group.txt","$chat_id\n",FILE_APPEND);
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"تم قفل الفشار",
        'reply_to_message_id'=>$message->message_id,
    ]);
}
$ides = file_get_contents("make/group.txt");
$id_ex = explode("\n",$ides);
$fsh = array ("كلب","نجب","حيوان","كواد","عير بيك","كس اختك","كس خواتكم","انته مطي","من طيزي","سكسي","فلم سكسي","افلام سكسيه","بوت انحراف","منافق","كلب ابن كلب","ابن الخرا","ساقطه","حمار","طيز","منيوج","طيزي","قفاص","كس اخته","شافط","جبان","كلخرا","فرخ","تعال مه","بلاع العير","عير","كس","بعصته","خلي ابعصه","ابن كحبه","جرو","احط النعال بحلكك","دولي","ولي","ولي فرخ","دنجب وكل خرا","دنجب","اف لو نيجك");                
$c = count($fsh)-1;
if (in_array($chat_id,$id_ex)){
if ($text and $status !== 'creator' or $status !== 'administrator' or !in_array($from_id,$Dev) or !in_array($from_id,$manger) or !in_array($from_id,$admin_user) or !in_array($from_id,$developer)){
for ($x = 0 ; $x <=$c ;$x++){
if (strstr($text ,$fsh[$x]) == true ){ 
    bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id,
    ]);
}}}}
if($text =="فتح الفشار" and $status == 'creator' or $text =="فتح الفشار" and $status == 'administrator' or $text =="فتح الفشار" and in_array($from_id,$Dev) or $text =="فتح الفشار" and in_array($from_id,$manger) or $text =="فتح الفشار" and in_array($from_id,$admin_user) or $text =="فتح الفشار" and in_array($from_id,$developer) ){
    $str = str_replace($chat_id,' ',$id_ex);
    file_put_contents("make/group.txt","$str\n");
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"تم فتح الفشار",
        'reply_to_message_id'=>$message->message_id,
    ]);
}