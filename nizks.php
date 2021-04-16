<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
$admin = $admin; //ايديك هنا
if($text =="م8"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"👨‍✈️┊اهلا بك عزيزي 🙋🏽‍♂
🔘┊في اوامر السورس الاضافية !
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
🗯¦ طلب بالرد⊰• للزواج والارتباط⊰•
🗯¦ زوجتي⊰• لمعلومات زوجتك⊰•
🗯¦ الحاسبه ⊰• لعرض الحساب⊰•
🗯¦ غني ⊰• لعرض الاغاني⊰•
🔅¦ـ➖➖➖➖➖
🚨¦ راسلني للاستفسار ↭ ‹ $buy ›
",'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"❎ | لم يتم تفعيل البوت في المجموعة

🛃 | ارسل الامر تفعيل مجاني ℹ️

⏰ | $times › [$aa](tg://user?id=$id) 🕰

",'parse_mode'=>"MARKDOWN",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

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

if($text == "الساعة" or $text == "الزمن" or $text == "الساعه" or $text == "الوقت" and in_array($from_id,$admin_user)){
if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {
bot ('sendMessage',['chat_id'=>$chat_id,'text'=>"
ٴ≪━━━━━━𝙱𝙻━━━━━━≫ٴ
★الساعه ◂ $times $aa
★التاريخ ◂ ".date("Y")."/".date("n")."/".date("d")."
ٴ≪━━━━━━𝙱𝙻━━━━━━≫ٴ",

'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'remove_keyboard'=>true
])
]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"❎ | لم يتم تفعيل البوت في المجموعة

🛃 | ارسل الامر تفعيل مجاني ℹ️

⏰ | $times › [$aa](tg://user?id=$id) 🕰

",'parse_mode'=>"MARKDOWN",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }
  }
}
########
  $HHMHHH = str_replace("صيح ","$HHMHHH",$text); 
if($text == "صيح $HHMHHH" and $file_id == null){
if ($add == true) {
  	bot('sendmessage',[
'text'=>"*
تعال هذا $username يصيحك

 $HHMHHH
*",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'remove_keyboard'=>true
])
]);
   }
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"❎ | لم يتم تفعيل البوت في المجموعة

🛃 | ارسل الامر تفعيل مجاني ℹ️

⏰ | $times › [$aa](tg://user?id=$id) 🕰

",'parse_mode'=>"MARKDOWN",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);}
    } 
  
###########
 $st = str_replace ("كشف ", "", $text); 
$get = file_get_contents("https://ahmadsalim.cf/API/info/index.php?text=$st");
if($text == "كشف $st"){ 
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>" 
$get
",'reply_to_message_id'=>$message->message_id, 
]);
}
#########
$HHMHHH = str_replace("كشف ","$HHMHHH",$text); 
$datainfo = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$HHMHHH"));
$names =$datainfo->result->first_name;
$ids =$datainfo->result->id;
$bios =$datainfo->result->bio;
$users =$datainfo->result->username;

