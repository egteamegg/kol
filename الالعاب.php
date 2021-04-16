<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}elseif($status == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($status == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($from_id,$admin_user) ){
$info = "ادمن في المجموعة 💂";
}elseif(in_array($from_id,$manger) ){
 $info = "مدير المجموعة 🙇";
}elseif(in_array($from_id,$mmyaz) ){
 $info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
 $info = "مطور البوت 👷";
}elseif($status == "member" ){
$info = "عضو فقط 😿";
}
if(!$username){
$usr = "لايوجد معرف";
}elseif($username){
$usr = "@$username";
}
$game = json_decode(file_get_contents('game.json'),true);
$from_user = $message->from->username;
$from_name = $message->from->first_name;
$get_game = file_get_contents("game.txt");
$game1 = explode("\n",$get_game);
$gg1zz = array('اســرع واحد يرتب » { ل ، س ، ا ، ق ، ت ، ب ،ا } «','اســرع واحد يرتب » { ه ، ا ، ع ، ر ، ا } «','اســرع واحد يرتب » { ر ، و ، ح ، س } «','اســرع واحد يرتب » { ن ، ف ، ه ، ق } «','اســرع واحد يرتب » { و ، ن ، ي ، ا ، ف } «','اســرع واحد يرتب » { ن ، و ، ه ، ب ، ز } «','اســرع واحد يرتب » { ر ، ك ، و ، س ، ت ، ن ، ا ، ي } «','اســرع واحد يرتب » { ا ، ن ، م ، ل ، ي } «','اســرع واحد يرتب » { و ، ه ، ق ، ه } «','اســرع واحد يرتب » { ف ، ي ، س ، ه ، ن } «','اســرع واحد يرتب » { ج ، ا ، د ، ج ، ه } «','اســرع واحد يرتب » { س ، م ، ر ، د ، ه } «','اســرع واحد يرتب » { ا ، ن ، ا ، و ، ل } «','اســرع واحد يرتب » { ه ، غ ، ف ، ر ، } «','اســرع واحد يرتب » { ج ، ه ، ث ، ل ، ا } «','اســرع واحد يرتب » { خ ، م ، ب ، ط } «');
$get_iBadlz = array_rand($gg1zz, 1);
$fast = array('• اسرع واحد يرسل » { احمد }','• اسرع واحد يرسل » { محمد }','• اسرع واحد يرسل » { قناة }','• اسرع واحد يرسل » { بوت روكي }','• اسرع واحد يرسل » { رمضان }','• اسرع واحد يرسل » { تيم كايدو }','• اسرع واحد يرسل » { العبسي }','• اسرع واحد يرسل » { تلفون }','• اسرع واحد يرسل » { مطبخ }','• اسرع واحد يرسل » { اليمن }','• اسرع واحد يرسل » { سوريا }','• اسرع واحد يرسل » { العراق }','• اسرع واحد يرسل » { السعوديه }','• اسرع واحد يرسل » { مصر }','• اسرع واحد يرسل » { السودان }');
$faster = array_rand($fast, 1);
$mthal = array('• اكمل المثل التالي ؛👇
• { لكل حالة مقاله ولكل .... برع } •','• اكمل المثل التالي ؛👇
• { عادت .... الى عادتها القديمه } •','• اكمل الحكمة التاليه ؛👇
• { من .... العلى سهر الليالي } •','• اكمل المثل التالي ؛👇
• { مخرب .... الف عمار } •','• اكمل المثل التالي ؛👇
• { من .... لقي } •','• اكمل المثل التالي ؛👇
• { ادخلها من ..... واخرجها من الثانيه } •','• اكمل المثل التالي ؛👇
• { ادق من خيط .... } •','• اكمل المثل التالي ؛👇
• { اذا التقت .... هانت الحقوق } •','•  اكمل المثل التالي ؛👇
• { كل .... فيه خير } •',' • اكمل الجمله التالي ؛👇
• { كما تدين .... } •',' • اكمل الجمله التالي ؛👇
• { الصميل خرج من .... } •',' • اكمل المثل التالي ؛👇
• { اللي مايعرف .... يشويه } •',' • اكمل المثل التالي ؛👇
• { الهربات كثير و ..... وحده } •',' • اكمل المثل التالي ؛👇
• { القبيلي .... نفسه } •'
);
$qui1 = array('•| سؤال :/ ماهو اسرع المخلوقات البحريه على الاطلاق؟!','•| سؤال :/ ماهي اقوى انواع الحجارة؟!','•| سؤال :/ ماهي السورة التي ذكر فيها بالعوض؟!','•| سؤال :/ ماهي اول عمله اسلاميه؟!','•| سؤال :/ ماهو الحيوان الذي اذا قطعت احدى اذرعته نمت مره اخرى؟!','•| سؤال :/ ماهو اسرع الحيوان الذي يصاب بالحصبه كالانسان؟!','•| سؤال :/ ماهو العنصر الذي اذا وجد في الحليب اصبح الحليب غذاء كامل؟!','•| سؤال :/ من هو مؤسس علم الجبر؟!','•| سؤال :/ من هو اقوى الحيوانات ذاكرة؟!');
$qui2 = array_rand($qui1,1);
$ope1 = array('
• ماعكس هاذه الكلمه •{ جاوع }•','• ماعكس هاذه الكلمه •{ فارغ }•','• ماعكس هاذه الكلمه •{ سمين }•','• ماعكس هاذه الكلمه •{ بخيل }•','
• ماعكس هاذه الكلمه •{ شجاع }•','
• ماعكس هاذه الكلمه •{ الخوف }•','
• ماعكس هاذه الكلمه •{ عاقل }•','
• ماعكس هاذه الكلمه •{ كن }•','
• ماعكس هاذه الكلمه •{ الذهاب }•','
• ماعكس هاذه الكلمه •{ العودة }•','
• ماعكس هاذه الكلمه •{ مطفئه }•','
• ماعكس هاذه الكلمه •{ الليل }•','
• ماعكس هاذه الكلمه •{ مضلم }•','
• ماعكس هاذه الكلمه •{ حالي }•'
);
$ope2 = array_rand($ope1 ,1);
$mog1 = array('
• ارسل المختلف من الايموجي 👇
{ 😫😫😫😫😩😫😫😫 }','
• ارسل المختلف من الايموجي 👇
{ ✌️✌️🤘✌️✌️✌️✌️✌️ }','
• ارسل المختلف من الايموجي 👇
{ 🧝‍♂🧝‍♂🧝‍♂🧝‍♂🧝‍♀🧝‍♂🧝‍♂🧝‍♂ }','
• ارسل المختلف من الايموجي 👇
{ 😰😰😰😰😥😰😰😰 }','
• ارسل المختلف من الايموجي 👇
{ 💏💏💏👩‍❤️‍💋‍👩💏💏💏💏 }','
• ارسل المختلف من الايموجي 👇
{ 👨‍👦👨‍👧👨‍👦👨‍??👨‍👦👨‍👦👨‍??👨‍👦 }','
• ارسل المختلف من الايموجي 👇
{ ❤️❤️❤️❤️🧡❤️❤️❤️️ }','
• ارسل المختلف من الايموجي 👇
{ 💗💗💗💗💗💗💓💗 }');
$mog2 = array_rand($mog1, 1);
$meen1 = array('
• مامعنى هاذه الكلمه •{ فحط }•','• مامعنى هاذه الكلمه •{ ذهب }•','• مامعنى هاذه الكلمه •{ عاد }•','
• مامعنى هاذه الكلمه •{ يلفظ }•','
• مامعنى هاذه الكلمه •{ خروج }•','
• مامعنى هاذه الكلمه •{ يراعي }•','
• مامعنى هاذه الكلمه •{ ينتظر }•','
• مامعنى هاذه الكلمه •{ مؤمن }•','
• مامعنى هاذه الكلمه •{ مسلم }•','
• مامعنى هاذه الكلمه •{ بيت }•','
• مامعنى هاذه الكلمه •{ محافظة }•','
• مامعنى هاذه الكلمه •{ دولة }•');
$ras = array('113+133-2=??','876+11-9=??','197×2-190=??','44-15+15=??','13+12-13-1+4=??','900000+2-900000=??','5322+1-1=??','21+25-13=??','909+75-5=??','44-1+11=??','532+256=??','6321+4667-10000=??');
$rass = array_rand($ras, 1);
$meen2 = array_rand($meen1, 1);
mkdir("game/$chat_id");
$level = file_get_contents("game/$chat_id/game.txt");
$mthals = array_rand($mthal, 1);
if(in_array($chat_id,$game1) and $text == '244' or $text == '878'  or $text == '204'  or $text == '44'  or $text == '15'  or $text == '2' or  $text == '5322' or $text == '33' or $text == '979' or $text == '34' or $text == '788' or $text == '988'){
if($level == "gamere"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if($text =="امثله" or $text =="امثلة"){
file_put_contents("game/$chat_id/game.txt","gamem");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mthal[$mthals],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="رياضيات" or $text =="الرياضيات"){
file_put_contents("game/$chat_id/game.txt","gamere");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ras[$rass],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="كلمات" or $text =="الاسرع"){
file_put_contents("game/$chat_id/game.txt","gamew");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$fast[$faster],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="معاني" or $text =="المعاني"){
file_put_contents("game/$chat_id/game.txt","gamees");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$meen1[$meen2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="اسئله" or $text =="الاسئله" or $text == "الاسئلة"){
file_put_contents("game/$chat_id/game.txt","gameq");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$qui1[$qui2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="المختلف" or $text =="مختلف"){
file_put_contents("game/$chat_id/game.txt","gamed");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$mog1[$mog2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="العكس" or $text =="عكس"){
file_put_contents("game/$chat_id/game.txt","gameo");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ope1[$ope2],
'reply_to_message_id'=>$message->message_id]);
}}
if($text =="الترتيب" or $text =="ترتيب"){
file_put_contents("game/$chat_id/game.txt","gamet");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$gg1zz[$get_iBadlz],
'reply_to_message_id'=>$message->message_id]);
}}
if(in_array($chat_id,$game1) and $text == 'سحور' or $text == 'سياره'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'قهوه' or $text == 'سفينه' or $text == 'اليمن'){
if($level == "gamet"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == '🧝‍♀' or $text == '👩‍❤️‍💋‍👩'  or $text == '😩'  or $text == "🧡" or $text == " ‍‍‍👨‍👦" or $text == '💓'  or $text == '🤘'  or $text == '👨' or  $text == '😥'){
if($level == "gamed"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'ينطق' or $text == 'مغادره'  or $text == 'منزل'  or $text == 'ينتظر'  or $text == 'يراعي'  or $text == 'مؤمن' or  $text == 'مسلم' or $text == 'دولة' or $text == 'دوله' or $text == 'مدينه' or $text == 'مدينة' or $text == "هرب" or $text == "رجع" or $text == "راح"){
if($level == "gamees"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'شابع' or $text == 'ممتلئ'  or $text == 'مليان'  or $text == 'نحيف'  or $text == 'سخي'  or $text == 'خائف' or  $text == 'الشجاعه' or $text == 'مجنون' or $text == 'لاتكن' or $text == 'الاياب' or $text == 'الإياب' or $text == 'الرجوع' or $text == 'منيره' or $text == 'النهار' or $text == 'منير' or $text == 'مضيئ' or $text == "مالح" or $text == "حامض"){
if($level == "gameo"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("gamess.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'شقي' or $text == 'دقه'  or $text == 'دقة'  or $text == 'حليمه'  or $text == 'حليمة'  or $text == 'طلب' or  $text == 'غلب' or $text == 'الوجوه' or $text == 'الوجوة' or $text == 'الاوجه' or $text == 'الاوجة' or $text == 'اذن' or $text == 'أذن' or $text == 'الابره' or $text == 'الابرة' or $text == "تاخير" or $text == "تدان" or $text == "الجنه" or $text == "الجنة" or $text == "الصقر" or $text == "الودافه" or $text == "قاتل"){
if($level == "gamem"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'نجم البحر' or $text == 'الخوارزمي'  or $text == 'سمك التونه'  or $text == 'سمك التونة'  or $text == 'الالماس'  or $text == 'البقره' or  $text == 'البقرة' or $text == 'الدينار الذهبي' or $text == 'القرد' or $text == 'الحديد' or $text == 'الجمل' or $text == 'الدينار'){
if($level == "gameq"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
if(in_array($chat_id,$game1) and $text == 'العبسي' or $text == 'احمد'  or $text == 'اليمن'  or $text == 'مصر'  or $text == 'السودان'  or $text == 'سوريا' or  $text == 'العراق' or $text == 'رمضان' or $text == 'تيم كايدو' or $text == 'تلفون' or $text == 'بوت روكي' or $text == 'قناة' or $text == 'محمد' or $text == 'مطبخ'){
if($level == "gamew"){
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);
file_put_contents('game.json', json_encode($game));
file_put_contents("game/$chat_id/game.txt","");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",
'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);
file_put_contents("game.txt","MMoHaMMeD");
}}
$iBadlz_smile = array('🍏','🍎','843578','9755','25677','578866','14589','🍐','🍊','🍋','🍌','🍉','🍇','🍓','🍈','🍒','🍑','🍍','🥥','🥝','🍅','🍆','🥑','🥦','??','🌶','🌽','🥕','🥔','🍠','🥐','🍞','🥖','🥨','🧀','🥚','🍳','🥞','🥓','🥩','🍗','🍖','🌭','🍔','🍟','🍕','🥪','🥙','🍼','☕️','🍵','🥤','🍶','🍺','🍻','🏀','⚽️','🏈','⚾️','🎾','🏐','🏉','🎱','🏓','🏸','🥅','🎰','🎮','🎳','🎯','🎲','🎻','🎸','🎺','🥁','🎹','🎼','🎧','🎤','🎬','🎨','🎭','🎪','🎟','🎫','🎗','🏵','🎖','🏆','🥌','🛷','🚕','7643','93289','3457','95439','378865','24568','9976','289','2288','2854','🚗','🚙','🚌','🚎','🏎','🚓','🚑','🚚','🚛','🚜','🇮🇶','⚔','🛡','🔮','🌡','💣','📌','📍','📓','📗','📂','📅','📪','📫','📬','📭','⏰','📺','🎚','☎️','📡');$MOD = array_rand($iBadlz_smile,1);
if($text =="سمايلات" || $text =="سمايل"){
file_put_contents("game/$chat_id/game.txt","games");
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
file_put_contents("game.txt",$chat_id);bot('sendMessage',['chat_id'=>$chat_id,'text'=>"اسرع واحد يدز هذهہٓ ›› `$iBadlz_smile[$MOD]`",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}}
if(in_array($text,$iBadlz_smile) and in_array($chat_id,$game1) and $level == "games"){file_put_contents("gamess.txt","");$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);file_put_contents("game.txt","MMoHaMMeD");}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  > 0){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*📮¦ عدد النقود التي ربحتها هي » { ".$game['game'][$chat_id][$from_id]." }*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  == 0){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*💬¦ ليس لديك نقود ،
📬¦ للحصول ؏ النقود ،
📮¦ ارسل الالعاب وابدأ اللعب !*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  >= 19 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 20 } من نقودك ،📨¦ وتم اضافة » { 200 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+200);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  > 49 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 50 } من نقودك ،📨¦ وتم اضافة » { 600 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+600);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-50);file_put_contents('game.json', json_encode($game));
}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  > 99 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 100 } من نقودك ،📨¦ وتم اضافة » { 1000 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+200);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if($text == "msg" or $text == "رسائلي"){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*  💬 ❉ رسائلك »  { ".$msgs['msgs'][$chat_id][$from_id]." } ➺*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
elseif($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  < 19){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*⚜¦ لايمكنني بيع نقودك  ،
❗️¦ يجب ان تكون نقودك 20 فما فوق !*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}


if($text == "الالعاب" || $text == "قائمه الالعاب"){
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفعله") {
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"🕹┊اهلا بك في قائمة الالعاب لـبوت $namebot 📸
🖲┊هناك 10 العاب تستطيع اللعب بها في المجموعه 👁‍🗨
ـــ ـــ ـــ ــــ ــــ
⚙️¦•⊱ لتفعيل الالعاب او تعطيلها ارسل،  ! 
🎖¦•⊱ تفعـيل ⊰• تعطيل •⊱ الالعاب
ـــ ـــ ـــ ــــ ــــ
🤹🏻‍♂️¦•⊱ † الاسرع † اسـرع واحد 
🎰¦•⊱ † معاني † معاني السمايلات
🎨¦•⊱† ترتيب †  ترتيب الكلمات 
🎭¦•⊱ † رياضيات † لعبة جمع وطرح
🎙¦•⊱ † الاسئله † اسئله عامه 
💠¦•⊱† امثله † لعبه امثله قديمه 
🛎¦•⊱ † المختلف † تشابه واختلاف 
🦠¦•⊱ † سمايلات † لعبة سمايلات
🌋¦•⊱ † تخمين † لعبة تخمين ارقام
♻️¦•⊱ †  العكس † لعبة عكس الكلمات
🧭¦•⊱ العاب انلاين للعب الان
ـــ ـــ ـــ ــــ ــــ
💬 ¦•⊱ للمزيد من المعلومات ، ء ! 
🎭┊معرف الـمطور  : $buy
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MARKDOWN",
	]);
	}
else
{ 
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"🕹┊اهلا بك في قائمة الالعاب لـبوت $namebot 📸
- للاسف حالة الالعاب { معطله }",
]);
}
}
if($message and $tc == "supergroup"){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));
}
if($text =="تعطيل الالعاب" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم تعطيل الالعاب
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مقفله";
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
elseif($text =="تفعيل الالعاب" or $text =="تفعيل الألعاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🙋🏼‍♂┊اهلا عزيزي [$info](tg://user?id=$from_id)
📬┊تم تفعيل الالعاب
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مفعله";
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
if($text == "مسح رسايلي" or $text == "مسح رسائلي"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*📌✣ تم مسح { ".$msgs['msgs'][$chat_id][$from_id]." } من رسائلك ✓*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]=0);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if ($settings["lock"]["gamess"] == "مقفله"){
$gamesText = $update->message->text;
if($gamesText == "الالعاب"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛 ¦ لايمكنني اللعب معك بامر من المنشئ ☹💔",
    ]);
	}
}
}
}
 