if($text == "كشف $HHMHHH"){
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"➞: 𝒏𝒂𝒎𝒆 𓂅 $names 𓍯➸💞.
➞: 𝒖𝒔𝒆𝒓 𓂅 @$users 𓍯➸💞.
➞: 𝒃𝒊𝒐 𓂅 $bios 𓍯➸💞.
➞: 𝒊𝒅 𓂅 $ids 𓍯➸💞.
",'reply_to_message_id'=>$message->message_id, 
'parse_mode'=>'MarkDown'
]);
}
###########
$MSg_Id = $message->message_id;
$FN_MSg = $message->from->first_name;
$UM_MSg = $message->from->username;
$Id_MSg = $message->from->id;
if(!$UM_MSg){
$MsG = "
☜︎︎︎ : الاسم : $FN_MSg
☜︎︎︎ : الايدي : $Id_MSg
☜︎︎︎ : قام بنشر صوره اباحيه : ☞︎︎︎
";
}elseif($UM_MSg){
$MsG = "
☜︎︎︎ : الاسم : $FN_MSg
☜︎︎︎ : المعرف : @".$UM_MSg."
☜︎︎︎ : قام بنشر صوره اباحيه : ☞︎︎︎
";
}
if($message->photo){
$file = $message->photo[count($message->photo)-1]->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$url = "https://api.telegram.org/file/bot".API_KEY."/$patch"; 
$Api = json_decode(file_get_contents("https://forhassan.ml/my_ip/ImageInfo.php?url=".$url),true);
if($Api['ok']["Info"] == "Indecent"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$MSg_Id,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MsG,
]);}
}
#######
#كود الحاسبه
if($text == "الحاسبه" || $text == "حاسبه" || $text == "حاسبة"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📪¦ اهلا بك $name
💰¦ كيفه استخدام اله الحاسبه كالتالي.
🎁¦ للجمع استخدم : +
🎁¦ للتنقيص استخدم :  -
🎁¦ للظرب استخدم : *
🎁¦ للتقسيم استخدم : /
📮¦ كمثال .
<code>/calc 5*5</code>
<code>/calc 6+8 : 16/4 : 4*4 : 10-8</code>",
'parse_mode'=>'HTML',
'reply_to_message_id'=>$message->message_id,
]);
}
if(strpos($text,'/calc ') !== false || strpos($text,'!calc ') !== false){
$text = str_replace("/calc ","",$text);
$text = str_replace("!calc ","",$text);
$txt = urlencode($text);
$rs = file_get_contents('http://api.mathjs.org/v1/?expr='.$txt);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<code>".$rs."</code>",
'parse_mode'=>'HTML',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
##########
$wifid =  $update->message->reply_to_message->from->id;
$wifname =  $update->message->reply_to_message->from->first_name;
$wife = $update->message->reply_to_message;
$username = $message->from->username;
$rd = $message->reply_to_message->message_id; 
$wi = file_get_contents("g$from_id.txt");
$wi_user = $update->message->reply_to_message->from->username;
$we = file_get_contents("we$from_id.txt"); 
$wee = file_get_contents("$from_id.txt"); 

if($wife && $text == "طلب" && !in_array($re_id, $wi)){
file_put_contents("g$re_id.txt",$re_id);
file_put_contents("we$from_id.txt",$from_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ طلب  [$name](tg://user?id=$from_id)
الزواج منكِ قولي نعم ان كُنتي موافقة 🙊😹💕",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$rd, 
 ]);
    } 
  
if($wife && $text == "نعم" && $from_id == $wi){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ اصبح الان 
[$name](tg://user?id=$from_id) و [$wifname](tg://user?id=$wifid)
زوجا وزوجه 🙂😹💕", 
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$rd, 
]);
unlink("g$from_id.txt");
file_put_contents("$re_id.txt","@$username");
}
if(!$wife && $text == "نعم" && $from_id == $wi){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ قومي بالرد على الشخص 💕", 
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
} 

if($wife && $text == "لا" &&  $from_id == $wi){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ للاسف رفضت 
[$name](tg://user?id=$from_id)
الزواج منك 😔💔", 'parse_mode'=>'markdown',
'disable_web_page_preview'=>trueb,
'reply_to_message_id'=>$rd, 
]);
unlink("$from_id.txt");
}
if(!$wife && $text == "لا" && $from_id == $wi){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ قومي بالرد على الشخص 💕", 
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زوجتي" and $from_id == $we){
bot('sendMessage',[
'chat_id' =>$chat_id,
'text'=>"$wee",'reply_to_message_id'=>$message->message_id, 
]);
}

$car =array ("│صوتي بعد مت سمعه✋يال رايح بلا رجعة🚶بزودك نزلت الدمعة ذاك اليوم☝️يال حبيتلك ثاني✌روح وياه وضل عاني😞يوم اسود علية اني🌚 ذاك اليوم☝️تباها بروحك واضحك😂لان بجيتلي عيني││ وافراح يابعد روحي😌خل الحركة تجويني😔🔥صوتي بعد متسمعة🗣✋","لا تظربني لا تظرب 💃💃 كسرت الخيزارانه💃?? صارلي سنه وست اشهر💃💃 من ظربتك وجعانه🤒😹","اي مو كدامك مغني قديم 😒🎋 هوه ﴿↜ انـِۨـۛـِۨـۛـِۨيـُِـٌِہۧۥۛ ֆᵛ͢ᵎᵖ ⌯﴾❥  ربي كامز و تكلي غنيلي 🙄😒🕷 آإرۈحُـ✯ـہ✟  😴أنــ💤ــااااام😴  اشرف تالي وكت يردوني اغني 😒☹️??","عمي يبو البار 🤓☝🏿️ 
صبلي لبلبي ترى اني سكران 😌 
 وصاير عصبي 😠 
انه وياج يم شامه 😉 
وانه ويــــاج يم شامه  شد شد  👏🏿👏🏿 
عدكم سطح وعدنه سطح 😁 
 نتغازل لحد الصبح 😉 
 انه وياج يم شامه 😍 
 وانه وياج فخريه وانه وياج حمديه 😂🖖🏿",) ;
$carl = array_rand ($car, 1);
$carlos = $car[$carl]; 
$ca = $message->reply_to_message; 
$crr = $ca->message_id;
$message_idd = $update->message->message_id;
$tiger = str_replace("غني ","$tiger",$text); 
$tigr = explode (' ', $text) ;
$tig = $tigr[1]; 
$reply_name = $message->reply_to_message->from->first_name;
$reply_id = $message->reply_to_message->from->id;
if($text == "غني" or $text == "غنيلي" ){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'🎧 ¦ حبيبي ثواني من وقت حد ما اشوفلك اغنيه',
'reply_to_message_id'=>$message->message_id,



 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'🎧 ¦ جاري البحث. ',
'reply_to_message_id'=>$message->message_id,
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'🎧 ¦ جاري البحث..',
'reply_to_message_id'=>$message->message_id,

 ]);
sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'🎧 ¦ جاري البحث...',
 'reply_to_message_id'=>$message->message_id,

 ]); 
sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'🎧 ¦ جاري البحث....',
'reply_to_message_id'=>$message->message_id,

 ]);

 sleep(3);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>"$carlos
 ",
'reply_to_message_id'=>$message->message_id,

  'parse_mode'=>"MARKDOWN",
 ]);
}
////////♥///////

if($text =="حذف الكيبورد"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
$add = $settings["information"]["added"];
if ($add == true) {


bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- تم حذف الكيبورد بنجاح √
",'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'remove_keyboard'=>true
])
]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"❎ | لم يتم تفعيل البوت في المجموعة

🛃 | ارسل الامر تفعيل مجاني ℹ️

⏰ | $times › [$aa](tg://user?id=$id) 🕰

",'parse_mode'=>"MARKDOWN",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

///////////////
if ($text =="تفعيل الالعاب انلاين"){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔓¦ تم بالتاكيد تفعيل العاب انلاين
📮¦ بواسطه ⋙「 [$from_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lon"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📮¦ عذرأ عزيزي عليك تفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل الالعاب انلاين" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔓¦ تم بالتاكيد تعطيل العاب انلاين
📮¦ بواسطه ⋙「 [$from_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lon"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📮¦ عذرأ عزيزي عليك تفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
 
if ($text == "العاب انلاين"){
if($settings["lock"]["lon"] == "مقفول"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"اختر احد الالعاب من الاسفل 👇👇",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"لشراء العاب لبوتك راسلني",'url'=>"http://t.me/kiindi"]],
            [['text'=>"لعبة فلابي بيرد 🐥",'url'=>"https://t.me/awesomebot?game=FlappyBird"]],
            [['text'=>"تحداني فالرياضيات 🔢",'url'=>"https://t.me/gamebot?game=MathBattle"]],
            [['text'=>"تحداني في ❌⭕",'url'=>"http://t.me/Xo_motazbot?start3836619"]],
            [['text'=>"سباق الدراجات 🛵",'url'=>"https://t.me/gamee?game=MotoFX"]],
              [['text'=>"سباق السيارات 🏎",'url'=>"https://t.me/gamee?game=F1Racer"]],
            [['text'=>"متشابه 👾",'url'=>"https://t.me/gamee?game=DiamondRows"]],
            [['text'=>"كرة القدم ⚽",'url'=>"https://t.me/gamee?game=FootballStar"]],
            [['text'=>"دومنا 🥇",'url'=>"https://vipgames.com/play/?affiliateId=wpDom/#/games/domino/lobby"]],
            [['text'=>"❕ليدو",'url'=>"https://vipgames.com/play/?affiliateId=wpVG#/games/ludo/lobby"]],
            [['text'=>"ورق🤹‍♂",'url'=>"https://t.me/gamee?game=Hexonix"]],
            [['text'=>"لعبة 2048 🎰",'url'=>"https://t.me/awesomebot?game=g2048"]],
              [['text'=>"Hexonix❌",'url'=>"https://t.me/gamee?game=Hexonix"]],
            [['text'=>"MotoFx🏍️",'url'=>"https://t.me/gamee?game=MotoFx"]],
            [['text'=>"Squares🏁",'url'=>"https://t.me/gamee?game=Squares"]],
            [['text'=>"Atomic 1▶️",'url'=>"https://t.me/gamee?game=AtomicDrop1"]],
            [['text'=>"Corsairs",'url'=>"https://t.me/gamebot?game=Corsairs"]],
              [['text'=>"LumberJack",'url'=>"https://t.me/gamebot?game=LumberJack"]],
            [['text'=>"LittlePlane",'url'=>"https://t.me/gamee?game=LittlePlane"]],
            [['text'=>"RollerDisco",'url'=>"https://t.me/gamee?game=RollerDisco"]],
            ]
        ])
        ]);
}
}
if($text == "العاب انلاين"){
if($settings["lock"]["lon"] == "مفتوح"){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"📮¦ عزيزي ⋙「 [$from_name](tg://user?id=$from_id) 」
🔓¦ العاب انلاين معطله من قبل المدراء",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true
]);
}
}
////////////
if ($text =="فتح العاب الروليت"){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔓¦ تم بالتاكيد تم فتح العاب الروليت
📮¦ بواسطه ⋙「 [$from_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["lon"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📮¦ عذرأ عزيزي عليك تفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="قفل العاب الروليت" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$carlos)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🔓¦ تم بالتاكيد قفل العاب الروليت
📮¦ بواسطه ⋙「 [$from_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lon"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📮¦ عذرأ عزيزي عليك تفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

 $b = explode("\n", file_get_contents("$chat_id.txt"));
$armof = array_rand($b,1);
$first_name = $message->from->first_name;
$armofc = count($b)+1;
 if($text == "روليت"){
if($settings["lock"]["lon"] == "مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حسنا ارسل انظمام للانظمام للعبة 💕🌻",
]);
}}
if($text == "انظمام" or $text == "انضمام"){
if($settings["lock"]["lon"] == "مقفول"){
if(!in_array($first_name , $b)){
file_put_contents("$chat_id.txt",$first_name ."\n", FILE_APPEND);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
تم اضافتك الى اللعبه انتظر اكتمال العدد
العدد الان ⬅️ $armofc
العدد الكلي ⬅️ 5 "
]);
}}}
if($text == "انظمام" or $text == "انضمام"){
if(in_array($first_name , $b)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تم اضافتك الى اللعبه مسبقا ✅"
]);
}}


if($text == "روليت"){
if($settings["lock"]["lon"] == "مفتوح"){
bot("sendmessage",['chat_id'=>$chat_id,'text'=>"📮¦ عزيزي ⋙「 [$from_name](tg://user?id=$from_id) 」
🔓¦ العاب روليت معطله من قبل المدراء",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true
]);
}
}
if($message and $armofc > 4){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" الفائز 💕👉 $b[$armof]",
]);
unlink("$chat_id.txt");
}

